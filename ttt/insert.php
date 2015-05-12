<?php
if(isset($_POST['added']))
{
	
	
 

if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{

 $file1 = $_FILES['pic1'];
 

 $file_path1 = $file1['tmp_name'];
 $file_name1 = $_FILES['pic1']['name'];
 $file_type1 = $file1['type'];
 $file_id1 = $file1['tmp_name'];


if(move_uploaded_file($file_path1,'images/'.$file_name1))
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
$msg = "Invalid File Format";	
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
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
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
	alert("  MSWORD/PDF File Types Are Allowed For Upload ");
}
function getname()
{
var str = document.getElementById('pic1').value;
var lastIndex = str.lastIndexOf("\\");
if (lastIndex >= 0) {
var  filename = str.substring(lastIndex + 1);
}
localStorage.setItem("filenames", filename);
localStorage.setItem("dataexist", 'yes');

}



</script>
<body onload="initialize()">

<div>
    
     		
<div>

  
    

		    
    <div class="container">
			<div class="row">
                   
                <div class="col-sm-6">
					<p style="color:#FFF; padding-top:20px">A template for change </br><span style="font-weight:bold">Pilot project: North Inner City Dublin.</span> </p></div>
				  
                    
				</div>
  			 </div>  
                 
     	 </div>       
	  </div>
  </div>
  </div>
                       	
                         <form action="insert.php" method="post" enctype="multipart/form-data">

<div class="form-group" >
     </br>
     
<input id="pac-input" class="controls1" type="text"  placeholder="Search Box">
<div id="map_canvas"  style="width:100%;float:right;"></div>
    </br>
    <div class="form-group" >
     </br>
    
        <label class="control-label col-md-4" style="margin-left:61px;" for="title" style="margin-top:10px;">Title</label>
       </br>
         </br>
      
                     <input type="text" class="form-control" style="margin-top:10px;margin-left:2px;" id="title" style="float:left;" name="title" placeholder="Enter Title"  />
              </br>
       
    </div>
    
    
    
        <div class="form-group">
         </br>
        <label class="control-label col-md-4" style="margin-left:61px;" for="description">Description</label>
        
        <div class="col-md-6">
        
            <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description" autofocus/>
              </br>
        </div>
    </div>
     <div class="form-group">
         </br>
        <label class="control-label col-md-4" style="margin-left:61px;" for="latitude">Latitude</label>
        
        <div class="col-md-6">
            <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Enter Latitude" />
              </br>
        </div>
    </div>
    
     <div class="form-group">
         </br>
        <label class="control-label col-md-4" style="margin-left:61px;" for="longitude">Longitude</label>
        
        <div class="col-md-6">
            <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Enter Longitude" />
              </br>
        </div>
    </div>
      <div class="form-group">
         </br>
        <label class="control-label col-md-4" style="margin-left:61px;" for="dates">Start Date</label>
        
        <div class="col-md-6">
            <input type="date" class="form-control" id="dates" name="dates" placeholder="Enter Longitude" />
              </br>
        </div>
    </div>
      <div class="form-group">
         </br>
        <label class="control-label col-md-4" style="margin-left:61px;" for="enddate">End Date</label>
        
        <div class="col-md-6">
            <input type="date" class="form-control" id="enddate" name="enddate" placeholder="Enter Longitude" />
              </br>
        </div>
    </div>
    <div class="form-group">
        </br>
        <label class="control-label col-md-4" style="margin-left:61px;" for="category">Category</label>
        
        
            <input type="text" id="category"  style="" name="category" placeholder="Enter Category" />
              </br>
       
        </div>
    </div>
      
        
   
    
      <div class="form-group">
         </br>
        <label class="control-label col-md-4" style="margin-left:61px;" for="uploadfile">Upload File</label>
       
            <input type="button"  class="btn btn-primary btn-large btn-block"  id="uploadfile" style="width:200px;float:left;margin-left:71px;" onClick="window.open('uploadfile.php')"  name="uploadfile" value="Upload File"/>
              </br>
                 </br>
       
    </div>
      <div class="form-group">
         </br>
        <label class="control-label col-md-4" style="margin-left:61px;" for="uploadphoto">Upload Photograph</label>
        
       
               <input type="button"  class="btn btn-primary btn-large btn-block"  style="width:200px;float:left;margin-left:71px;" id="uploadphoto" onClick="window.open('InsertPhoto.php')" name="uploadphoto" value="Upload Photos"/>
              </br>
                    </br>
                          </br>
      
    </div>
    
     
    
    
    
     </br>
    <div class="form-group">
        <div class="col-md-6" align="center">
           <button id="ButtonSubmit" class="btn btn-primary btn-large btn-block" style="width:300px;margin-top:20px;"  onclick="postContactToGoogle()" 
type="button" >Send</button>
        </div>
    </div>
        <input type="hidden" class="form-control" id="photo" name="photo"/>
        </form>
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
 

 
