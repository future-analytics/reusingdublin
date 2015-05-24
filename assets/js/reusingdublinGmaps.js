/**
 * Google Maps javascript file
 * @author daithi coombes <david.coombes@futureanalytics.ie>
 */


/**
 * @class ReusingDublinMap
 */
function ReusingDublinMap(){

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
    
    //init map
    var mapCanvas   = document.getElementById('map-canvas'),
        map         = new google.maps.Map(mapCanvas, self.mapOptions),
        //map         = new GMaps(mapOptions),
        mapType     = new google.maps.StyledMapType(self.stylez, { name:"Grayscale" }),
        sites;

    //set map style
    map.mapTypes.set('tehgrayz', mapType);
    map.setMapTypeId('tehgrayz');

    //create markers
    //get sites, append to markers
    self.getSites(function(sites){

        var _self   = self,
            _map    = map;

        $(sites).each(function(i, site){
            _self.doMarker(_map, site);
        });

        return _self;
    });

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

    var infowindow = self.infowindow(),
        myLatlng = new google.maps.LatLng(site.lat,site.lng),
        marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: site.address1,
            siteId: site.id
        });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
    });

    return self;
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

            if(xhr.responseJSON.error)
                return alert(xhr.responseJSON.error);

            if(callback)
                return callback(xhr.responseJSON);

            return xhr.responseJSON;
        }
    });

    return self;
}

/**
 * Get Infowindow object from google maps.
 * @memberOf ReusingDublinMap
 * @return {google.maps.infowindow} Returns gmap Infowindow
 */
ReusingDublinMap.prototype.infowindow = function(){

    return new google.maps.InfoWindow(function(){

        
        return {
            content: '<div class="infowindow">' +
                '   <h3>'+title+'</h3>'
        };
    });
}


/**
 * maps javascript instance
 * @type {ReusingDublinMap}
 */
var reusingDublinMap = new ReusingDublinMap();
