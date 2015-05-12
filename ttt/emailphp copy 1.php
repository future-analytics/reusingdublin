

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Email Reusing Dublin</title>
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
<script type="text/javascript">
var map;
var panorama;
var x = 1;
var sv = new google.maps.StreetViewService();
var i ;
var c ;
function initialize() {

var a = sessionStorage.getItem("lll");
var b = sessionStorage.getItem("llll");
var locc = sessionStorage.getItem("locat");
document.getElementById("locc").value = locc;
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

function emailres()
{  document.getElementById("messages").value = 'Matter ' + ':' + document.getElementById("matter").value + ',' + 'Latitude' + ':' +  document.getElementById("lat").value +  ',' + 'Longitude' + ' :' + document.getElementById("lon").value +',' + 'Email' + ':' + document.getElementById("email").value + ',' + 'Name of the User ' + ':' + document.getElementById('name').value + ',' +'Location ' + ':' + document.getElementById("locc").value ;
 if(document.getElementById("matter").value == "")
 {
	 
	  alert('Data Not Complete!');
	 	
 }
 
}

function goback()
{
	 var win1 = window.open("ViewData.php");
  win1.focus();
	this.close();}


</script>
<body onload="initialize()">

<div>
    
     		
<div>

 <div id="home" style="margin-top:-60px;">
    	<div class="headerLine">
	<div class="container" >
			<div class="row">
				<div class="logo col-md-4">
					<div>
						<a href="#">
							<img src="images/logo.png">
						</a>
					</div>
                 
				</div>
         
		</div>
                  <div class="col-md-8">
                   <div clas="navmenu" style="float:right">
			
														<a href="ViewData.php" class="hhh"  style="color:white;margin-right:50%;font-weight:200">HOME</a>
                         

					
			
			</div>    
           </div>  
     
        		</div>
    
    
    <div class="container">
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
                       	
    <form action="notifysss.php" method="post" enctype="multipart/form-data" autocomplete="off">
  
      <div class="container-fluid">
      <div class="row-fluid">
        <div  class="span3">
         <ul  class="nav nav-list" >
<div style="margin-left:1%;width:80%;float:left;margin-right:1%;" class="well sidebar-nav" > 
<div style="float:left;width:60%;" >
 <div style="margin-left:40px;">
 <b style="font-size:18px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-top:100px;" align="left">SEND CONTACT DETAILS<br /><br /></b>
 </div>
  <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:40px;border:thin;">
    Email:
     </b>
     <br/>  <br/>
     <label>
       <input type="email" style="margin-left:40px;width:400px;border:solid 1px;" name="email" id="email" placeholder=" Enter a valid email address" required / >
         </label>
    <br/><br/>
   <input type="hidden" name="messages" id="messages" />
   <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:40px;border:thin;">
     Name:
     </b>
       <br/>  <br/>
     <label>
      <input type="text" style="margin-left:40px;color:#395870;border:solid 1px;width:400px;" name="name" id="name" required />
    </label>
        <br /><br />
    <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:40px;border:thin;">
    Subject:
      <br/>  <br/>
    </b>
    <label>
       <textarea style="margin-left:40px;height:100px;background-color:#FFF;border:solid 1px;width:400px;" name="subjects" id="subjects" required / ></textarea>
     </label>
      <br /><br />
    <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:40px;border:thin;">
    Matter Of Concern:
      <br/>  <br/>
    </b>
    <label>
       <textarea style="margin-left:40px;height:100px;background-color:#FFF;border:solid 1px;width:400px;" name="matter" id="matter" required / ></textarea>
    </label>
   <br/><br/> 
    </div> 
    <div style="float:right;width:28%;margin-right:1%;">
     <div id="map-canv" style="position:relative;float:left;height:230px;width:100%;padding:10px;margin-top:60px;"></div>
 
     <div id="map-canvas" style="position:relative;float:left;height:230px;width:100%;padding:10px;margin-top:40px;">
   
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
<input type="submit" name="added" class="btn btn-primary btn-large" value="Upload" onClick="javascript:emailres()" />
</div>

<br/>
<br/>
  <br/>
<br/>
<input type="hidden" name="lat1" ID="lat" readonly>
  <input type="hidden"  name="lon1" ID="lon" readonly>
    <input type="hidden"  name="locc" ID="locc" readonly>
</form>  



</body>
<div class="container-fluid">
      <div class="row-fluid">
        <div  class="span3">
         <ul  class="nav nav-list" >
<div class="lineBlack" style="margin-bottom:-38px;height:430px;width:100%;">
			<div class="container">
				<div class="row downLine">
                	<div  class="logo col-md-4" style="width:100%;">
				
						<a href="#">
							<img src="images/Eu_logo1.png" style="margin-left:100px">
						</a>
					
				</div>
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
 
