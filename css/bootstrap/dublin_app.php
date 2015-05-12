<?php
    require("config.php");
    if(empty($_SESSION['user'])) 
    {
        header("Location: index.php");
        die("Redirecting to index.php"); 
    }
	
 $con=mysqli_connect("172.16.0.57","u1046393_turas","Soamin123@","db1046393_dublin");
 if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result1 = mysqli_query($con,"SELECT Latitude,Longitude,Location FROM Address1");
while($row = mysqli_fetch_assoc($result1))
{
	$data[] = $row;
	
}
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>TURAS App Development Environment</title>
    <meta name="description" content="TURAS App Environment has been established by Future Analytics Consulting to host TURAS Applications."/>

    <link href="http://www.factest.ie/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="http://www.factest.ie/css/flat-ui.css" rel="stylesheet">
    <link href="http://www.factest.ie/css/demo.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    
    <!--  timeline js stuff-->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>
    <script type="text/javascript" src="../lib/jquery-1.6.2.min.js"></script>
    <script type="text/javascript" src="../lib/mxn/mxn.js?(openlayers)"></script>
    <script type="text/javascript">


var markers = [];
var map;
var myCenter=new google.maps.LatLng(51.508742,-0.120850);
var a;
var b;
var test = [];






function initialize()

{    var marker;


var mapProp = {
  center:myCenter,
  zoom:5,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
 
  map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
  
   var infoWindowHtml = '      <a href="javascript:void(0);"onClick=window.open("turas1.php","Ratting","width=550,height=500,0,status=0,");>	Link</a>'
  var infoWindowHtml1 = '     <a href="javascript:void(0);"onClick=window.open("view.php","Ratting","width=550,height=500,0,status=0,");>	Link</a>'
  var infoWindowHtml2 = '     <a href="javascript:void(0);"onClick=window.open("update1.php","Ratting","width=550,height=500,0,status=0,");>Link</a>'


  
  var UCLAParking = new google.maps.KmlLayer('http://factest.ie/kmls/Luas.kmz');
UCLAParking.setMap(map);


  google.maps.event.addListener(map, 'click', function(event) {
    placeMarker(event.latLng);
	var lat = a;
	var lon = b;
    
	
	sessionStorage.setItem("lll", lat);
	sessionStorage.setItem("llll", lon);
  
  });


   <?php 

foreach($data as $marker)
{
	
?>
	var mylatlng =new google.maps.LatLng(<?php echo $marker['Latitude']; ?>,<?php echo $marker['Longitude'];?>);
	var image = {
    url: 'http://www.factest.ie/dublinapp/images/t_icon.png',
    // This marker is 20 pixels wide by 32 pixels tall.
    size: new google.maps.Size(30, 35)
	};
	var marker =  new google.maps.Marker({
		position : mylatlng,
		map : map,
		icon: image,
		title: 'Click Here for more details'
	});
	 
var html = 'Latitude: ' + mylatlng.lat() + '<br>Longitude: ' + mylatlng.lng() + '<br>EnterTheDescription:' + infoWindowHtml + '<br>ViewTheDescription: ' + infoWindowHtml1 + '<br>UpdateTheDescription: ' + infoWindowHtml2 ;
var infoWindow = new google.maps.InfoWindow();
bindInfoWindow(marker, map, infoWindow, html) ;
<?php
	
}
?>


}
function deleteMarkers() {
  clearMarkers();
  markers = [];
}
function clearMarkers() {
  setAllMap(null);
}
function setAllMap(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}
function bindInfoWindow(marker, map, infoWindow, html) {
  google.maps.event.addListener(marker, 'click', function() {
    infoWindow.setContent(html);
    infoWindow.open(map, marker);
	 a = my.lat();
     b = location.lng();
  });
   
}

function placeMarker(location) {
	var image = {
    url: 'http://www.factest.ie/dublinapp/images/t_icon.png',
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
   var infoWindowHtml = '      <a href="javascript:void(0);"onClick=window.open("turas1.php","Ratting","width=550,height=500,0,status=0,");>	Link</a>'
  var infoWindowHtml1 = '     <a href="javascript:void(0);"onClick=window.open("view.php","Ratting","width=550,height=500,0,status=0,");>	Link</a>'
  var infoWindowHtml2 = '     <a href="javascript:void(0);"onClick=window.open("update1.php","Ratting","width=550,height=500,0,status=0,");>Link</a>'
  var infowindow = new google.maps.InfoWindow({
    content: 'Latitude: ' + location.lat() + '<br>Longitude: ' + location.lng() + '<br>EnterTheDescription:' + infoWindowHtml + '<br>ViewTheDescription: ' + infoWindowHtml1 + '<br>UpdateTheDescription: ' + infoWindowHtml2 
  });

  
  
 

    //infowindow.open(map,marker);
	  google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
    });
google.maps.event.addListener(marker, 'dblclick', function(event) {
        marker.setMap(null);
    });

  
 a = mylatlng.lat();
 b = mylatlng.lng();

}


google.maps.event.addDomListener(window, 'load', initialize);

</script>
    <link href="examples.css" type="text/css" rel="stylesheet"/>
    <style>
    div#timelinecontainer { height: 300px; }
    div#mapcontainer { height: 500px; }
    div.olFramedCloudPopupContent { width: 300px; }
    </style>
    

  </head>
  <body>
    <div class="container">
    
    
  <div class="demo-headline">
        <h1 class="demo-logo">
          <div class="logo"><a href="turas.php"></div>
          TURAS 
          <small>Development Environment</small>
        </h1>
  </div> <!-- /demo-headline -->


<!-- navigation -->

<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
      <span class="sr-only">Toggle navigation</span>
    </button>
    <a class="navbar-brand" href="#">TURAS</a>
  </div>
  <div class="collapse navbar-collapse" id="navbar-collapse-01">
    <ul class="nav navbar-nav">           
              <li><a href="#fakelink">Home</a></li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Applications<b class="caret"></b></a> <span class="dropdown-arrow"></span>
                <ul class="dropdown-menu">
                  <li><a href="#">Dublin</a></li>
                  <li><a href="#">London</a></li>
                  <li><a href="#">Nottingham</a></li>
                  <li><a href="#">Aalbord</a></li>
                  <li><a href="#">Rotterdam</a></li>
                  <li><a href="#">Stuttgart</a></li>
                  <li><a href="#">Sofia</a></li>
                  <li><a href="#">Ljublijana</a></li>
                </ul>
              </li>
    </ul>           
    <form class="navbar-form navbar-right" action="dublin_app.php" role="search" method="post">
      <div class="form-group">
        <div class="input-group">
          <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
          <span class="input-group-btn">
            <button type="submit" class="btn"><span class="fui-search"></span></button>
          </span>            
        </div>
      </div> 
                   
   
  </div><!-- /.navbar-collapse -->
</nav><!-- /navbar -->


  <h1 class="demo-section-title">Community Capital</h1>
  
  <p style="text-align:justify">Transitioning Towards Urban Resilience and Sustainability (TURAS) aims to enable European cities and their rural interfaces to build vitally-needed resilience in the face of significant sustainability challenges through Knowledge Transfer Partnerships. The increasing proportion of people living in urban areas has led to a range of environmental issues and sustainability challenges. In order to ensure that urban living is sustainable and that cities have the resilience to cope with environmental change these challenges must be met.</br></br>

Restoration and re-creation of green infrastructure in urban areas is a potential solution to many of these challenges and in high density urban areas with little usable space at ground level, roof level green infrastructure has perhaps the greatest potential to contribute to re-greening urban areas. Given the increasing recognition that the natural environment can provide goods and services of benefit to humans and the planet (‘ecosystem services’), and that these services can provide resilience for urban areas, the European Commission is now advocating well-planned green infrastructure that provides opportunities to protect and enhance biodiversity.</br></br>

This timeline application has been created to evolve over time with YOUR help! Please follow the button below to submit an entry.</p>
   <div id="googleMap" align="center" style="width:1000px;height:500px;"></div>
 <input type="hidden" name="ID" value="default">
 <input type="submit" style="visibility: hidden;">
</form> 
     
    <!-- Load JS here for greater good =============================-->
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/bootstrap-switch.js"></script>
    <script src="js/flatui-checkbox.js"></script>
    <script src="js/flatui-radio.js"></script>
    <script src="js/jquery.tagsinput.js"></script>
    <script src="js/jquery.placeholder.js"></script>
    <script src="js/jquery.stacktable.js"></script>
    <script src="http://vjs.zencdn.net/4.3/video.js"></script>
    <script src="js/application.js"></script>
  </body>
</html>
