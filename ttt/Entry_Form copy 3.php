

<?php

if(isset($_POST['added']))
{   $msg = "";
$con=mysqli_connect("172.16.0.57","u1046393_turas","Soamin123@","db1046393_dublin");


$latitude = mysqli_real_escape_string($con, $_POST['lat1']);

$longitude = mysqli_real_escape_string($con, $_POST['lon1']);

$address = mysqli_real_escape_string($con, $_POST['address']);
$comment = mysqli_real_escape_string($con, $_POST['comment']);
$var = nl2br(htmlspecialchars(stripslashes($comment)));
$ans1 = mysqli_real_escape_string($con, $_POST['address1']);
$ans2 = mysqli_real_escape_string($con, $_POST['address2']);
$ans3 = mysqli_real_escape_string($con, $_POST['address3']);
$ans4 = mysqli_real_escape_string($con, $_POST['address4']);
$ans5 = mysqli_real_escape_string($con, $_POST['address5']);
$ans6 = mysqli_real_escape_string($con, $_POST['address6']);
$ans7 = mysqli_real_escape_string($con, $_POST['comments']);
$var1 = nl2br(htmlspecialchars(stripslashes($ans7)));

 $ip= mysqli_real_escape_string($con, $_POST['ip']);
 

    if ( isset( $_SERVER["HTTP_CF_CONNECTING_IP"] ) ) {
     $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
    }
    if ( isset( $_SERVER["HTTP_X_FORWARDED_FOR"] ) ) {
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    if ( isset( $_SERVER["REMOTE_ADDR"] ) ) {
      $ip = $_SERVER['REMOTE_ADDR'];
    }
     
 


 
 if(((!empty($latitude))&&(!empty($longitude)))&&((!empty($address))||(!empty($comment))))
 {
 $sql=("INSERT INTO SiteDetails (latitude,longitude,adress, owner,zoning,planningistory,size,derelict,heritage,desription,ip,Suggesteduses)
VALUES ('$latitude', '$longitude','$address', '$ans1','$ans2','$ans3','$ans4','$ans5','$ans6','$var','$ip','$var1')");

if (!mysqli_query($con,$sql)){
	$msg = "Data Not Updated Successfully!"; 
  die('Error: ' . mysqli_error($con));
  

}

else
{
	
$msg = "Data Updated Successfully!"; 
}
}

 
}

 


// Check connection
mysqli_close($con);
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
c = sessionStorage.getItem("locat");
document.getElementById("lat").value = a;
document.getElementById("lon").value = b;
if(b.length<6)
{
	alert('Invalid Latitude and Longitude');
	document.getElementById("lon").value = "";
	document.getElementById("lat").value = "";
}
val = parseFloat(b);
if(isNaN(val))
{document.getElementById("lon").value = "";
alert('Invalid Latitude and Longitude');
}
else
{
	document.getElementById("lon").value = b;
}
   document.getElementById("lat").value = a;
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

function show()
{ 	    
	  alert('Data Uploading..Wait for a Few Seconds!');  

		
             
     	
   
    

     
       
    
      


   
}
   function cll()
	{
		this.close();
		
	}





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
			
														<a href="index.php" class="hhh" onclick="cll();" style="color:white;margin-right:50%;font-weight:200">HOME</a>
                         

					
			
			</div>    
           </div>  
     
        		</div>
    
    
    <div class="container">
			<div class="row">
                   
                <div class="col-sm-6">
					<p style="color:#FFF;">A template for change </br><span style="font-weight:bold">Pilot project: North Inner City Dublin.</span> </p></div>
				  
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
                       	
                       <form name="form1"  action="Entry_Form.php" method="post"  enctype="multipart/form-data" autocomplete="off">
             	
   <div style="margin-left:100px;margin-top:0px;font-family: Arial, Helvetica, sans-serif;font-weight:bold;color:#960;font-weight:1000;font-size:30px;">
  <?php echo $msg ?>
  </div>
      <div class="container-fluid">
      <div class="row-fluid">
        <div  class="span3">
         <ul  class="nav nav-list" >
         <div style="margin-left:1%;width:94%;float:left;margin-top:100px;margin-right:1%;" class="well sidebar-nav" > 
<div style="float:left;width:66%;" >

<b style="font-size:18px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;" align="left">Add Entry :<br /><br /><br /></b>
 <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:60px;">
    Have you an Idea for the Site?
        <br/>
         </b>
      <br/>
      <label>
       
       
  <textarea name="comments" id="comments"   style="margin-left:470px;background-color:#FFF;height:240px;width:395px;float:left;margin-left:40px;" wrap="hard"  placeholder="Enter your Idea regarding the Site/Location here"></textarea> 
  </label> 
   <br/><br/>
      
     <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:60px;">
    Tell me something about this Site/Location as Suggested Below(Example Questions):
        <br/>
         </b>
      <br/>
      <label>
       
   <textarea name="questions" id="question1" style="margin-left:40px;background-color:#FFF;height:240px;width:400px;" wrap="hard" readonly>
  
  Why do you think this site is in its current condition?
  What has the site been previously used for?
  How long has the site been in this condition?
  Is there any activity on the site?
  What is the physical condition of the site?
  What is happening on this site?
  What is happening around the site?
  What are the surrounding buildings used for?
  Is there access to this site?
    </textarea> 
    
  <textarea name="comment" id="commen"   style="margin-left:470px;background-color:#FFF;height:240px;width:395px;float:left;margin-top:-240px;margin-right:2%;" wrap="hard"  placeholder="Enter your Information regarding the Site/Location here"></textarea> 
  </label> 
   <br/><br/>

     <p><a href="Insert2.php"  style="color:#FFF;margin-left:40px;" class="btn btn-primary btn-large">Add a Photo &raquo;</a></p>
    
   <br/><br/>
  <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:40px;border:thin;">
     Address:
     </b>
     <br/>  <br/>
      <label>
      <input type="text" style="margin-left:40px;;width:450px;border:solid 1px;" name="address" id="address" placeholder=" Enter a valid address" required / >
    </label>
     <br/>  <br/>
      <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:40px;border:thin;">
     Ownership Details:
     </b>
     <br/>  <br/>
      <label>
      <input type="text" style="margin-left:40px;;width:450px;border:solid 1px;" name="address1" id="address1"  / >
    </label>
     <br/>  <br/>
      <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:40px;border:thin;">
     Zoning :
     </b>
     <br/>  <br/>
      <label>
      <input type="text" style="margin-left:40px;;width:450px;border:solid 1px;" name="address2" id="address2"   / >
    </label>
     <br/>  <br/>
      <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:40px;border:thin;">
    Planning History:
     </b>
     <br/>  <br/>
      <label>
      
      <input type="text" style="margin-left:40px;;width:450px;border:solid 1px;" name="address3" id="address3"   / >
    </label>
     <br/>  <br/>
      <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:40px;border:thin;">
     Size / Area (Sqm):
     </b>
     <br/>  <br/>
      <label>
      <input type="text" style="margin-left:40px;;width:450px;border:solid 1px;" name="address4" id="address4"  onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"   / >
       <span id="error" style="color: Red; display: none">* Input digits (0 - 9)</span>
    </label>
     <script type="text/javascript">
        var specialKeys = new Array();
        specialKeys.push(8); //Backspace
		 specialKeys.push(190);
        function IsNumeric(e) {
            var keyCode = e.which ? e.which : e.keyCode
            var ret = ((keyCode >= 48 && keyCode <= 57 || keyCode == 46 ) || (specialKeys.indexOf(keyCode) != -1));
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
    </script>
     
     <br/>  <br/>
      <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:40px;border:thin;">
    Heritage Designation:
     </b>
     <br/>  <br/>
      <label>
      <input type="text" style="margin-left:40px;;width:450px;border:solid 1px;" name="address5" id="address5" / >
    </label>
     <br/>  <br/>
       <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:40px;border:thin;">
    Is the site officially derelict? 
     </b>
     <br/>  <br/>
      <label>
      <input type="text" style="margin-left:40px;;width:450px;border:solid 1px;" name="address6" id="address6"  / >
    </label>
    
       <br/>  <br/>
    
    

       
   
   
 
    </div> 
    <div style="float:left;width:28%;margin-left:1%;">
     <div id="map-canv" style="position:relative;float:left;height:250px;width:100%;padding:10px;margin-top:60px;"></div>
 
     <div id="map-canvas" style="position:relative;float:left;height:250px;width:100%;padding:10px;margin-top:40px;">
   
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
           <input type="hidden" name="lat1" width="50" height="10" ID="lat" readonly>
  <input type="hidden"  name="lon1" ID="lon" width="50" height="10" readonly>
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
 
