
<?php
 $msg = "";
if(isset($_POST['added']))
{
	
	
$con=mysqli_connect("172.16.0.57","u1046393_turas","Soamin123@","db1046393_dublin");
$subject = mysqli_real_escape_string($con, $_POST['comment']);
$var = nl2br(htmlspecialchars(stripslashes($subject)));
$latitude = mysqli_real_escape_string($con, $_POST['lat1']);
$longitude = mysqli_real_escape_string($con, $_POST['lon1']);
$date = mysqli_real_escape_string($con, $_POST['date']);
$name1 = mysqli_real_escape_string($con, $_POST['name1']);
  if ( isset( $_SERVER["HTTP_CF_CONNECTING_IP"] ) ) {
     $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
    }
    if ( isset( $_SERVER["HTTP_X_FORWARDED_FOR"] ) ) {
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    if ( isset( $_SERVER["REMOTE_ADDR"] ) ) {
      $ip = $_SERVER['REMOTE_ADDR'];
    }
     
if(!empty($subject))
  {
 $sql="INSERT INTO Address2 (Latitude, Longitude, Answers,aliasname,ipaddress,date)
VALUES ('$latitude', '$longitude', '$var','$name1','$ip','$date')";
  }
if (!mysqli_query($con,$sql)){
die('Error: ' . mysqli_error($con));
	
$msg = "Data Not Posted Successfully!";
}
else
{
	
$msg = "Data Posted Successfully!"; 

}
mysqli_close($con);
}

 


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Share Information</title>

    	
 <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/navbar-fixed-top/navbar-fixed-top.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>
	

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
	button.hover
	{background-color:#06F;
	}
	</style>
  </head><link href="css/bootstrap-responsive.css" rel="stylesheet">
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
{ var win1 = window.open("ViewData.php");
  win1.focus();
	this.close();
	
}
function cll()
{ 
	this.close();
	
}

function show()
{ 	var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();

if(dd<10) {
    dd='0'+dd
} 

if(mm<10) {
    mm='0'+mm
} 

today = mm+'/'+dd+'/'+yyyy;
document.getElementById("date").value = today;


    var x = document.getElementById("commen").value;
	    var y = document.getElementById("name1").value;
	if((x=== '')||(y== ''))
	{
		alert('Blank Data Could not be Inserted!');
	}
	
}
function cll()
{
	this.close();
}
</script>


 <body onload="initialize()" style="background-color:#f4e851">





  	
                       <form   action="share.php" method="post"  enctype="multipart/form-data" autocomplete="off">
             	
 

    <!-- Fixed navbar -->
    <div style="background-color:#00afc9;">
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#00afc9;border:none;width:100%;">
      <div class="container" >
        <div class="navbar-header" >
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a onClick="cll();">  <img src="reusing-drraft-13.04-04.png"  style="margin-top:7%;height:20%;width:20%;border-top:hidden;" /></a>
        </div>
        </div>
        <div class="container">
        <div id="navbar" class="navbar-collapse collapse" style="float:right;margin-top:-4%;">
          <ul class="nav navbar-nav">
            <li><a onClick="cll();" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:19px;">HOME</a></li>
            <li><a href="#works" style="color:#FFF;font-family:'Source Sans Pro', sans-serif;font-size:19px;">LEARN MORE ABOUT THE SITE</a></li>
            <li><a href="http://www.facebook.com" target="_blank"><img style="float:!important;" href="www.facebook.com" src="facebook.png"></img></a></li>
               <li><a href="http://www.twitter.com" target="_blank"><img style="float:!important" href="www.twitter.com"  src="twitter.png"></img></a></li>
           
       
          </ul>
        
        </div><!--/.nav-collapse -->
        </div>
      </div>
    </nav>
   </div>
    
  
   <div class="container-fluid"  id="works" >
   
          <div style="width:100%;margin-right:80px;border:none;background-color:#FFF;padding:0px;background-color:transparent;border:none;" class="well sidebar-nav">
             <input type="hidden" name="lat1" ID="lat" value ="default" size="40"><br><br/><br/>
      <input type="hidden" name="lon1" ID="lon" value ="default" size="40"><br><br/><br/>
            <div style="margin-left:100px;margin-top:0px;font-family: Arial, Helvetica, sans-serif;font-weight:bold;color:#960;font-weight:1000;font-size:30px;">
  <?php echo $msg ?>
  </div> 
            <font style="font-family:'Source Sans Pro', sans-serif;font-size:40px;font-weight:bold;"><b>Share your ideas with us</font>
            <br/>
            <br/>
             
            
            <div id="map-canv"   style="height:300px;width:45%;float:left;" ></div> 
            
   <div id="map-canvas"  style="height:300px;width:45%;float:right;" >   </div>
         <br/><br/> <br/>   

      
     
       <b style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;float:left;width:100%;width:100%;">
      Tell me something about this Site/Location as Suggested Below(Example Questions):
           </b>
    <label style="width:100%;"> 
      <select style="background-color:#FFF;height:10%;width:100%;font-size:28px;font-family:'Source Sans Pro', sans-serif;font-weight:bold;">
    <option value=""  disabled="disabled"  selected="selected">Please see the Example Question List</option>
    <option value="1" >Why do you think this site is in its current condition?</option>
    <option value="2" >What has the site been previously used for?</option>
    <option value="3" >How long has the site been in this condition?</option>
    <option value="4" >Is there any activity on the site?</option>
    <option value="5" >What is the physical condition of the site?</option>
    <option value="6" >What is happening on this site?</option>
      <option value="7" >What is happening around the site?</option>
        <option value="8" >What are the surrounding buildings used for?</option>
          <option value="9" >Is there access to this site?</option>
    
</select>
  
  </label> 
           
      <label style="width:100%;"> 
  <textarea name="comment" id="commen"   style="background-color:#FFF;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;width:100%;height:30%" wrap="hard" required  placeholder="  Enter your Information regarding the Site/Location here"></textarea> 
  </label> 
    
       <br/>  <br/>
    
      <b style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:semibold;width:100%;">
Enter your Alias Name:
      </b>
      <br/> <br/>
<label style="width:100%;"> 
  <input type="text" name="name1" id="name1"  style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;width:100%;"  required />
  </label> 
   <br/><br/>

       
   
   
 
     <div style="margin-top:5px;border:none;">
    
<input type="button" name="submits"  style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;float:left;width:20%;background-color:#00afc9;color:white;" value="BACK"  onClick="javascript:goback()"/ >      
<input type="submit" name="added" style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;float:left;width:24%;background-color:#00afc9;color:white;" value="UPLOAD" onClick="javascript:show()" />
</div>

<br/>
<br/>
  <br/>
<br/>
         
 
    
   </div>
   
   </div>
      <input type="hidden" name="lat1" ID="lat"  size="40"><br><br/><br/>
      <input type="hidden" name="lon1" ID="lon"  size="40"><br><br/><br/>
        <input type="hidden" name="date" ID="date" size="40"><br><br/><br/>
   </form> 
     
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
