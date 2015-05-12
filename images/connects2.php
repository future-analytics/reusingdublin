<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Connect With Users</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
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

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
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
	 var win1 = window.open("View_Form.php");
  win1.focus();
  this.close();
	
}



</script>
<body onload="initialize()">
  
   
    <div id="home" style="margin-top:-60px;">
    	<div class="headerLine">
	<div id="menuF" class="default">
		<div class="container">
			<div class="row">
				<div class="logo col-md-4">
					<div>
						<a href="#">
							<img src="images/logo.png">
						</a>
					</div>
				</div>
				<div class="col-md-8">
					<div class="navmenu"style="text-align: center;">
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
					<p style="color:#FFF; padding-top:20px">A template for change </br><span style="font-weight:bold">Pilot project: North Inner City Dublin.</span> </p></div>
				  
                <div class="col-sm-12">
					<h1>  </br></h1></div>
                    
		</div>
   </div>      
             
             
             
		  </div>
		  </div>
	</div>

    </div>

<form action="notifyss.php" method="post" enctype="multipart/form-data">
 
       <input type="hidden" name="lat1" ID="lat" size="40"><br><br/><br/>
      <input type="hidden" name="lon1" ID="lon" size="40"><br><br/><br/>
   <div class="container-fluid">
      <div class="row-fluid">
        <div  class="span3">
         <ul  class="nav nav-list" >
         

<div>
<div style="margin-left:50px;width:820px;float:left;margin-top:30px;height:720px;" class="well sidebar-nav" >  
  <div>
          <h2 style="font-size:16px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-top:5px;margin-left:10px;margin-right:10px;" align="justify"><b>
 Tell us a little about yourself! Once you do, why not post a note to tell everyone your vision for the lot? And be sure to post updates on your progress!

When you fill out this form, you will receive notifications when other people show interest in growing community on this lot  or add notes or a picture.

</b>
</h2>
</div>
        
<div style="float:left;" >
  <b style="font-size:16px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;" align="left">CONNECT WITH US<br/><br/><br/></b>
    <b style="font-size:16px;font-family: 'Arial Black', Gadget, sans-serif;margin-left:40px;color:#395870;">
    Tell me something about Yourself:
    <br/><br/>
      </b>
     
      <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:50px;">
    Your Name:</b>
    <br/><br/>
     <label>
    <input type="text" style="margin-left:50px;;width:400px;" name="name1"  id="name2" align="absmiddle" required/>
    </label>
    <br/><br/>
    <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:50px;">
   Your Phone Number:</b>
     <br/><br/>
     <label>
    <input type="text" name="phonenumber" style="margin-left:50px;color:#395870;width:400px;"  id="phonenum" align="absmiddle" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" required />
    <br/>
    <span id="error" style="color: Red; display: none;margin-left:50px;">* Input digits (0 - 9)</span>
    </label>
     <script type="text/javascript">
        var specialKeys = new Array();
        specialKeys.push(8); //Backspace
		 specialKeys.push(190);
        function IsNumeric(e) {
            var keyCode = e.which ? e.which : e.keyCode
            var ret = ((keyCode >= 48 && keyCode <= 57 ) || (specialKeys.indexOf(keyCode) != -1));
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
		    </script>
    <br/><br/>
    <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:50px;" >
    Your Email ID:</b>
      <br/>  <br/>
     <label>
    <input type="email" name="email1" style="margin-left:50px;color:#395870;width:400px;"  id="emails" align="absmiddle" placeholder=" Enter a valid email address" required />
    </label>
    <br/><br/>
    <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:50px;">
    Facebook Page Of Your Organization:</b>
      <br/>  <br/>
     <label>
    <input type="text" name="facebookp" style="margin-left:50px;width:400px;" id="facebookp1" align="absmiddle" />
    </label>
  </div>
    
        
       <div id="map-canv" style="position:relative;float:left;height:250px;width:250px;padding:10px;margin-top:60px;margin-left:40px;"></div>
     <div id="map-canvas" style="position:relative;float:left;height:250px;width:250px;padding:10px;margin-top:40px;margin-left:40px;">
   
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
<input type="submit" name="added" class="btn btn-primary btn-large" value="Upload" />
</div>
<br/>
<br/>
	

</form>
<div class="container-fluid">
      <div class="row-fluid">
        <div  class="span3">
         <ul  class="nav nav-list" >
<div class="lineBlack" style="margin-bottom:-38px;height:250px;width:100%;">
			<div class="container">
				<div class="row downLine">
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
    </ul>
    	</div>
		</div>
    </div>		
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
    </body>
    
</html>
<?php

if(isset($_POST['added']))
{
$con=mysqli_connect("172.16.0.57","u1046393_turas","Soamin123@","db1046393_dublin");


$latitude = mysqli_real_escape_string($con, $_POST['lat1']);

$longitude = mysqli_real_escape_string($con, $_POST['lon1']);

$address = mysqli_real_escape_string($con, $_POST['name1']);
$comment = mysqli_real_escape_string($con, $_POST['phonenumber']);
$ans1 = mysqli_real_escape_string($con, $_POST['facebookp']);
$ans2 = mysqli_real_escape_string($con, $_POST['email1']);





 


 
 if(((!empty($latitude))&&(!empty($longitude))))
 {
 $sql="INSERT INTO Address3(Latitude,Longitude,Name,Emailid,facebookfeed,phonenumber)
VALUES ('$latitude', '$longitude','$address', '$ans2','$ans1','$comment')";
 }
if (!mysqli_query($con,$sql)){
  die('Error: ' . mysqli_error($con));
}else{
echo "Data Uploaded !";

}

 
}
?>



