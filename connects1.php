
<?php

 $lat = trim($_POST["lat"]);
  $lon = trim($_POST["lon"]);
  

if(isset($_POST['added']))
{
$con=mysqli_connect("172.16.0.57","u1046393_turas","Soamin123@","db1046393_dublin");



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
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
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

var a = <?php echo $lat ?>;
var b = <?php echo $lon ?>;
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
function cll()
{
	 var win1 = window.open("View_Form.php");
  win1.focus();
  this.close();
	
}



</script>


 <body onload="initialize()" style="background-color:#f4e851">





  	
                       <form   action="notifyssss.php" method="post"  enctype="multipart/form-data" autocomplete="off">
             	
 

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
            <li><a href="http://www.facebook.com/reusingdublin" target="_blank"><img style="float:!important;" href="www.facebook.com" src="facebook.png"></img></a></li>
               <li><a href="http://www.twitter.com/reusingdublin" target="_blank"><img style="float:!important" href="www.twitter.com"  src="twitter.png"></img></a></li>
           
       
          </ul>
        
        </div><!--/.nav-collapse -->
        </div>
      </div>
    </nav>
   </div>
    
  
   <div class="container-fluid"  id="works" >
    
          <div style="width:100%;margin-right:80px;border:none;background-color:#FFF;padding:0px;background-color:transparent;border:none;" class="well sidebar-nav">
          <input type="hidden" name="lat1" ID="lat" size="40"><br><br/><br/>
      <input type="hidden" name="lon1" ID="lon" size="40"><br><br/><br/>
            <div style="margin-left:100px;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;color:#960;">
  <?php echo $msg ?>
  </div> 
            <font style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;"> Tell us a little about yourself!</font><br/>
            <font style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;"><b>
             Once you do, why not post a note to tell everyone your vision for the lot? And be sure to post updates on your progress!When you fill out this form, you will receive notifications when other people show interest in growing community on this lot  or add notes or a picture.
             </font>
            <br/>
            
            <br/>
             
            
            <div id="map-canv"   style="height:300px;width:45%;float:left;" ></div> 
            
   <div id="map-canvas"  style="height:300px;width:45%;float:right;" >   </div>
         <br/><br/> <br/>   

      
 
    
    <br/><br/>
       <b style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:100%;">
   Your Name:
     </b>
      <label  style="width:100%;">
    <input type="text"  style="font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;float:left;width:100%;" name="name1"  id="name2" align="absmiddle" required/>
    </label>
           
     
    
       <br/>  <br/>
        <b style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:100%;">Your Phone Number:
     </b>
       <input type="text" name="phonenumber" style="font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;float:left;width:100%;"  id="phonenum" align="absmiddle" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" required />
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
    Your Email ID:</b>
      <br/>  <br/>
     <label  style="width:100%;">
    <input type="email" name="email1" style="font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;float:left;width:100%;" id="emails" align="absmiddle" placeholder=" Enter a valid email address" required />
    </label>
    <br/><br/>
    <b style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:100%;">
    Facebook Page Of Your Organization:</b>
      <br/>  <br/>
   <label  style="width:100%;">
    <input type="text" name="facebookp" style="font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;float:left;width:100%;width:100%;" id="facebookp1" align="absmiddle" />
    </label>

       
   
   
 
     <div style="margin-top:5px;border:none;">
    
<input type="button" name="submits"  style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:regular;float:left;width:42%;background-color:#00afc9;color:white;" value="BACK"  onClick="javascript:goback()"/ >      
<input type="submit" name="added" style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:regular;float:left;width:44%;background-color:#00afc9;color:white;" value="UPLOAD"/>
</div>

<br/>
<br/>
  <br/>
<br/>
         
 
    
   </div>
   
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
