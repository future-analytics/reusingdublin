<?php
require_once('db.php');
$num = $_GET["numb"];
$latitude = $_POST['lat1'];
$longitude = $_POST['lon1'];
$results = mysqli_query($con,"select Location from Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
while($rows = mysqli_fetch_assoc($results))
{
	$resultset[] = $rows;
	$location= $resultset['Location'];

}

if(isset($_POST['added']))
{

$message = $_POST['messages'] ;
$mail_from= $_POST['email'] ;
if($num=="1")
{
	$header = "Let us know: Site ".$location."";
}
else
{
	$header = "Further Info: Site ".$location."";
}

$to = "james.sweeney@futureanalytics.ie";
$send_contact= mail($to,$subject,$message,$header);
if($send_contact)
{

	$message = $_REQUEST['message'];
	$message = "We have recieved your information";
}
else
{
$message = $_REQUEST['message'];
	$message = "Error";
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
    <link rel="icon" href="../../favicon.ico">

    <title>Email Reusing Dublin</title>


    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>


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
</head>
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
	this.close();
	}
function cll()
{
		 var win1 = window.open("ViewData.php");
     win1.focus();
	this.close();
}

</script>

 	<?php
  $bodyBG = '#f4e851';
  require_once('includes/head.php');
	require_once('includes/header.php');
	?>

 <form   action="notifyss.php" method="post"  enctype="multipart/form-data" autocomplete="off">



    <!-- Fixed navbar -->



   <div class="container-fluid"  id="works" >
      <input type="hidden" name="lat1" ID="lat"  size="40"><br><br/><br/>
      <input type="hidden" name="lon1" ID="lon" size="40"><br><br/><br/>
          <div style="width:100%;margin-right:80px;border:none;background-color:#FFF;padding:0px;background-color:transparent;border:none;" class="well sidebar-nav">
            <div style="margin-left:100px;margin-top:0px;font-family: Arial, Helvetica, sans-serif;font-weight:bold;color:#960;font-weight:1000;font-size:30px;">
  <?php echo $msg ?>
  </div>
            <font style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;"><b>Send contact details</font>
            <br/>
            <br/>


            <div id="map-canv"   style="height:300px;width:45%;float:left;" ></div>

   <div id="map-canvas"  style="height:300px;width:45%;float:right;" >   </div>
         <br/><br/> <br/>



       <b style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:100%;width:100%;">
        Email:
           </b>
             <br/>
    <label style="width:100%;">

            <input type="email" style="font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;width:100%;" name="email" id="email" placeholder=" Enter a valid email address" required / >
         </label>
    <br/>

  </label>
     <input type="hidden" name="messages" id="messages" />
       <b style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:100%;">
        Name:
           </b>
             <br/>
      <label style="width:100%;">

      <input type="text" style="font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;width:100%;" name="name" id="name" required />
    </label>
        <br />

     <b style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:100%;">
       Subject:
           </b>
       <br/>
      <label style="width:100%;">
       <textarea style="font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;width:100%;" name="subjects" id="subjects" required / ></textarea>
     </label>

        <br/>
      <b style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:100%;">
         Matter Of Concern:
           </b>
       <br/>

        <label style="width:100%;">
       <textarea style="font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;width:100%;" name="matter" id="matter" required / ></textarea>
    </label>
   <br/>





     <div style="margin-top:5px;border:none;">

<input type="button" name="submits"  style="font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;float:left;width:20%;background-color:#00afc9;color:white;" value="BACK"  onClick="javascript:goback()"/ >
<input type="submit" name="added" style="font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;float:left;width:24%;background-color:#00afc9;color:white;" value="UPLOAD" onClick="javascript:emailres()" />
</div>
<input type="hidden" name="lat1" ID="lat" readonly>
  <input type="hidden"  name="lon1" ID="lon" readonly>
    <input type="hidden"  name="locc" ID="locc" readonly>
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
