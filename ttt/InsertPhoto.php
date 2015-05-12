<?php 
if(isset($_POST['added']))
{if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{
	
    $file = $_FILES['pic'];
    $file_path = $file['tmp_name'];
    $file_name = $file['name'];
    $file_type = $file['type'];
    $file_id = $file['tmp_name'];

  
	if(move_uploaded_file($file_path,'imagess/'.$file_name))
{
	$msg = "File Uploaded";

}
else
{
  	$msg = "Error";	
}
}
else
{
	
	$msg = "Invalid Photo Format";
}
}
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enter Information Details</title>
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


   <style type="text/css">

      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }


      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    
</style>
<link href="css/bootstrap-responsive.css" rel="stylesheet">
 <link href="css/bootstrap.css" rel="stylesheet">
</head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
 
<script type="text/javascript">
var map;
var panorama;
var x = 1;
var sv = new google.maps.StreetViewService();
var i ;
function initialize() {

var a = sessionStorage.getItem("lll");
var b = sessionStorage.getItem("llll");
document.getElementById("lat").value = a;
document.getElementById("lon").value = b;
document.body.scroll = "yes"
var astorPlace = new google.maps.LatLng(a,b);

  // Set up the map
  var mapOptions = {
    center: astorPlace,
    zoom: 18,
    streetViewControl:false,
	scrollwheel: false 
  };

  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
	  
  
   panorama = new google.maps.StreetViewPanorama(document.getElementById('map-canv'));
   sv.getPanoramaByLocation(astorPlace, 50, processSVData);
  
}


function processSVData(data, status) {
  if (status == google.maps.StreetViewStatus.OK) {
    var marker = new google.maps.Marker({
      position: data.location.latLng,
      map: map,
      title: data.location.description
    });

    panorama.setPano(data.location.pano);
    panorama.setPov({
      heading: 270,
      pitch: 0
    });
    panorama.setVisible(true);

    google.maps.event.addListener(map, 'onload', function() {

      var markerPanoID = data.location.pano;
      // Set the Pano to use the passed panoID
      panorama.setPano(markerPanoID);
      panorama.setPov({
        heading: 270,
        pitch: 0
      });
      panorama.setVisible(true);
    });
  } 
}
function goback()
{
  this.close();
}
function pops()
{
	alert("  JPEG/PNG/GIF/TIFF File Types Are Allowed For Upload ");
}
function show()
{
	
var str = document.getElementById('pic').value;
var lastIndex = str.lastIndexOf("\\");
if (lastIndex >= 0) {
var  photoname = str.substring(lastIndex + 1);
}
localStorage.setItem("photonames", photoname);

}

	



</script>
<body onload="initialize()">

<div>
    
     		
<div>

  
                    	<form action="InsertPhoto.php" method="post" enctype="multipart/form-data">

<div style="margin-left:100px;font-family: Arial, Helvetica, sans-serif;font-weight:bold;color:#960;font-family: Arial, Helvetica, sans-serif;font-weight:1000;font-size:36px;">
  <?php echo $msg ?>
  </div>

<div class="container-fluid">
      <div class="row-fluid">
        <div  class="span3">
         <ul  class="nav nav-list" >
         <div style="margin-left:1%;width:80%;float:left;margin-right:1%;" class="well sidebar-nav" > 
<div style="float:left;width:52%;" >
<div  style="margin-left:40px;"> 
<b style="font-size:16px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870" align="left">UPLOAD PHOTOGRAPH FOR THE SITE/LOCATION<br/><br/> 
</b>
</div>
 <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:40px;">
    Insert Photograph:</b>
     <br/><br/>
     <label>
    <input type="file" name="pic" style="margin-left:40px;;width:400px;" id="pic" onClick="pops()" required />
    </label>
    <br/><br/>
     </div> 

    <div style="float:right;width:28%;margin-right:1%;">
     <div id="map-canv" style="position:relative;float:left;height:200px;width:100%;padding:10px;margin-top:60px;"></div>
 
     <div id="map-canvas" style="position:relative;float:left;height:200px;width:100%;padding:10px;margin-top:40px;">
   
    </div> 
     
     </div> 
        
        </div> 
     
   
   
  
  
</ul>   
 
   
<br/>
<br/>

 </div>
  
 </div>
</div>

     <div style="margin-top:5px;border:none;margin-left:140px;">
    
<input type="button" name="submits" class="btn btn-embossed btn-primary" value="Back"  onClick="javascript:goback()"/ >      
<input type="submit" name="added" class="btn btn-primary btn-large" value="Upload" onClick="javascript:show()" />
</div>

<br/>
<br/>
  <br/>
<br/>
<input type="hidden" name="lat1" ID="lat"  size="40"><br><br/><br/>
<input type="hidden" name="lon1" ID="lon"  size="40"><br><br/><br/>
</form>  



</body>

        </body>

  <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

    
</html>
 
