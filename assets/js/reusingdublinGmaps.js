/**
 * Google Maps javascript file
 * @author daithi coombes <david.coombes@futureanalytics.ie>
 */

/**
 * GMaps options.
 * @type {Object}
 */
var mapOptions = {
    center:          new google.maps.LatLng(53.347884693,-6.2731253419999575),
    scrollwheel:     false,
    zoomControl:     true,
    zoom:            16,
    mapTypeId:       google.maps.MapTypeId.ROADMAP,
    style:           google.maps.ZoomControlStyle.LARGE
}

/**
 * Initialize function.
 */
function gmaps_initialize(){

    //init map
    var mapCanvas = document.getElementById('map-canvas');
    var map = new google.maps.Map(mapCanvas, mapOptions);

    // init loader on map
    
    // request marker locations from ajax
    
    // build array of marker objects
    
    // pass array to gmaps
}