/**
 * Google Maps javascript file
 * @author daithi coombes <david.coombes@futureanalytics.ie>
 */

/**
 * An array of style objects for gmaps.
 * @{@link http://stackoverflow.com/a/4003664/288644}
 * @type {Array}
 */
var stylez = [{
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
var mapOptions = {
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
}

/**
 * Initialize function.
 */
function gmaps_initialize(){

    //init map
    var mapCanvas   = document.getElementById('map-canvas'),
        map         = new google.maps.Map(mapCanvas, mapOptions),
        //map         = new GMaps(mapOptions),
        mapType     = new google.maps.StyledMapType(stylez, { name:"Grayscale" }),
        sites;

    //set map style
    map.mapTypes.set('tehgrayz', mapType);
    map.setMapTypeId('tehgrayz');

    //grab sites
    $.ajax('/api/Site/getSites',
    {
        dataType: 'json',
        complete: function(){
            console.log(arguments);
        }
    })

    //create markers
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(53.347884693,-6.2731253419999575),
        map: map,
        title: 'Hello World!'
    });
}