/**
 * Google Maps javascript file for the homepage.
 * @author daithi coombes <daithi.coombes@futureanalytics.ie>
 */

var infoWindow = null;

/**
 * @class ReusingDublinMap
 */
function ReusingDublinMap(){

    /**
     * Holds current open gmaps marker infowindow()
     * @see ReusingDublinMap::doMarker()
     * @type {[type]}
     */
    this.infowindow = null;

    /**
     * FusionTable layers
     * @type {array}
     */
    this.layers = [];

    /**
     * Google map instance
     * @type google.maps.Map
     */
    this.map = {};

    this.markers = [];

    /**
     * Array of map markers, with site_id as key.
     * @type {Array}
     */
    this.markersMap = [];

    /**
     * An array of Site objects.
     * @see ReusingDublinMap::getSites()
     * @type {Array}
     */
    this.sites = [{}];

    /**
     * The state of the maps.
     *  edit|view Default view.
     * @type {String}
     */
    this.state = 'view';

    /**
     * An array of style objects for gmaps.
     * @{@link http://stackoverflow.com/a/4003664/288644}
     * @type {Array}
     */
    this.stylez = [{
        featureType: "all",
        elementType: "all",
        stylers: [{
            saturation: -100
        }]
    }];

    /**
     * GMaps options.
     * @type {Object}
     */
    this.mapOptions = {
        div:             '#map-canvas',
        center:          new google.maps.LatLng(53.347884693,-6.2731253419999575),
        scrollwheel:     false,
        zoomControl:     true,
        zoom:            16,
        mapTypeId:       google.maps.MapTypeId.ROADMAP,
        mapTypeControlOptions: {
            mapTypeIds:  [google.maps.MapTypeId.SATELLITE, google.maps.MapTypeId.ROADMAP, 'tehgrayz', 'OSM']
        },
        style:           google.maps.ZoomControlStyle.LARGE
    };

}

/**
 * @constructor
 * @memberOf {ReusingDublinMap}
 * @return {ReusingDublinMap} Returns self for chaining.
 */
ReusingDublinMap.prototype.init = function(){

    var self = this;

    var mapCanvas   = document.getElementById('map-canvas'),
        map         = new google.maps.Map(mapCanvas, self.mapOptions),
        mapType     = new google.maps.StyledMapType(self.stylez, { name:"Grayscale" }),
        sites;
    self.map = map;

    //set map style
    self.map.mapTypes.set('tehgrayz', mapType);
    self.map.mapTypes.set('OSM', new google.maps.ImageMapType({
        getTileUrl: function(coord, zoom){
            var tilesPerGlobe = 1 << zoom;
            var x = coord.x % tilesPerGlobe;
            if(x<0){
                x = tilesPerGlobe+x;
            }

            return "http://tile.openstreetmap.org/"+zoom+"/"+x+"/"+coord.y+".png";
        },
        tileSize: new google.maps.Size(256,256),
        name: "OpenStreetMap",
        maxZoom: 18
    }))
    self.map.setMapTypeId('tehgrayz');

    //get sites, append to markers
    self.getSites(function(sites){

        var _self   = self,
            _map    = map,
            mc      = {},
            markers = [],
            clusterGroup = [];

        //create markers
        $(sites).each(function(i, site){

            //hack to fix googles stupidity...
            //map markers[key] => site.id
            var index = _self.markers.length;
            _self.markers[index] = _self.doMarker(_map, site);
            _self.markersMap[site.id] = index;
        });

        mc = new MarkerClusterer(_map, _self.markers);
        return _self;
    });

    // custom controls (map navbar)
    self.doControls(self.map);

    //add new site click listener
    google.maps.event.addListener(self.map, 'click', function(event) {

        if(self.state=='view')
            return;

        var _self   = self,
            _map    = self.map,
            site    = {
                lat: event.latLng.lat(),
                lng: event.latLng.lng(),
                address1: 'Add a site',
                id: 'custom'
            };

        var marker = _self.doMarker(_map, site);
        new google.maps.event.trigger( marker, 'click' );
        self.state = 'view';
    });

    //init kml's
    self.initKML();

    //init fusion tables
    self.initLayers();

    return self;
}

/**
 * Initial KML drawings/layers
 * @member ReusingDublinMap
 * @return ReusingDublinMap
 */
ReusingDublinMap.prototype.initKML = function(){

    var self = this;

    //Setting the source for the luas kmz file.
    var src2 = 'http://factest.ie/kmls/Luas.kmz',
        luasLine = new google.maps.KmlLayer(src2,
            {
                suppressInfoWindows: true,
                preserveViewport:true,
                map: self.map
            });

    luasLine.setMap(self.map);

    return self;
}

/**
 * Initiate fustion table layers
 * @member ReusingDubilnMap
 */
ReusingDublinMap.prototype.initLayers = function(){

    var self = this,
        keys = [];

    //dcc development planning zonings
    keys.push('13FSnVnu4FdWRF7Ei1rsLyDdKSdGUxH41ocyKt7kE');
    //protected structures
    keys.push('1Niv7EjH45UQCAHqWfsgYIi3zc1jI3tIEqUr1Wa7g');
    //building usage
    keys.push('1EEsLj60M9vX7PblFnk3DZ9jNDZTYGLEDrVU92-sA');
    //dcc planning applications
    keys.push('1yqEULmUVjBJp8MO83rNMs3W9mUh_vnx5xEslAFsr');

    $.getJSON("/assets/js/reusingdublinGmapsStyles.json", function(styles){

        var map = reusingDublinMap.getMap();

        //build and add layers to layer[]
        for(var x=0; x<keys.length; x++){

            //building usage
            reusingDublinMap.layers[x] = new google.maps.FusionTablesLayer({
                query: {
                    select: 'col10',
                    from: keys[x]
                },
                styles: styles[x]
            });

            //onClick edit infowindow
            reusingDublinMap.layers[x].addListener('click', function(e){

                //get array of html'd data from infowindow popup
                var data = [],
                    infowindow = $('<div/>').html(e.infoWindowHtml)
                                    .contents()
                                    .html(),
                    html = '<div class="fusiontable-infowindow"><dl>',
                    parts = infowindow.split('<br>');

                //create key=>value pairs of html'd data
                for(var x=0; x<parts.length; x++){

                    //regex /<b>(.+)<\/b>(.+)/igm => key=value
                    var _parts = parts[x].match(/<b>(\w*\s*):<\/b>(.*)/im);

                    //skip keys
                    if(
                        _parts[1]=='geometry' ||
                        _parts[1]=='geometry_vertex_count' ||
                        _parts[1]=='OBJECTID_1' ||
                        _parts[1]=='ZONE_ORIG_ft_style' ||
                        _parts[1]=='ZONE_DESC_ft_style' ||
                        _parts[1]=='ZONE_LINK_ft_style'
                    )
                        continue;

                    //rename keys
                    if(_parts[1]=='ZONE_ORIG') _parts[1]='Zoning Classification';
                    if(_parts[1]=='ZONE_DESC') _parts[1]='Zoning Description';
                    if(_parts[1]=='ZONE_LINK') _parts[1]='Link to Plan';
                    if(_parts[1]=='Shape_Area') _parts[1]='Zone Area (sqm)';

                    html += ''
                        + ' <dt class="layer-key"><b>'+_parts[1]+'</b></dt>'
                        + ' <dd class="layer-val">'+_parts[2]+'</dd>'
                        + '';
                }

                //rebuild infowindow
                e.infoWindowHtml = html+'</dl></div>';
            });
        };
    });
}

/**
 * @return google.maps.Map
 */
ReusingDublinMap.prototype.getMap = function(){
    return this.map;
}

/**
 * Add custom controls (navbar) to map.
 * @param  {google.maps.Map} map The google map instance.
 * @return {ReusingDublinMap}     returns self for chaining.
 */
ReusingDublinMap.prototype.doControls = function(map){

        var controlDiv  = document.createElement('div'),
            mapNav      = document.getElementById('mapNavBar'),
            self        = this;

        controlDiv.appendChild(mapNav);

        //add autocomplete
        $('#mapSearch', controlDiv).autocomplete({
            lookup: function(query, done){
                $.getJSON('/api/Site/autocomplete/'+query, function(data){
                    var result = {
                        suggestions: data
                    }
                    done(result);
                });
            },
            onSelect: function(suggestion){

                    var map = reusingDublinMap.getMap(),
                        index = reusingDublinMap.markersMap[suggestion.data],
                        marker = reusingDublinMap.markers[index];

                    google.maps.event.trigger(marker, 'click');
                    //reusingDublinMap.infowindow.open(map, marker);
                    //reusingDublinMap.markers[suggestion.data].showInfoWindow();
                }
        });
        /*
        $('#typeahead-input', mapNav).typeahead({
            source: function(query, process){
                return $.get('/api/Site/search/'+query, function(data){
                    return process(data);
                });
            }
        });
        */

        //add site btn
        $('#mapAddSite', controlDiv).click(function(e){
            e.preventDefault();

            alert('Left click on the map with your mouse or tap to Add a New Site');
            reusingDublinMap.state = 'edit';
        })

        //more info layers dropdown
        $('#mapLayers', controlDiv).change(self.doLayer);

        controlDiv.index = 1;
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(controlDiv);

        return self;
}

/**
 * Dropdown handler to place layer on map.
 * @member ReusingDublin
 * @return ReusingDublin
 */
ReusingDublinMap.prototype.doLayer = function(){

    var self = reusingDublinMap;

    var index   = $(this).val(),
        key    = '',
        layer   = {},
        map     = self.getMap();

    //clear old map
    for(var x=0; x<self.layers.length; x++){
        self.layers[x].setMap(null);
    }


    self.layers[index].setMap(map);

    return self;
}

/**
 * Write Site markers to map.
 * @param {google.maps.Map} map Google maps instance.
 * @param  {array} sites An array of Site objects.
 * @memberOf ReusingDublinMap
 * @return {ReusingDublinMap}   Returns self for chaining.
 */
ReusingDublinMap.prototype.doMarker = function(map, site){

    var self = this;
    var myLatlng    = new google.maps.LatLng(site.lat,site.lng),
        marker      = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: site.address1,
            siteId: site.id
        });

    var contentString = '<div class="infowindow">' +
        '   <h3>'+site.address1+'</h3>' +
        //'   <a class="btn btn-primary btn-large" onclick="reusingDublinMap.dialog(\''+site.id+'\',\'edit\',\''+marker.position.A+'\',\''+marker.position.F+'\')">ENTER THE DESCRIPTION</a>'+
        '   <a class="btn btn-primary btn-large" onclick="reusingDublinMap.dialog(\''+site.id+'\',\'edit\',\''+marker.position.lat()+'\',\''+marker.position.lng()+'\')">ENTER THE DESCRIPTION</a>'+
        '   <a class="btn btn-primary btn-large" onclick="reusingDublinMap.dialog(\''+site.id+'\',\'edit\')">UPDATE THE DESCRIPTION</a>';

    if(site.id!='custom')
        contentString += '   <a class="btn btn-primary btn-large" onclick="reusingDublinMap.dialog(\''+site.id+'\',\'\')">VIEW THE DESCRIPTION</a>';

    contentString += '</div>';

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    google.maps.event.addListener(marker, 'click', function() {
        if(reusingDublinMap.infowindow)
            reusingDublinMap.infowindow.close();

        infowindow.open(map,marker);
        reusingDublinMap.infowindow = infowindow;
    });

    return marker;
}

/**
 * Site modal dialog popup.
 * @param  {integer} siteId The site id
 */
ReusingDublinMap.prototype.dialog = function(siteId, action, lat, lng){

    var self = this;

    var html = $('#siteDescription .modal-body').html(),
        site = self.getSite(siteId),
        y = screen.height*.7;   // 70%

    //new site?
    if(siteId=='custom')
        site = {
            address1: 'Add a site'
        };

    BootstrapDialog.show({
        message: '<iframe class="siteModal" src="/site/'+action+'?modal=1&amp;id='+siteId+'&amp;lat='+lat+'&amp;lng='+lng+'" width="100%" height="'+y+'"></iframe>',
        title: site.address1,
        height: y
    });
}

/**
 * Get a site from persistence
 * @uses RuesingDublin.sites Sites persistence.
 * @param  {integer} id The site id
 * @return {object}    Returns the Site object.
 */
ReusingDublinMap.prototype.getSite = function(id){

    var self = this;

    return self.sites[id];

}

/**
 * Ajax request for sites.
 * @param  {Function} fn Callback function
 * @return {ReusingDublinMap}      Returns self for chaining.
 */
ReusingDublinMap.prototype.getSites = function(fn){

    var self        = this,
        callback    = fn;

    //grab sites
    $.ajax('/api/Site/getSites/title/lat/lng',
    {
        dataType: 'json',
        complete: function(xhr, status){

            var _self = self;

            if(xhr.responseJSON.error)
                return alert(xhr.responseJSON.error);

            //ReusingDublin.sites[] persistence. Index by sites.id
            _self.sites = (function(){

                var ret = [];

                $(xhr.responseJSON).each(function(i,site){
                    ret[site.id] = site;
                });

                return ret;
            })();

            if(callback){
                return callback(xhr.responseJSON);
            }

            return xhr.responseJSON;
        }
    });

    return self;
}

/**
 * Get Infowindow object from google maps.
 * @param {Site} site A site object.
 * @memberOf ReusingDublinMap
 * @return {google.maps.infowindow} Returns gmap Infowindow
 */
ReusingDublinMap.prototype.infowindow = function(site){

    var self   = this,
        _site   = site;

    var infowindow = new google.maps.InfoWindow(function(){

        return {
            content: '<div class="infowindow">' +
                '   <h3>'+this.title+'</h3>' +
                '</div>'
        };
    });

    return infowindow;
}


/**
 * maps javascript instance
 * @type {ReusingDublinMap}
 */
var reusingDublinMap = new ReusingDublinMap();
