<?php
//Php code for assigning markers and site to the map
//creating coonection elements with the database
 $con=mysqli_connect("172.16.0.57","u1046393_turas","Soamin123@","db1046393_dublin");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//Fetching official utilized and underutilized markers.
$result1 = mysqli_query($con,"SELECT * FROM Address1");
while($row = mysqli_fetch_assoc($result1))
{
$data[] = $row;
}
//Fetching user customized markers.
$result2 = mysqli_query($con,"SELECT * FROM SiteDetails");
while($row1 = mysqli_fetch_assoc($result2))
{
$data1[] = $row1;
}
$nn = "1";
//Email to the administrator when we click on the button name Added.
if(isset($_POST['added']))
{
	
$result3 = mysqli_query($con,"SELECT * FROM emailss");
while($row3 = mysqli_fetch_assoc($result3))
{	$data3[] = $row3;
}
foreach($data3 as $data4)
{$ttt= $_POST['email'];
$ggg = $data4['email']; 
if(($ggg == $ttt )&&(!empty($ttt)))
{
$x = '123';
$nn = "1";

break;
}
else
{
$x ="";
}
}
$ee = $_POST['email'];
if(empty($x)&&(!empty($ee)))
{
$sql="INSERT INTO emailss(email)
VALUES ('$ee')";

if (!mysqli_query($con,$sql)){
 die('Error: ' . mysqli_error($con));
}
$subject = $_POST["email"];
$message = "The following Person wants to Register with Us: ".$_POST["email"]." Thanks \n";
$mail_from= $_POST['email'] ;
$header = " : <$mail_from>";
$to = "priyanka.singh@futureanalytics.ie";
$send_contact= mail($to,$subject,$message,$header);
if($send_contact)
{    $nn = "";

	$message = $_REQUEST['message']; 
$message = "We have recieved your information";
}
else
{$message = $_REQUEST['message']; 
$message = "Error";
}
}
}
?>
<title>Home | Reusing Dublin</title>
      
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'>

		<link rel="stylesheet" type="text/css" href="css/slicknav.css">
		<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		
		<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>

		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
		<script type="text/javascript" src="js/camera.min.js"></script>
		<script type="text/javascript" src="js/myscript.js"></script>
		<script src="js/sorting.js" type="text/javascript"></script>
		<script src="js/jquery.isotope.js" type="text/javascript"></script>
		<!--script type="text/javascript" src="js/jquery.nav.js"></script-->
		

		<script>
			jQuery(function(){
					jQuery('#camera_wrap_1').camera({
					transPeriod: 500,
					time: 3000,
					height: '490px',
					thumbnails: false,
					pagination: true,
					playPause: false,
					loader: false,
					navigation: false,
					hover: false
				});
			});
		</script>
		
        
     <style>
	   p {
       padding-top: 10px;
       padding-right: 30px;
       padding-bottom: 10px;
       padding-left: 30px;
         }
      #pac-input {
       background-color: #fff;
       padding: 0 11px 0 13px;
       width: 200px;
	   alignment-adjust:middle;
	   font-family: Roboto;
       font-size: 15px;
       font-weight: 300;
       text-overflow: ellipsis;
       }
      #pac-input:focus {
       border-color: #4d90fe;
       margin-left: -1px;
       padding-left: 14px;  /* Regular padding-left + 1. */
       width: 401px;
      }

      .pac-container {
       font-family: Roboto;
      }

     .hhh{
	   margin-left:20px;
     }
     h11 {
	  font-family: Raleway, serif;
	  font-size: 26px;
	  text-align: center;
	   font-weight:400
     }
	 h12 {
	  font-family: Raleway, serif;
      font-size: 18px;
	  font-weight:400;
     }
    label { color:#FFF; font-weight:bold; }
    html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }
    #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
    .controls {
        margin-top: 16px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }
 </style>
    
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
   
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/markerclusterer/src/markerclusterer.js"></script>
<script type="text/javascript" src="OpenLayers.js"></script>
<script type="text/javascript">
//initializing the variables
var activeWindow = new google.maps.InfoWindow();
var markers = [];
var src1 = 'http://factest.ie/areaoutline.kml';
var contentstring;
var map;
var x = 0;
var test = [];
var y = 0;
var z = 0;
var contents;
var a = [];
var b = [];
var c = [];
var d = [];
var e = [];
var ff = [];
var numbbb = 0;
var bounds = new google.maps.LatLngBounds();
var layers = [];
var latitudes = [];
var longitudes = [];
var locatt = [];
var latitudess = [];
var longitudess = [];
var locattt = [];
var location ;
var gmarkers1 = [];
var gmarkers=[];
var mapProp;
var myCenter=new google.maps.LatLng(53.347884693,-6.2731253419999575);
//initializing the map properties and style to be used  
var mapProp = {
zoom:16,
center: myCenter,
scrollwheel: false ,
zoomControl:true,
zoomControlOptions: {
style:google.maps.ZoomControlStyle.LARGE
},
mapTypeControlOptions: {
mapTypeIds: ['OSM',google.maps.MapTypeId.ROADMAP,google.maps.MapTypeId.SATELLITE],
style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
},
styles: [{featureType:"landscape",stylers:[{saturation:-100},{lightness:65},{visibility:"on"}]},{featureType:"poi",stylers:[{saturation:-100},{lightness:51},{visibility:"simplified"}]},{featureType:"road.highway",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"road.arterial",stylers:[{saturation:-100},{lightness:30},{visibility:"on"}]},{featureType:"road.local",stylers:[{saturation:-100},{lightness:40},{visibility:"on"}]},{featureType:"transit",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"administrative.province",stylers:[{visibility:"off"}]/**/},{featureType:"administrative.locality",stylers:[{visibility:"off"}]},{featureType:"administrative.neighborhood",stylers:[{visibility:"on"}]/**/},{featureType:"water",elementType:"labels",stylers:[{visibility:"on"},{lightness:-25},{saturation:-100}]},{featureType:"water",elementType:"geometry",stylers:[{hue:"#ffff00"},{lightness:-25},{saturation:-97}]}]
};
//Initializing the Osm Property for the map;
var osmMapTypeOptions = {
    getTileUrl: function(coord, zoom) {
    return "http://tile.openstreetmap.org/" +
    zoom + "/" + coord.x + "/" + coord.y + ".png";
},
    tileSize: new google.maps.Size(256, 256),
    isPng: true,
    maxZoom: 19,
    minZoom: 0,
	scrollwheel: false ,
    name: "OSM"
};
	
function initialize()
{ 
//Creates an OSM Map type option for the Map.
var osmMapTypeOptions = {
getTileUrl: function(coord, zoom) {
    return "http://tile.openstreetmap.org/" +
    zoom + "/" + coord.x + "/" + coord.y + ".png";
},
    tileSize: new google.maps.Size(256, 256),
    isPng: true,
    maxZoom: 19,
    minZoom: 0,
    name: "OSM"
};
var osmMapType = new google.maps.ImageMapType(osmMapTypeOptions); 
var marker;
var showurl;
//This condition is used to check whether user clicked on the subscribe button if yes then open the url in a new tab;
showurl = "<?php echo $nn?>";
if(showurl === "")
{  
	 window.open('http://www.turas-cities.org/follow_us');
	
}
//Creates a new instance of the map.
map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
map.mapTypes.set('OSM', osmMapType);
map.setMapTypeId(google.maps.MapTypeId.SATELLITE);
//Settings the contents for the marker infowindow. 
contents = '<div style="width:280px; height:150px;">' + '<a href="Entry_Form.php"  style="background-color:#060;border:none;color:#FFF;font-size:15px;height:40px;width:280px;" class="btn btn-primary btn-large" target="_blank" >Enter The Description</a>' + '<br/>' +'<a href="Update_Form.php"  style="background-color:#060;border:none;height:40px;width:280px;color:#FFF;margin-top:5px;font-size:15px" class="btn btn-primary btn-large" target="_blank">Update The Description</a>' + '<br/>' + '<a href="View_Form.php"  style="background-color:#060;border:none;height:40px;width:280px;color:#FFF;margin-top:5px;font-size:15px" class="btn btn-primary btn-large" target="_blank">View The Description</a>' + '</div>' ;
//Setting the source for the luas kmz file.
var src2 = 'http://factest.ie/kmls/Luas.kmz'
var UCLAParking = new google.maps.KmlLayer(src2,{ suppressInfoWindows: true,
preserveViewport:true,
map: map});
UCLAParking.setMap(map);
var position1 = new google.maps.LatLng(53.34603294651386,-6.27388134598732);
var position2 = new google.maps.LatLng(53.34666473099645,-6.292639374732971);
var position3 = new google.maps.LatLng(53.348592861233996 ,-6.265929937362671);
var position4 = new google.maps.LatLng(53.34756144128457,-6.271681934595108);
var position5 = new google.maps.LatLng(53.33786192960029,-6.276708394289017);
var position6 = new google.maps.LatLng(53.311590204282844,-6.274232715368271);
var position7 = new google.maps.LatLng(53.30210463305052,-6.1782002449035645);
//Adding predefined markers on the map
var marker1 =  new google.maps.Marker({
		position : position1,
		map : map,
		icon: image,
		title: 'Four Courts.'
	});
	var marker2 =  new google.maps.Marker({
		position : position2,
		map : map,
		icon: image,
		title: 'Heuston Station'
	});
	var marker3 =  new google.maps.Marker({
		position : position3,
		map : map,
		icon: image,
		title: 'Jervis Shopping Center'
	});
	var marker4 =  new google.maps.Marker({
		position : position4,
		map : map,
		icon: image,
		title: 'Dublin City Council, Fruit Market,Saint Michan Street ,Dublin 7, Ireland'
	});
	var marker5 =  new google.maps.Marker({
		position : position5,
		map : map,
		icon: image,
		title: 'Fruit and Veg Market, 12 Newmarket Dublin 8 Ireland '
	});
	var marker6 =  new google.maps.Marker({
		position : position6,
		map : map,
		icon: image,
		title: 'Fruit and Veg Market,5 Orwell Road Dublin 6 '
	});
	var marker7 =  new google.maps.Marker({
		position : position7,
		map : map,
		icon: image,
		title: 'Fruit and Veg Market,Organic Shop Blackrock'
	});

var gmarkers = [];
//Creating click listener for the map.
google.maps.event.addListener(map, 'click', function(event) {
//Place a marker only when user clicks on the Add A Site Button which is controlled by the variable y.
if(y==1)
{
var location = event.latLng;
var lat1 = location.lat();
var lon1 = location.lng(); 
//Stores the variable in session storage. 	
sessionStorage.setItem("lll", lat1);
sessionStorage.setItem("llll", lon1);
//Places marker on the map on the click event of the map.
placeMarker(location);
}
y = 0;
});
//Adding KML layers on the map.
layers[1] = new google.maps.KmlLayer(src1, {
suppressInfoWindows: true,
preserveViewport: false,
map: map,
});
layers[1].setMap(null);
//Creating click listener for the layer overlayed on the map.
google.maps.event.addListener(layers[1], 'click', function(event){
//Places a marker only when the button Add A Site is clicked on.
if(y==1)
{
var location1 = event.latLng;
//Place the marker on the layer taking that point co-ordinates as the parameter.
placeMarker(location1);
}
y = 0;
});
//Takes a layer in the form of fusion table.
layers[2] = new google.maps.FusionTablesLayer({
       query: {
        select: "col0",
        from: "1EEsLj60M9vX7PblFnk3DZ9jNDZTYGLEDrVU92-sA"
	

		
        },
		 styles: [
		 		 {
    where: "'CAT' = 'Offices'",
    polygonOptions: {
    fillColor: "#ffff00", 
    fillOpacity: 1.0}  
 },
		 	 {
    where: "'CAT' = 'Residential'",
    polygonOptions: {
    fillColor: "#9900ff", 
    fillOpacity: 1.0}  
 },
		 	 {
    where: "'CAT' = 'Retail'",
    polygonOptions: {
    fillColor: "#ff0000", 
    fillOpacity: 1.0}  
 },
  {
    where: "'CAT' = 'Vacant / Miscellaneous'",
    polygonOptions: {
    fillColor: "#ff00ff", 
    fillOpacity: 1.0}  
 },
 	 {
    where: "'CAT' = 'Open Space'",
    polygonOptions: {
    fillColor: "#ff9900", 
    fillOpacity: 1.0}  
 },
		  {
    where: "'CAT' = 'Wholesale'",
    polygonOptions: {
    fillColor: "#46A2D1", 
    fillOpacity: .9}  
 }
 
 


	
   


 
 
 ] ,
        map: map,
		suppressInfoWindows: true,
        styleId: 2,
        templateId: 2
});
//Creates a listener on the map for the fusion table layer on the map.
google.maps.event.addListener(layers[2], 'click', function(event){
if(y==1)
{
 var location3 = event.latLng;
//Places a marker on the map on that overlayed layer.
 placeMarker(location3);
}
y = 0;
});
layers[3] = new google.maps.FusionTablesLayer({
     query: {
     select: "col0",
     from: "13FSnVnu4FdWRF7Ei1rsLyDdKSdGUxH41ocyKt7kE"
	 
},
//Establishes styles for the overlayed layer on the map.
 styles: [
{
    where: "'ZONE_ORIG' = 'Zone Z8: Georgian Conservation Areas'",
    polygonOptions: {
    fillColor: "#46A2D1", 
    fillOpacity: 0.7}  
 },
{
   where: "'ZONE_ORIG' = 'Zone Z2: Residential Neighbourhoods (Conservation Areas)'",
   polygonOptions: {
   fillColor: '#00ff00',
   fillOpacity: 0.7}  
 },
 {
    where: "'ZONE_ORIG' = 'Zone Z5: City Centre'",
    polygonOptions: {
    fillColor: '#00ffff', 
    fillOpacity: 0.7}  
  },
 {
   where: "'ZONE_ORIG' = 'Zone Z1: Sustainable Residential Neighbourhoods'",
   polygonOptions: {
   fillColor: '#9900ff', 
   fillOpacity: 0.7}  
 },
 {
  where: "'ZONE_ORIG' = 'Zone Z9: Amenity/Open Space Lands/Green Network'",
  polygonOptions: {
  fillColor: '#060', 
  fillOpacity: 0.7}  
  },
 {
  where: "'ZONE_ORIG' = 'Zone Z15: Community and Institutional Resource Lands (Education, Recreation, Community, Green Infrastructure and Health)'",
  polygonOptions: {
  fillColor: '#ff00ff', 
  fillOpacity: 0.7}  
 },
 ],
   map: map,
   suppressInfoWindows: true,
   styleId: 2,
   templateId: 2
 });
   google.maps.event.addListener(layers[3], 'click', function(event){
   if(y==1)
  {
   var location4 = event.latLng;
   placeMarker(location4);
  }
  y = 0;
  });
 layers[4]= new google.maps.FusionTablesLayer({
       query: {
       select: "col0",
	      from: "1yqEULmUVjBJp8MO83rNMs3W9mUh_vnx5xEslAFsr"
		     
            },
  styles: [
   {
    where: "'YEAR' = '2014'",
	 polygonOptions: {
    fillColor: '#112d2e', 
    fillOpacity: 1.0}  
 },
  {
    where: "'YEAR' = '2013'",
	 polygonOptions: {
    fillColor: '#226247', 
    fillOpacity: 1.0}  
 },
  {
    where: "'YEAR' = '2012'",
	 polygonOptions: {
    fillColor: '#2c8057', 
    fillOpacity: .8}  
 },
  {
    where: "'YEAR' = '2011'",
	 polygonOptions: {
    fillColor: '#6ab64d', 
    fillOpacity: 1.0}  
 },
 {
    where: "'YEAR' = '2010'",
	 polygonOptions: {
    fillColor: '#d3d627', 
    fillOpacity: 1.0}  
 },
  {
    where: "'YEAR' = '2009'",
	 polygonOptions: {
    fillColor: '#f7ec1f', 
    fillOpacity: 0.5}  
 },
  {
    where: "'YEAR' = '2008'",
	 polygonOptions: {
    fillColor: '#eed47b', 
    fillOpacity: 0.3}  
 },
  {
    where: "'YEAR' = '2007'",
	 polygonOptions: {
    fillColor: '#ebb45d', 
    fillOpacity: 0.2}  
 },
  {
    where: "'YEAR' = '2006'",
	 polygonOptions: {
    fillColor: '#fcb017', 
    fillOpacity: 0.4}  
 },
  {
    where: "'YEAR' = '2005'",
	 polygonOptions: {
    fillColor: '#d76930', 
    fillOpacity: 0.6}  
 },
 {
    where: "'YEAR' = '2004'",
	 polygonOptions: {
    fillColor: '#d03132', 
    fillOpacity: .8}  
 },


{
    where: "'YEAR' = '2003'",
	 polygonOptions: {
    fillColor: '#901a1c',
	   fillOpacity: 1.0}  
 }
 ] ,

suppressInfoWindows: true,
map: map,
styleId: 2,
templateId: 2

});
google.maps.event.addListener(layers[4], 'click', function(event){
if(y==1)
{
 var location5 = event.latLng;
 placeMarker(location5);
}
y = 0;
});
layers[6]= new google.maps.FusionTablesLayer({
		 query: {
		 select: "col0",
		 from: "1Niv7EjH45UQCAHqWfsgYIi3zc1jI3tIEqUr1Wa7g"
	},
		  suppressInfoWindows: true,
		  map: map,
		  styleId: 2,
		  templateId: 2
		});
		layers[6].setMap(null);
		  for (var i = 1; i < layers.length; i++) {
		  {
		 if(i!=5 && i!=1)
		  {
		  layers[i].setMap(null);
		  }
		}
  }
//Php code to collect data for the official utilized and underutlized areas from the database.
<?php 
foreach($data as $marker)
{
	$lat = $marker['Latitude']; 
    $lon = $marker['Longitude']; 
    $loc = $marker['Location']; 
	$desc = $marker['Description']; 
	$vac = $marker['Derelict']; 
?>
//Takes the data from the server side databases and inserts it into the javascript arrays on the client side..
 var lati  = "<?php echo $lat;?>";
 a.push(lati);
 var longi  = "<?php echo $lon;?>";
 b.push(longi);
 var loca  = "<?php echo $loc;?>";
 c.push(loca);
 var desc  = "<?php echo $desc;?>";
 d.push(desc);
 var derelict  = "<?php echo $vac;?>";
//checks whether derelict column has the value Vacant Land for each location in the database,then places a marker with a certain image.
if(derelict == 'Vacant Land')
	{
	var loooo   = "<?php echo $marker['Location']; ?>";
	var mylatlng =new google.maps.LatLng(<?php echo $marker['Latitude']; ?>,<?php echo $marker['Longitude'];?>);
	var image = {
    url:'http://www.factest.ie/timber/icon2.png',
    // This marker is 20 pixels wide by 32 pixels tall.
    size: new google.maps.Size(30, 35)
	};
	var marker =  new google.maps.Marker({
		position : mylatlng,
		map : map,
		icon: image,
		title: 'Click Here for more details'
	});
	//pushes these markers to the array for clustering.
gmarkers.push(marker);
var a1 = mylatlng.lat();
var b1 = mylatlng.lng();
for (var g = 0; g < lati.length ;g++) {
var latt = lati[g];
var lonn = longi[g];
if (latt === a1 && lonn === b1) {
//finding the location name for a particular location 
loooo= loca[g];	 
}}
//Binds an info window with the marker with the parameters as marker,map,latitude,longitude and location name.
bindInfoWindow(marker, map, a1, b1,loooo) ;
}
//checks whether derelict column has the value not Vacant Land for each location in the database,then places a marker with a certain image.
else
{
var mylatlng =new google.maps.LatLng(<?php echo $marker['Latitude']; ?>,<?php echo $marker['Longitude'];?>);
var lll   = "<?php echo $marker['Latitude']; ?>";
var image = {
    url:'http://www.factest.ie/timber/icon3.png',
   // This marker is 20 pixels wide by 32 pixels tall.
   size: new google.maps.Size(30, 35)
};
	var marker =  new google.maps.Marker({
	position : mylatlng,
	map : map,
	icon: image,
	title: 'Click Here for more details'
	});
 gmarkers.push(marker);
var a1 = mylatlng.lat();
var b1 = mylatlng.lng();
for (var g = 0; g < lati.length ;g++) {
var latt = lati[g];
var lonn = longi[g];
if (latt === a1 && lonn === b1) {
loooo= loca[g];	 
}}
//Binds an info window with each marker on the map.
bindInfoWindow(marker, map, a1, b1,loooo) ;
}
<?php
}
?>
//position controls on the map (legend and search controls).
var input = (document.getElementById("pac-input"));
//var input5 = (document.getElementById("legend"));
//map.controls[google.maps.ControlPosition.TOP_CENTER].push(input5);
//Creating Search functionality for the map.
var searchBox = new google.maps.places.SearchBox(
    /** @type {HTMLInputElement} */(input));
var markers1= [];
  // [START region_getplaces]
  // Listen for the event fired when the user selects an item from the
  // pick list. Retrieve the matching places for that item.
//Click Listener for the places changed event in the Search Box.
google.maps.event.addListener(searchBox, 'places_changed', function() {
{
 var places = searchBox.getPlaces();
 for (var i = 0, marker; marker = markers1[i]; i++) {
 marker.setMap(null);
}
//For each place, get the icon, place name, and location.
var bounds = new google.maps.LatLngBounds();
for (var i = 0, place; place = places[i]; i++) {
var image = {
url: place.icon,
size: new google.maps.Size(71, 71),
origin: new google.maps.Point(0, 0),
anchor: new google.maps.Point(17, 34),
scaledSize: new google.maps.Size(25, 25)
};
// Create a marker for each place added in the search box.
var marker = new google.maps.Marker({
map: map,
icon: image,
title: place.name,
position: place.geometry.location
});
bounds.extend(place.geometry.location);
}
map.fitBounds(bounds);
}
z=0;
});
//Clustering all the official utilised and underused markers.
var markerCluster = new MarkerClusterer(map, gmarkers);
}
//Binding an info window with the official utilized and underutilized markers .
function bindInfoWindow(marker, map,a1,b1,loooo) {
var location;
var desc;
var h;
var lat = a1;
var lon = b1;
var found = false;
sessionStorage.setItem("locat", loooo);
google.maps.event.addListener(marker, 'mouseover', function(event) {
//Creating mouseover event for the marker.
sessionStorage.setItem("lll", ' ');
sessionStorage.setItem("llll", ' ');
sessionStorage.setItem("locat", ' ');	
var latln = event.latLng;
var lngs = latln.lat();
var lats = latln.lng();
//Setting session storage variable as null and assign it the variable obtained from the click event of the mouseover event.
sessionStorage.setItem("lll", lngs);
sessionStorage.setItem("llll", lats);
sessionStorage.setItem("locat", loooo);
var found = false;
for(var n = 0; n < a.length && !found; n++) {
if (a[n] == lngs && b[n]== lats) {
found = true;
location = c[n];
desc = d[n];
h =  '<div style="width:300px; height:180px;">' + '<b style="color:#060;font-size:15px;margin-left:10px;">Address:</b>' + " " + location + '</br>' +'</br>'+ '<b style="color:#060;font-size:15px;margin-left:20px;">Description:</b>' + " " + desc +'</br>' + '</br>' + '<a href="ViewData.php"  style="background-color:#060;border:none;height:40px;width:260px;color:#FFF;font-size:20px" class="btn btn-primary btn-large" target="_blank">Learn More About the SITE</a>' + '<br/>' + '</div>';
}
}
var infoWindow = new google.maps.InfoWindow({
  content : h 
});
infoWindow.open(map, marker);
 if(activeWindow != null)
                       activeWindow.close();
					    
                     //Store new window in global variable 
                    activeWindow = infoWindow; 

});
// here i want to show tooltip with location got from event  (event.latLng)
}
//Validating email id used for subscribing to the list.
function ValidateEmail()   
{  
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.email1.value))  
  {  
    return (true)  
  }  
    alert("You have entered an invalid email address!")  
    return (false)  
}  

//Acts as a flip flop for the display of the markers between user site details which are added by the users and official utilized /underutilized Areas for the button Discover a site.
function showentry()
{ 
//Place all the user added site details on the map if numbbb variable is zero.
if (numbbb==0)
{
//Creating OOSMMapType image for the OSM Layer.
var osmMapType = new google.maps.ImageMapType(osmMapTypeOptions); 
var marker;
//Creating new instance of the map and setting the maptypeid for the map.
map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
map.mapTypes.set('OSM', osmMapType);
map.setMapTypeId(google.maps.MapTypeId.SATELLITE);
//Creating a click listener for the map so that user can place a marker on the map.
google.maps.event.addListener(map, 'click', function(event) {
//Place a marker only when user clicks on the Add A Site Button which is controlled by the variable y.
if(y==1)
{ var location = event.latLng;
  var lat1 = location.lat();
  var lon1 = location.lng(); 
  //Storing the latitudes and longitudes in the Session Storage Variable so that the variable is accessed across all the 
  //pages for a particular session(if we prsss ctrl+shitf+j we can see session variable is stored client side in the resources menu under session storage.). 	
  sessionStorage.setItem("lll", lat1);
  sessionStorage.setItem("llll", lon1);
  placeMarker(location);
}
//initializing the variable y to original value.
y = 0;
});
//Php code to collect data for the user entered site details from the database.
<?php 
foreach($data1 as $marker1)
{
$latitud = $marker1['latitude']; 
$longitud = $marker1['longitude'];
$loca = $marker1['adress'];
 
?>
//Takes the data from the databases using php and inserts it into the javascript arrays on the client side.
  var lattitude = "<?php echo $latitud;?>";
  latitudes.push(lattitude);
  var longgitude = "<?php echo $longitud;?>";
  longitudes.push(longgitude);
  var locations = "<?php echo $loca;?>";
  locatt.push(locations);
<?php
}
?>
//Place all the User entered Site Details Markers on the map.
for (var z = 0; z < latitudes.length; z++) {
var xx = latitudes[z];
var yy =  longitudes[z];
var llllll= locatt[z];
var mylatlng =new google.maps.LatLng(xx,yy);
//Initializes the Image of the marker for the user sites;
var image = {
url:'http://www.factest.ie/timber/icon1.png',
// This marker is 20 pixels wide by 32 pixels tall.
size: new google.maps.Size(30, 35)
};
//Creates a marker with the image and latitudes and longitudes as obtained from the variable mylatlng.
var marke =  new google.maps.Marker({
	position : mylatlng,
	map : map,
	icon: image,
	title: 'Click Here for more details'
});
//Puts the marker into an array for doing clustering of the marker.
	gmarkers1.push(marke);
//Binds an Info Window associated with each marker on the map for the given location for the user added sites one.
	bindInfoWindows(marke,map,llllll) ;
	
}
//Cluster the user added Site Details Marker on the map.
var markerCluster1 = new MarkerClusterer(map, gmarkers1);
//Setting the variable to numbbb = 1 to prevent the same display of markers to happen again. 
numbbb=1;
document.getElementById('showhide').value = "Return To Official Sites";
}
else
{ 
//Reloads the page again.  
location.reload();
}
}
//Binding an info window with the user added markers.
function bindInfoWindows(marker, map,llllll) {
 b1 = '<div style="width:280px; height:150px;">' + '<a href="Entry_Form.php"  style="background-color:#060;border:none;color:#FFF;font-size:15px;height:40px;width:280px;" class="btn btn-primary btn-large" target="_blank" >Enter The Description</a>' + '<br/>' +'<a href="Update_Form.php"  style="background-color:#060;border:none;height:40px;width:280px;color:#FFF;margin-top:5px;font-size:15px" class="btn btn-primary btn-large" target="_blank">Update The Description</a>' + '<br/>' + '<a href="View_Form.php"  style="background-color:#060;border:none;height:40px;width:280px;color:#FFF;margin-top:5px;font-size:15px" class="btn btn-primary btn-large" target="_blank">View The Description</a>' + '</div>' ;
google.maps.event.addListener(marker, 'click', function(event) {
//Creates a session storage variable for the location,latitude and longitudeassign it null and then later assign it with the concern data.
sessionStorage.setItem("lll", ' ');
sessionStorage.setItem("llll", ' ');
sessionStorage.setItem("locat", ' ');	
var latlnn = event.latLng;
var lngsn = latlnn.lat();
var latsn = latlnn.lng();
sessionStorage.setItem("lll", lngsn);
sessionStorage.setItem("llll", latsn);
sessionStorage.setItem("locat", llllll);
var found = false;
//Creates an info window for the marker.
var infoWindow = new google.maps.InfoWindow({
	content : b1 
});
infoWindow.open(map, marker);
});
}

//Placing marker on the map ona given location.
function placeMarker(location){
    var image = {
    url:'http://www.factest.ie/dublinapp/images/icon1.png',
    // This marker is 20 pixels wide by 32 pixels tall.
    size: new google.maps.Size(30, 35)
	};
	 
   marker = new google.maps.Marker({
   position: location,
   map: map,
   icon : image,
   title: 'Click Here for more details'
});
markers.push(marker);
var lngss = location.lat();
var latss = location.lng();
//Creating a session storage variable to store the latitude and longitude information in it.
sessionStorage.setItem("lll", lngss);
sessionStorage.setItem("llll", latss);
//Creating an infowindow to store the info window contents to the marker.
var infowindow = new google.maps.InfoWindow({
// content: 'Latitude: ' + location.lat() + '<br>Longitude: ' + location.lng() + '<br>Enter The Description:' + infoWindowHtml + '<br>View The Description: ' + infoWindowHtml1 + '<br>Update The //Description: ' + infoWindowHtml2 
content : contents
});
infowindow.open(map,marker);
//Adding double click event on the google maps.
google.maps.event.addListener(marker, 'dblclick', function(event) {
marker.setMap(null);
});
}
//Function called on the click event of the button 'Add A Site' to change the variable y value.
function addasite()
{   alert(' Left Click on the Map with your mouse to Add a New Site !');
	y = 1;
}
//This method will be called on the select change event of the drop down box.
function selectchange()
{ 
//Removing the layers from the map,if any.
	layers[6].setMap(null);
    layers[3].setMap(null);
    layers[2].setMap(null);
    layers[4].setMap(null);
 var i = document.getElementById("pac-input1").value;
 if (layers[i].getMap() === null) {
 layers[i].setMap(map);
//Creating listener for the click event on the overlayed layer on the map.
 google.maps.event.addListener(layers[i], 'click', function(e) {
//Excluding the layer for the Protected Structures 
if(i!=1&&i!=6){
//Capturing the data for the infowindow and assigning it to a div element.
contentstring = e.infoWindowHtml;
}
else
{
contentstring = '';
}
var capture = document.getElementById('capture');
capture.innerHTML= null;
var div = document.createElement('div');
div.innerHTML = contentstring;
capture.appendChild(div);
}); 
}
else {
layers[i].setMap(null);
contentstring = '';
}
	   
}

//google.maps.event.addDomListener(window, 'load', initialize);
</script>

</head>
<body onLoad="initialize()">
<div align="left"></div>
<form method="post" action="index.php" enctype="multipart/form-data">
<!--home start-->
<div id="home"  style="width:100%;">
<div class="headerLine">
<div id="menuF" class="default">
<div class="container">
<div class="row">
<div  class="logo col-md-4" style="width:100%;">
<a href="#">
<img src="images/logo.png">
</a>
</div>
<div class="col-md-8" style="width:100%;margin-top:-89px;">
<div class="navmenu"style="text-align: center;" style="width:100%;">
<ul id="menu">
<li class="active" ><a href="#home">Home</a></li>
<li><a href="#about">Application</a></li>
<li><a href="#project">Project</a></li>
<li><a href="#news">News</a></li>
<li class="last"><a href="#contact">Contact</a></li>
<!--li><a href="#features">Features</a></li-->
</ul>
</div>
</div>
</div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-sm-6">
<p style="color:#FFF; padding-top:20px">A template for change </br><span style="font-weight:bold">Pilot project: North Inner City Dublin.</span> </p>
 </div>
<div class="well sidebar-nav" style="width:100%;background-color:inherit;border:none;float:left;">  
<br/>
<br/>
 <div class="col-sm-6" style="float:right;margin-bottom:20px;"></br></br>
<iframe src="//player.vimeo.com/video/115815956?color=473409&amp;autoplay=1;loop=1" width="100%" height="400" style="float:right;margin-top:-5px;" frameborder="0" webkitallowfullscreen    
mozallowfullscreen allowfullscreen></iframe>		
</div>
<div style="float:left;margin-top:5px;" >
<p style="color:#FFF;font-size:60px;padding-left:10px" > Welcome!</p>
<p style="color:#FFF; padding-top:10px;padding-left:10px"> Do you see potential in Dublin’s vacant / underused spaces? Join us in unlocking <br/>this potential.</p> 
 </div>
<div class="col-sm-12">
<h1>  </br></h1></div>
</div>
</div>      
</div>
</div>

<div class="container">
<div class="row">
<div class="col-md-12" style="width:100%">
</br></br>
<h11> RE-USING DUBLIN PROVIDES A SPACE FOR DUBLINERS TO DISCOVER AND SHARE INFORMATION ON VACANT / UNDERUSED SPACES AND TO CONNECT WITH OTHERS ABOUT THIS TOPIC.</h11>
 </br></br>
<img src="http://www.factest.ie/timberv2/process.png" style="float:center;width:100%"/>
</br></br>
<div class="col-md-3" >
<h12><span style="color:#960;font-weight:700;">DISCOVER</span> INFORMATION ON AN UNDERUSED SITES YOU HAVE NOTICED.</h12>
</div>
<div class="col-md-3" >
 <h12><span style="color:#960;font-weight:700;">SHARE</span> YOUR INFORMATION ABOUT A SITE.</h12>
</div>
 <div class="col-md-3">
 <h12><span style="color:#960;font-weight:700;">CONNECT</span> WITH OTHERS WHO MIGHT BE INTERESTED IN THE SITE.</h12>
</div>
<div class="col-md-3" style="background-color:#CCC; padding:20px" >
<h12><span style="color:#960;font-weight:700;">ADD</span> A SPACE YOU HAVE NOTICED AS UNDERUSED BY CLICKING THE 'ADD A SITE' TAB AND CLICKING ON THE LOCATION ON THE MAP.</h12>
</div></br></br></br></div></div></div><!--Appln start-->  


<div class="container" id="about">
<div class="row">
<div style="width:100%;float:left;margin-left:10%" align="center"  >
<div  class="col-md-3" style="float:left;background-color:#FFF;border:none;height:40px;" align="center">
<input type="button" class="type-3" id="additional" style="background-color:#060;border:none;height:40px;color:#FFF;font-size:20px;float:left;margin-bottom:0px;width:180px;" align=   
"center" value="Add a Site"  onClick="javascript:addasite()"/>
</div>
<div  class="col-md-3" style="float:left;background-color:#FFF;border:none;height:40px;">
<input type="button" class="type-3"  name="show" id="showhide" style="background-color:#060;border:none;height:40px;color:#FFF;font-size:20px;float:left;margin-left:1px;width:210px;"     
align="center" value="Discover All Sites" onClick="javascript:showentry()"  />
</div>
<div  class="col-md-3" style="float:left;background-color:#FFF;border:none;height:40px;">
<select  style="background-color:#060;border:none;height:40px;color:#FFF;font-size:20px;float:left;margin-left:1px;text-align:center;" class="type-3"  id="pac-input1" align= 
"center" onChange="selectchange()">
<option align="center">&nbsp;&nbsp;&nbsp More Information&nbsp;&nbsp</option>
<option value="3">&nbsp;&nbsp;DCC Development Plan Zonings</option>
<option value="6">&nbsp;&nbsp;&nbsp;&nbsp;Protected Structures</option>
<option value="2">&nbsp;&nbsp;&nbsp;&nbsp;Buildings Usage</option>
<option value="4">&nbsp;&nbsp;DCC Planning Applications</option>
</select>
</div>
</div>
</div>
</div>
<div  style="width:100%;" class="container" style="padding-top:20px;margin-left:0px;margin-right:0px;">
<div  style="width:100%;height:600px;" >
<div id="googleMap" align="center" style="width:100%;height:600px;float:left;border:thin;"></div>
</div>
<div id="pac-input2" style="width:100%;background-color:#42a7de;height:50px;" >
<font color="white" style="float:left;width:150px;margin-left:20%;margin-top:12.5px;font-size:20px" >Find an Area    </font>
<input id="pac-input" style="width:200px;height:25px;float:left;margin-top:12.5px;" type="text" placeholder="Search Box" >
<input type="button" id="layer8" style="background-color:#8ec63f;border:none;height:25px;width:50px;margin-top:12.5px;font-size:20px;float:left;" value="GO"  onClick=   
"javascript:priyanka1()"/>
<input type="hidden"  name="messages" ID="messages" width="50" height="10" readonly>
</div>
<div id="capture" align="justify" style="width:100%;background-color:#8ec63f;float:left;">
</div><br/><br/><br/><br/></div></div>
</div>
</div>
</div>
    <!--project start-->    
  <!--project start-->    
   <div id="project">    	
		<div class="line3">
			<div class="container">
				
				<div class="row Ama">
					<div class="col-md-12">
					
					<h3>How the Project Works</h3>
					</div>
				</div>
			</div>
	</div>          
    
    
    <div class="container">
	  <div class="row">
		<div class="col-sm-6">
         <h1 style="color:#960; font-weight:bold">About the Project </h1>
					<p>Re-using Dublin is an application developed on the observation that we don’t use space in our city efficiently - and sometimes we don’t use it at all. Yet the city continues to sprawl, commuter times are increasing and there is a serious shortfall in housing provision. Coupled with this there are areas of the city which are underutilised and do not provide vibrant or attractive places for living and working.</p>

<p>In order to try and address these issues a number of initiatives have been put in place such as the Council’s mapping of ‘vacant sites’ in preparation for the introduction of a levy on land that is not being put into active use.</p>

<p>The Re-Using Dublin project considers these ‘vacant’ and underutilised sites to be only part of a bigger challenge. Re-Using Dublin goes a step further in attempting to map underused spaces, which we see as opportunities for using the city more efficiently for the benefit of everyone. Underused spaces include spaces that are not used at all (vacant) or that are only partly in use. It also includes spaces that may have a use, like a roof or a grassed area, but that could accommodate additional uses. It is envisaged that the identification of these might encourage the diverse reuse of underutilized spaces.  Uses related to community practices, ecosystems services, food systems, energy systems, or intensification of use.</p>

<p>Re-using Dublin is part of a wider EU FP7 project TURAS which seeks new adaptive and flexible approaches to urban planning that can build social-ecological resilience in response to the convergence of crises.</p>
		</div>
		 <div class="col-sm-6" style="padding-top:60px"> <img src="images/logo3.png"> </div></br>
        <div class="col-sm-6" style="bo"> <img src="images/turas.png"> </div>

	  </div>
	</div>

    
    <!--news start-->
    
    <div id="news">
    	<div class="line4">		
			<div class="container">
				<div class="row Ama">
					<div class="col-md-12">
					<h3>What&rsquo;s New?</h3>
					<p>Get the latest news from our blog</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
				<div class="row news"></div>
	  </div>
			<div class="container">
				<div class="row news2 news">
					<div class="col-md-6 text-left">
					<iframe src="//player.vimeo.com/video/115815956?color=473409&amp;" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<h3><a href="#">Introduction to Reusing Dublin</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>January 1, 2015</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Admin</a></li>
					</ul>
					<p>A short video animation createed to demonstrate the use of the Reusing Dublin application.. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
					<div class="col-md-6 text-right">
					<iframe src="//player.vimeo.com/video/115815956?color=473409&amp;" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<h3><a href="#">Nam in Nisl id Ipsum Feugiat Posuere ut sit Amet Sem</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Admin</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row news2 news"></div>
			</div>
			
			
			
			<div class="container hideObj2" style="display:none;">
				<div class="row news2 news">
					<div class="col-md-6 text-right">
					<iframe src="//player.vimeo.com/video/115815956?color=473409&amp;" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<h3><a href="#">Nam in Nisl id Ipsum Feugiat Posuere ut sit Amet Sem</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
					<div class="col-md-6 text-left">
					<iframe src="//player.vimeo.com/video/115815956?color=473409&amp;" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<h3 ><a href="#">Lorem Ipsum Dolor sit Amet Pelenntesque Sodales!</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2014</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
						<li><a href="#"><i class="fa fa-comments"></i>17 comments</a></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit quisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. adipiscing vitae vel quam proin eget mauris eget. <a class="readMore" href="#">Read More <i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
				</div>
			</div>
			<div class="container">
			<div class="row cBtn">
				<div class="col-md-12" style="text-align: center; margin-bottom: -90px; z-index: 10;">
					<ul class="mNews">
						<li class="dowbload bhide2"><a href="#"><i class="fa fa-arrow-down"></i>Load More news</a></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
    
    
    <!--contact start-->
    
    <div id="contact">
      <div class="container">
		  <div class="row"></div>
		</div>
	  <div class="container">
			<div class="row ftext">

		</div>
		</div>
		<div class="line7">
			<div class="container">
				<div class="row footer">
					<div class="col-md-12">
						<h3>Subscribe for Reusing Dublin!</h3>
						<p>Subscribe to our newsletter email to get notification about upcoming news, latest project activities and much more!</p>
						<div class="fr">
						<div style="display: inline-block;">
                        	
							<input type="text" class="col-md-6 fEmail" name='email' id='email1' placeholder='reusingdublin@gmail.com'/>
							<input type="submit" id="subscribe" name="added" class="subS" value="Subscribe" onClick="javascript:subscribe()"/>
                         
						</div>
						</div>
					</div>
					<div class="soc col-md-12">
							<ul>
							<li class="soc5"><a href="https://twitter.com/Reusingdublin"></a></li>
							<li class="soc2"><a href="https://www.facebook.com/reusingdublin"></a></li>
							
							
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="lineBlack">
			<div class="container">
				<div class="row downLine">
                	<div  class="logo col-md-4" style="width:100%;">
				
						<a href="#">
							<img src="images/Eu_logo1.png" style="margin-left:100px">
						</a>
					<div class="col-md-12 text-right">
						<!--input  id="searchPattern" type="search" name="pattern" value="Search the Site" onblur="if(this.value=='') {this.value='Search the Site'; }" onfocus="if(this.value =='Search the Site' ) this.value='';this.style.fontStyle='normal';" style="font-style: normal;"/-->
						<input  id="searchPattern" type="search" placeholder="Search the Site"/><i class="glyphicon glyphicon-search" style="font-size: 13px; color:#a5a5a5;" id="iS"></i>
					</div>
					<div class="col-md-6 text-left copy">
						<p>Copyright &copy; 2014 TURAS Project All Rights Reserved.</p>
					</div>
					<div class="col-md-6 text-right dm">
						<ul id="downMenu">
							<li class="active"><a href="#home">Home</a></li>
							<li><a href="#about">Application</a></li>
							<li><a href="#project1">Project</a></li>
							<li><a href="#news">News</a></li>
							<li class="last"><a href="#contact">Contact</a></li>
							<!--li><a href="#features">Features</a></li-->
						</ul>
					</div>
				</div>
			</div>
		</div>
    </div>		

		
	<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<script>
			$(document).ready(function(){
			$(".bhide").click(function(){
				$(".hideObj").slideDown();
				$(this).hide(); //.attr()
				return false;
			});
			$(".bhide2").click(function(){
				$(".container.hideObj2").slideDown();
				$(this).hide(); // .attr()
				return false;
			});
				
			$('.heart').mouseover(function(){
					$(this).find('i').removeClass('fa-heart-o').addClass('fa-heart');
				}).mouseout(function(){
					$(this).find('i').removeClass('fa-heart').addClass('fa-heart-o');
				});
				
				function sdf_FTS(_number,_decimal,_separator)
				{
				var decimal=(typeof(_decimal)!='undefined')?_decimal:2;
				var separator=(typeof(_separator)!='undefined')?_separator:'';
				var r=parseFloat(_number)
				var exp10=Math.pow(10,decimal);
				r=Math.round(r*exp10)/exp10;
				rr=Number(r).toFixed(decimal).toString().split('.');
				b=rr[0].replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g,"\$1"+separator);
				r=(rr[1]?b+'.'+rr[1]:b);

				return r;
}
				
			setTimeout(function(){
					$('#counter').text('0');
					$('#counter1').text('0');
					$('#counter2').text('0');
					setInterval(function(){
						
						var curval=parseInt($('#counter').text());
						var curval1=parseInt($('#counter1').text().replace(' ',''));
						var curval2=parseInt($('#counter2').text());
						if(curval<=707){
							$('#counter').text(curval+1);
						}
						if(curval1<=12280){
							$('#counter1').text(sdf_FTS((curval1+20),0,' '));
						}
						if(curval2<=245){
							$('#counter2').text(curval2+1);
						}
					}, 2);
					
				}, 500);
			});
	</script>
	<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#menu').slicknav();
		
	});
	</script>
	
	<script type="text/javascript">
    $(document).ready(function(){
       
        var $menu = $("#menuF");
            
        $(window).scroll(function(){
            if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("default")
                           .addClass("fixed transbg")
                           .fadeIn('fast');
                });
            } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("fixed transbg")
                           .addClass("default")
                           .fadeIn('fast');
                });
            }
        });
	});
    //jQuery
	</script>
	<script>
		/*menu*/
		function calculateScroll() {
			var contentTop      =   [];
			var contentBottom   =   [];
			var winTop      =   $(window).scrollTop();
			var rangeTop    =   200;
			var rangeBottom =   500;
			$('.navmenu').find('a').each(function(){
				contentTop.push( $( $(this).attr('href') ).offset().top );
				contentBottom.push( $( $(this).attr('href') ).offset().top + $( $(this).attr('href') ).height() );
			})
			$.each( contentTop, function(i){
				if ( winTop > contentTop[i] - rangeTop && winTop < contentBottom[i] - rangeBottom ){
					$('.navmenu li')
					.removeClass('active')
					.eq(i).addClass('active');				
				}
			})
		};
		
		$(document).ready(function(){
			calculateScroll();
			$(window).scroll(function(event) {
				calculateScroll();
			});
			$('.navmenu ul li a').click(function() {  
				$('html, body').animate({scrollTop: $(this.hash).offset().top - 80}, 800);
				return false;
			});
		});		
	</script>	
	<script type="text/javascript" charset="utf-8">

		jQuery(document).ready(function(){
			jQuery(".pretty a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true, social_tools: ''});
			
		});
	</script>
    	   </form>	
	</body>
	
</html>