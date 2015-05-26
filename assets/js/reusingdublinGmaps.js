/**
 * Google Maps javascript file for the homepage.
 * @author daithi coombes <david.coombes@futureanalytics.ie>
 */


/**
 * @class ReusingDublinMap
 */
function ReusingDublinMap(){

    /**
     * Google map instance
     * @type google.maps.Map
     */
    this.map = {};

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
            mapTypeIds:  [google.maps.MapTypeId.ROADMAP, 'tehgrayz']
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
        map    = new google.maps.Map(mapCanvas, self.mapOptions),
        mapType     = new google.maps.StyledMapType(self.stylez, { name:"Grayscale" }),
        sites;
    self.map = map;

    //set map style
    self.map.mapTypes.set('tehgrayz', mapType);
    self.map.setMapTypeId('tehgrayz');

    //get sites, append to markers
    self.getSites(function(sites){

        var _self   = self,
            _map    = map;

        //create markers
        $(sites).each(function(i, site){
            _self.doMarker(_map, site);
        });

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
                lat: event.latLng.A,
                lng: event.latLng.F,
                address1: 'Register New Site',
                id: 'custom'
            }

        var marker = _self.doMarker(_map, site);
        new google.maps.event.trigger( marker, 'click' );
    });

    /**
     * Add layers
     */
    // end Add layers

    return self;
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

        //add site btn
        $('#mapAddSite', controlDiv).click(function(e){
            e.preventDefault();

            alert('Left Click on the Map with your mouse to Add a New Site!');
            reusingDublinMap.state = 'edit';
        })

        //more info layers dropdown
        $('#mapLayer', controlDiv).change(self.doLayer);

        controlDiv.index = 1;
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(controlDiv);

        return self;
}

/**
 * @todo finish method.
 */
ReusingDublinMap.prototype.doLayer = function(){

    var index   = $(this).val(),
        map     = reusingDublinMap.getMap();

    //Setting the source for the luas kmz file.
    var src2 = 'http://factest.ie/kmls/Luas.kmz';
    var UCLAParking = new google.maps.KmlLayer(src2,
        {
            suppressInfoWindows: true,
            preserveViewport:true,
            map: map
        });
    UCLAParking.setMap(map);
    var position1 = new google.maps.LatLng(53.34603294651386,-6.27388134598732);
    var position2 = new google.maps.LatLng(53.34666473099645,-6.292639374732971);
    var position3 = new google.maps.LatLng(53.348592861233996,-6.265929937362671);
    var position4 = new google.maps.LatLng(53.34756144128457,-6.271681934595108);
    var position5 = new google.maps.LatLng(53.33786192960029,-6.276708394289017);
    var position6 = new google.maps.LatLng(53.311590204282844,-6.274232715368271);
    var position7 = new google.maps.LatLng(53.30210463305052,-6.1782002449035645);
    //Adding predefined markers on the map
    var marker1 =  new google.maps.Marker({
    		position : position1,
    		map : map,
    		title: 'Four Courts.'
    	});
    google.maps.event.addListener(marker1, 'mouseover', function(event) {
        var infoWindow = new google.maps.InfoWindow({
            content : 'Four Courts.'
        });
        infoWindow.open(map, marker1);
        if(activeWindow != null)
            activeWindow.close();
        //Store new window in global variable
        activeWindow = infoWindow;
    });
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
    var myLatlng = new google.maps.LatLng(site.lat,site.lng),
        marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: site.address1,
            siteId: site.id
        });

    var contentString = '<div class="infowindow">' +
        '   <h3>'+marker.title+'</h3>' +
        '   <a class="btn btn-primary btn-large" onclick="reusingDublinMap.dialog(\''+site.id+'\',\'edit\',\''+marker.position.A+'\',\''+marker.position.F+'\')">ENTER THE DESCRIPTION</a>'+
        '   <a class="btn btn-primary btn-large" onclick="reusingDublinMap.dialog(\''+site.id+'\',\'edit\')">UPDATE THE DESCRIPTION</a>';

    if(site.id!='custom')
        contentString += '   <a class="btn btn-primary btn-large" onclick="reusingDublinMap.dialog(\''+site.id+'\',\'\')">VIEW THE DESCRIPTION</a>';

    contentString += '</div>';

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
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
