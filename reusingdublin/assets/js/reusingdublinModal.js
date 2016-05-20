/**
 * Google Maps javascript file for modal popups.
 * @author daithi coombes <daithi.coombes@futureanalytics.ie>
 */

/**
 * @class Reusing Dublin Modal class.
 */
function ReusingDublinModal(){

	this.lat;
	this.lng;

	/**
	 * Map instance
	 * @type {Object}
	 */
	this.streetView = {}

}

/**
 * @constructor
 * @memberOf ReusingDublinModal
 * @return {ReusingDublinModal} Returns self for chaining.
 */
ReusingDublinModal.prototype.init = function(lat, lng){

	var self = this;

	self.lat = lat;
	self.lng = lng;

	var mapCanvas = document.getElementById('streetViewMap'),
        map    = new google.maps.Map(mapCanvas, self.mapOptions(lat, lng)),
        mapType     = new google.maps.StyledMapType(self.stylez, { name:"Grayscale" }),
        sites;
    self.streetView = map;

	var panorama = new google.maps.StreetViewPanorama(document.getElementById('pano'), self.panoramaOptions(lat, lng));
	self.streetView.setStreetView(panorama);

	return self;
}

ReusingDublinModal.prototype.mapOptions = function(lat, lng){
    return {
        div:             '#streetViewMap',
        center:          new google.maps.LatLng(lat,lng),
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

ReusingDublinModal.prototype.panoramaOptions = function(lat, lng){
	return {
		position: new google.maps.LatLng(lat,lng),
		pov: {
			heading: 34,
			pitch: 1
		}
	};
}

var reusingdublinModal = new ReusingDublinModal();
