<?php

if(isset($_POST['added']))
{
$con=mysqli_connect("172.16.0.57","u1046393_turas","Soamin123@","db1046393_dublin");


$latitude = mysqli_real_escape_string($con, $_POST['lat1']);

$longitude = mysqli_real_escape_string($con, $_POST['lon1']);

$address = mysqli_real_escape_string($con, $_POST['name1']);
$comment = mysqli_real_escape_string($con, $_POST['phonenumber']);
$ans1 = mysqli_real_escape_string($con, $_POST['facebookp']);
$ans2 = mysqli_real_escape_string($con, $_POST['email']);









 if(((!empty($latitude))&&(!empty($longitude))))
 {
 $sql="INSERT INTO Address3(Latitude,Longitude,Name,Emailid,facebookfeed,phonenumber)
VALUES ('$latitude', '$longitude','$address', '$ans1','$ans2','$comment','$ans1')";

if (!mysqli_query($con,$sql)){
  die('Error: ' . mysqli_error($con));
}else{
echo "Data Uploaded !";
}
}


}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edges">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Connect Reusing Dublin</title>


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
{
	 var win1 = window.open("ViewData.php");
  win1.focus();
  this.close();

}
function back(){
document.getElementById("messages").value = document.getElementById("matter").value + ' '+'for the location' + ' ' + c + ' ' + 'with latitude' + ' ' +  document.getElementById("lat").value +  ' ' + 'and longitude' + ' ' + document.getElementById("lon").value +' ' + 'from' + ' ' + document.getElementById("email").value;


}
function cll()
{

  var win1 = window.open("ViewData.php");
  win1.focus();
  this.close();

}


</script>


 <body onload="initialize()" style="background-color:#f4e851">

     <!-- Fixed navbar -->
     <?php
     require_once('includes/header.php');
     ?>




                       <form   action="notify.php" method="post"  enctype="multipart/form-data" autocomplete="off">






   <div class="container-fluid"  id="works" >

          <div style="width:100%;margin-right:80px;border:none;background-color:#FFF;padding:0px;background-color:transparent;border:none;" class="well sidebar-nav">
           <input type="hidden" name="lat1" ID="lat" size="40"><br><br/><br/>
      <input type="hidden" name="lon1" ID="lon" size="40"><br><br/><br/>
            <div style="margin-left:100px;margin-top:0px;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;color:#960;font-weight:1000;font-size:30px;">
  <?php echo $msg ?>
  </div>
            <font style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;">Tell us your idea for this site and fill out your contact details below.</font><br/>
            <br/>
            <br/>


            <div id="map-canv"   style="height:300px;width:45%;float:left;" ></div>

   <div id="map-canvas"  style="height:300px;width:45%;float:right;" >   </div>
         <br/><br/> <br/>


    <br/>
       <b style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:100%;">
   Name:
     </b>
      <label  style="width:100%;">
    <input type="text"  style="font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;float:left;width:100%;width:100%;" name="name1"  id="name2" align="absmiddle" required/>
    </label>



       <br/>  <br/>
        <b style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:100%;width:100%;">Contact Details:
     </b>
       <input type="text" name="phonenumber" style="font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;float:left;width:100%;width:100%;"  id="phonenum" align="absmiddle" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" required />
    <br/>
    <span id="error" style="color: Red; display: none;margin-left:50px;">* Input digits (0 - 9)</span>
    <label  style="width:100%;">
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

   <b style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:100%;" >
    Email ID:</b>
      <br/>  <br/>
     <label  style="width:100%;">
    <input type="email" name="email" style="font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;float:left;width:100%;width:100%;" id="emails" align="absmiddle" placeholder=" Enter a valid email address" required />
    </label>
    <br/><br/>
    <b style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:100%;">
 <a href="http://wwww.facebook.com/reusingdublin.ie" style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;">Start a conversation about this site on Facebook</a>
      <br/>  <br/>


   </div>

     <div style="margin-top:5px;border:none;">

<input type="button" name="submits"  style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:40%;background-color:#00afc9;color:white;" value="BACK"  onClick="javascript:goback()"/ >
<input type="submit" name="added" style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:44%;background-color:#00afc9;color:white;" value="UPLOAD"/>
</div>

<br/>
<br/>
  <br/>
<br/>





   </div>


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
