<?php
/**
 * Usage: Create config.php file with an array matches the parameter required by
 * ./lib/Config.php::__construct()
 *
 * @author Priyanka Singh
 **/
require_once('db.php');
//Php code for assigning markers and site to the map
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
    {
        $data3[] = $row3;
    }
    foreach($data3 as $data4)
    {
        $ttt= $_POST['email'];
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
    if(empty($x)&&(!empty($ee))){
        $sql="INSERT INTO emailss(email) VALUES ('$ee')";
        if (!mysqli_query($con,$sql)){
            die('Error: ' . mysqli_error($con));
        }
        $subject = $_POST["email"];
        $message = "The following Person wants to Register with Us:".$_POST["email"]." Thanks \n";
        $mail_from="".$_POST["email"]." wants to subscribe to Reusingdublin.\n";
        $header = " : <$mail_from>";
        $to = "james.sweeney@futureanalytics.ie";
        $send_contact= @mail($to,$subject,$message,$header);
        if($send_contact){
            $nn = "";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | ReusingDublin</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'>
    <link rel="stylesheet" type="text/css" href="css/slicknav.css">
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>
    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="http://getbootstrap.com/examples/navbar-fixed-top/navbar-fixed-top.css" rel="stylesheet"> -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:600,400,700' rel='stylesheet' type='text/css'>

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/markerclusterer/src/markerclusterer.js"></script>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <style>
    input[type='text']::-webkit-input-placeholder {
    		font-family:'Source Sans Pro', sans-serif;
    		font-size:17px;
    		font-weight:600;
    		color: #00afc9;
    }


    input[type='text']::-moz-placeholder { /* Firefox 18- */
    		color: #00afc9;
    		font-family:'Source Sans Pro', sans-serif;
    		font-size:20px;
    		font-weight:600;
    }

    input[type='text']::-moz-placeholder {  /* Firefox 19+ */
    		color: #00afc9;
    		font-family:'Source Sans Pro', sans-serif;
    		font-size:20px;
    		font-weight:600;
    }

    input[type='text']::-ms-input-placeholder {
    		color: #00afc9;
    		font-family:'Source Sans Pro', sans-serif;
    		font-size:20px;
    		font-weight:600;
    }
    input[type='email']::-webkit-input-placeholder {
    		font-family:'Source Sans Pro', sans-serif;
    		font-size:17px;
    		font-weight:600;
    		color: #FFF;
    		align:center;
    }


    input[type='email']::-moz-placeholder { /* Firefox 18- */
    		color: #FFF;
    		font-family:'Source Sans Pro', sans-serif;
    		font-size:20px;
    		font-weight:600;
    		align:center;
    }

    input[type='email']::-moz-placeholder {  /* Firefox 19+ */
    		color: #FFF;
    		font-family:'Source Sans Pro', sans-serif;
    		font-size:20px;
    		font-weight:600;
    		align:center;
    }

    input[type='email']::-ms-input-placeholder {
    		color: #FFF;
    		font-family:'Source Sans Pro', sans-serif;
    		font-size:20px;
    		font-weight:600;
    		align:center;
    }
    .ppp.a
    {
    	font-family:'Source Sans Pro', sans-serif;
    	font-size:17px;
    	font-weight:600;
    	color:#000;
    }

    li:hover {
        font-color:#FFF;
    }
    @media only screen and (max-width : 768px)  {
      .news{margin-top:-20px;}
    }
    @media screen and (max-width: 768px)
    {
    	br
    	{
    	   display: none

    	}
    	.jumbotron
    	{
    		width:90%;
    	}

    }

     .active {
    	color:#FFF;
    }


    </style>

       <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->


        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59451880-1', 'auto');
  ga('send', 'pageview');

</script>

		<script type="text/javascript">
        $(function() {
						$('a[href*=#]:not([href=#])').click(function() {
						if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
						var target = $(this.hash);
						target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
						if (target.length) {
						$('html,body').animate({
						scrollTop: target.offset().top - 110
						}, 1000);
						return false;
						}
						}
						});
        });

    $('#navbar ul li a').click(function(){
        console.log(this);
        $('#navbar ul li a').color = '#000';
        $(this).color = '#fff';
    });


</script>



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
function goclicky(meh)
{
    var x = screen.width/2 - 700/2;
    var y = screen.height/2 - 450/2;
    window.open(meh.href, 'sharegplus','scrollbars = 1,height=700,width=700,left='+x+',top='+y);
}
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
map.setMapTypeId(google.maps.MapTypeId.ROADMAP);
//Settings the contents for the marker infowindow.
contents = '<div id="ppp" style="width:280px; height:150px;">' + '<a href="Entry_Form.php" onclick="goclicky(this); return false;" target="_blank" style="background-color:#f4e851;border:none;font-family:Source Sans Pro, sans-serif;font-size:17px;height:40px;width:280px;color:black;font-weight:600;" class="btn btn-primary btn-large"  >ENTER THE DESCRIPTION</a>' + '<br/>' +'<a href="Update_Form.php" onclick="goclicky(this); return false;" target="_blank"   style="background-color:#f4e851;border:none;height:40px;width:280px;;margin-top:5px;color:black;font-size:17px;font-weight:600;font-family:Source Sans Pro, sans-serif" class="btn btn-primary btn-large" target="_blank">UPDATE THE DESCRIPTION</a>' + '<br/>' + '<a href="View_Form.php"  style="background-color:#f4e851;border:none;height:40px;width:280px;color:black;margin-top:5px;font-size:17px;font-family:Source Sans Pro, sans-serif;font-weight:600;" class="btn btn-primary btn-large" target="_blank">VIEW THE DESCRIPTION</a>' + '</div>' ;
//Setting the source for the luas kmz file.
var src2 = 'http://www.reusingdublin.ie/Luas.kmz'
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
			var marker2 =  new google.maps.Marker({
			position : position2,
			map : map,
			title: 'Heuston Station'
	});
google.maps.event.addListener(marker2, 'mouseover', function(event) {
var infoWindow = new google.maps.InfoWindow({
content : 'Heuston Station'
});
infoWindow.open(map, marker2);
if(activeWindow != null)
activeWindow.close();
//Store new window in global variable
activeWindow = infoWindow;
});
	var marker3 =  new google.maps.Marker({
		position : position3,
		map : map,
		title: 'Jervis Shopping Center'
	});
google.maps.event.addListener(marker3, 'mouseover', function(event) {
var infoWindow = new google.maps.InfoWindow({
content : 'Jervis Shopping Center'
});
infoWindow.open(map, marker3);
if(activeWindow != null)
activeWindow.close();
//Store new window in global variable
activeWindow = infoWindow;
});
	var marker4 =  new google.maps.Marker({
		position : position4,
		map : map,
		title: 'Dublin City Council, Fruit Market,Saint Michan Street ,Dublin 7, Ireland'
	});
google.maps.event.addListener(marker4, 'mouseover', function(event) {
var infoWindow = new google.maps.InfoWindow({
content : 'Dublin City Council, Fruit Market,Saint Michan Street ,Dublin 7, Ireland'
});
infoWindow.open(map, marker4);
if(activeWindow != null)
activeWindow.close();
//Store new window in global variable
activeWindow = infoWindow;
});
	var marker5 =  new google.maps.Marker({
		position : position5,
		map : map,
		title: 'Fruit and Veg Market, 12 Newmarket Dublin 8 Ireland '
	});
google.maps.event.addListener(marker5, 'mouseover', function(event) {
var infoWindow = new google.maps.InfoWindow({
content : 'Fruit and Veg Market, 12 Newmarket Dublin 8 Ireland '
});
infoWindow.open(map, marker5);
if(activeWindow != null)
activeWindow.close();
//Store new window in global variable
activeWindow = infoWindow;
});
	var marker6 =  new google.maps.Marker({
		position : position6,
		map : map,
		title: 'Fruit and Veg Market,5 Orwell Road Dublin 6 '
	});
google.maps.event.addListener(marker6, 'mouseover', function(event) {
var infoWindow = new google.maps.InfoWindow({
content : 'Fruit and Veg Market,5 Orwell Road Dublin 6 '
});
infoWindow.open(map, marker6);
if(activeWindow != null)
activeWindow.close();
//Store new window in global variable
activeWindow = infoWindow;
});
var marker7 =  new google.maps.Marker({
position : position7,
map : map,
title: 'Fruit and Veg Market,Organic Shop Blackrock'
});
google.maps.event.addListener(marker7, 'mouseover', function(event) {
var infoWindow = new google.maps.InfoWindow({
 content : 'Fruit and Veg Market,Organic Shop Blackrock'
});
infoWindow.open(map, marker7);
 if(activeWindow != null)
 activeWindow.close();
//Store new window in global variable
activeWindow = infoWindow;
});
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
url:'http://www.reusingdublin.ie/icon1.png',
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
        console.log(lat1);
        console.log(lon1);
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
 },
 	  {
    where: "'CAT' = 'Transport'",
    polygonOptions: {
    fillColor: "#663300",
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
    url:'http://www.reusingdublin.ie/icon2.png',
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
    url:'http://www.reusingdublin.ie/icon3.png',
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
document.getElementById("layer8").addEventListener("click", function(){
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
h =  '<div style="width:300px; height:180px;font-family:Source Sans Pro, sans-serif;font-size:20px;font-weight:bold;">' + " " + location + '</br>' +'</br>'+ '</br>' + '<a href="ViewData.php"  style="background-color:#9dd7e3;border:none;font-family:Source Sans Pro, sans-serif;font-size:17px;height:40px;width:280px;color:black;font-weight:600;" class="btn btn-primary btn-large" target="_blank">LEARN MORE ABOUT THE SITE</a>' + '<br/>' + '</div>';
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
	document.getElementById('email1').value = "";
	document.getElementById("email1").focus();
    return (false)
}
function setFocusToTextBox(){

}

//Acts as a flip flop for the display of the markers between user site details which are added by the users and official utilized /underutilized Areas for the button Discover a site.

//Binding an info window with the user added markers.
function bindInfoWindows(marker, map,llllll) {
 b1 = '<div style="width:280px; height:150px;">' + '<a  href="Entry_Form.php" onclick="goclicky(this); return false;" target="_blank"  style="font-size:17px;font-family:Source Sans Pro, sans-serif;font-weight:600;background-color:#f4e851;border:none;color:black;height:40px;width:280px;" class="btn btn-primary btn-large" target="_blank" >ENTER THE DESCRIPTION</a>' + '<br/>' +'<a href="Update_Form.php" onclick="goclicky(this); return false;" target="_blank"  style="background-color:#f4e851;border:none;height:40px;width:280px;color:black;margin-top:5px;font-size:17px;font-size:17px;font-family:Source Sans Pro, sans-serif;font-weight:600;" class="btn btn-primary btn-large" target="_blank">UPDATE THE DESCRIPTION</a>' + '<br/>' + '<a href="View_Form.php"  style="background-color:#f4e851;border:none;height:40px;width:280px;color:black;margin-top:5px;font-size:17px;font-size:17px;font-family:Source Sans Pro, sans-serif;font-weight:600;" class="btn btn-primary btn-large" target="_blank">VIEW THE DESCRIPTION</a>' + '</div>' ;
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
		url:'http://www.reusingdublin.ie/icon1.png',
		// This marker is 28 pixels wide by 27 pixels tall.
		size: new google.maps.Size(28, 27)
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
{
    alert(' Left Click on the Map with your mouse to Add a New Site !');
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
<body onLoad="initialize()">
<?php
/**
 * get the header for the homepage
 */
define('IS_HOMEPAGE', 1);
require_once('includes/head.php');
require_once('includes/header.php');
?>
<form id="myForm" method="post" action="index.php" enctype="multipart/form-data" autocomplete="off">
            <!-- Fixed navbar -->
            <div id="menu1" class="news" style="background-image:url('reusing-draft-13.04-02.png');background-size:cover; display: inline-block;width:100%; height:auto;">
            <div class="row"><!-- Main component for a primary marketing message or call to action -->
            <div class="col-md-4" style="margin-top:7%;float:left;margin-left:3%;" >
            <div class="jumbotron"   style="background-color:#022a3c;height:auto;margin-top:5%;"  >
            <div  style="padding:5%;" align="left">
            <p style="color:white;font-family:'Source Sans Pro', sans-serif;font-size:40px;margin-top:1%;line-height: 1.0;text-align:left;">Welcome to Reusing Dublin, a space to discover and share information about vacant or underused spaces in Dublin</p><br>
            <p  style="color:#f4e851;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:600;line-height: 1.0;text-align:left;">Join us in unlocking the potential of the spaces in our city.</p>
            </div>
            </div>
            </div>
            </div>
            <br>



            <section id="menu2" class="row">  <!-- Main component for a primary marketing message or call to action -->
            <div   class="col-md-4" style="margin-top:3%;float:left;margin-left:3%;" >
            <div  class="jumbotron"  id="works" style="background-color:#FFF;height:auto;margin-top:3%;" >

            <div style="padding:5%">
            <p style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:40px;font-weight:bold;line-height: 1.0;">How it works</p>
            <p style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:600;text-align:left;line-height: 1.0;">Using the map below, discover or add information about any underused sites you have noticed.</p>
            <p style="color:#000;background-color:#f4e851;font-family:'Source Sans Pro', sans-serif;font-size:28px; padding:10px;text-align:left;line-height: 1.0;"><b>Add a space</b> by clicking the 'add a site' tab and clicking on the location on the map.</p><br/>
                    <p style="color:#000;background-color:#cadd70;font-family:'Source Sans Pro', sans-serif;font-size:28px;padding:10px;text-align:left;line-height: 1.0;"><b>Share your information</b> about a site.   </p><br/>
                <p style="color:#000;background-color:#9dd7e3;font-family:'Source Sans Pro', sans-serif;font-size:28px;padding:10px;text-align:left;line-height: 1.0;"><b>Connect with others</b> who might be interested in the site.   </p>

            </div>
            </div>
            </div>

            </div>
            </div>



            <section id="menu3">
            <div   class="container"  style="padding-top:20px;margin-left:2%;" align="center">
            <div  class="col-md-4"  style="margin-bottom:5px;">
            <input type="button" id="try"  style="background-color:#00afc9;border:none;height:40px;color:#FFF;font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:600;margin-bottom:0px;" align=
            "center" value=" &nbsp;ADD A SITE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  onClick="javascript:addasite()"/>
            </div>

            <div  class="col-md-4"  style="margin-bottom:5px;">
            <select  style="background-color:#00afc9;border:none;height:40px;color:#FFF;font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:600;width:auto;" id="pac-input1" align=
            "center" onChange="selectchange()">
            <option align="center">MORE INFORMATION</option>
            <option value="3">DCC DEVELOPMENT PLAN ZONINGS</option>
            <option value="6">PROTECTED STRUCTURES</option>
            <option value="2">BUILDINGS USAGE</option>
            <option value="4">DCC PLANNING APPLICATIONS</option>
            </select>
            </div>

            <div    class="col-md-4"  style="margin-bottom:5px;float:left;">
            <input type="button"  id="additional" style="background-color:#00afc9;border:none;height:40px;color:#FFF;font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:600;margin-bottom:0px;float:left;" align=
            "center" value="FIND AN AREA"/>
            <input id="pac-input" style="color:#00afc9;border:none;font-size:17px;margin-left:1px;float:left;width:100px;" type="text" placeholder="SEARCH BOX" >
            <input type="button" id="layer8" style="background-color:#8ec63f;border:none;font-size:17px;background-color:#F00;color:#000;margin-left:1px;float:left;" value="GO" />
            <br/>
            <br/>
            <br/>
            </div>
            </section>


            <div  class="container" style="width:100%;height:100%;padding-top:10px;background-size:cover;" >
            <div id="googleMap" align="center" style="width:100%;height:600px;float:left;border:thin;" ></div>

            <input type="hidden"  name="messages" ID="messages" width="50" height="10" readonly>

            <div id="capture" align="justify" style="width:100%;background-color:#8ec63f;float:left;">
            </div>
            </div>
            </section>

            <div >
                <section id="menu4" class="container" style="background-color:#f4e851;width:100%;height:100%;margin-top:5%;" >
                    <div class="row">
                        <div class="col-sm-6" style="margin-left:7%;padding:5%;" >
                            <p style="font-family:'Source Sans Pro', sans-serif;font-size:40px;font-weight:bold;">
                                About the Project
                            </p>
                            <p style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:regular;">
                                Reusing Dublin responds to the observation that we don’t use space in
                                our city efficiently - and sometimes we don’t use it at all.
                            </p>
                            <p style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:regular;">
                                Reusing Dublin attempts to map underused spaces in order to identify
                                opportunities for using the city more efficiently for the benefit of
                                everyone.
                            </p>
                            <p style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:regular;">
                                Underused spaces include sites and buildings that are not used at all
                                (vacant) or that are only partly in use. It also includes spaces that may
                                have a use, like a roof or a grassed area, but that could accommodate
                                additional uses.
                            </p>
                            <p style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:regular;">
                                Re-using Dublin is an experimental research project that is part of
                                a wider EU FP7 project called <u>TURAS</u> (Transitioning towards Urban
                                Resilience and Sustainability).
                            </p>
                        </div>
                        <div class="col-sm6">
                            <a class="twitter-timeline" href="https://twitter.com/ReusingDublin" data-widget-id="599143046584868864">
                                Tweets by @ReusingDublin
                            </a>
                            <script type="text/javascript">
                                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
                            </script>
                        </div>
                    </div>
                </section>
            </div>

            <?php
            require_once('includes/footer.php');
            ?>
