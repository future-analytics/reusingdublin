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
    $.ajax('/api/Site/getSites/title/lat/lng',
    {
        dataType: 'json',
        complete: function(xhr, status){
            
            if(xhr.responseJSON.error)
                alert(xhr.responseJSON.error);

            $(xhr.responseJSON).each(function(i, site){
                var myLatlng = new google.maps.LatLng(site.lat,site.lng);
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: 'Hello World!'
                });


                var contentString = '<div id="content">'+
                    '<div id="siteNotice">'+
                    '</div>'+
                    '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
                    '<div id="bodyContent">'+
                    '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
                    'sandstone rock formation in the southern part of the '+
                    'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
                    'south west of the nearest large town, Alice Springs; 450&#160;km '+
                    '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
                    'features of the Uluru - Kata Tjuta National Park. Uluru is '+
                    'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
                    'Aboriginal people of the area. It has many springs, waterholes, '+
                    'rock caves and ancient paintings. Uluru is listed as a World '+
                    'Heritage Site.</p>'+
                    '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
                    'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
                    '(last visited June 22, 2009).</p>'+
                    '</div>'+
                '</div>';
                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map,marker);
                });
            });
        }
    });

    //create markers
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(53.347884693,-6.2731253419999575),
        map: map,
        title: 'Hello World!'
    });
}