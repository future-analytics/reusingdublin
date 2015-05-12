<?php

$subject = $_POST['subjects'];
$message = $_POST['messages'] ;
$mail_from= $_POST['email'] ;
$header = " : <$mail_from>";
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
<title>Notify Reusing Dublin</title>


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

document.body.scroll = "yes"

}

function cll()
{
			var win1 = window.open("View_Form.php", '_blank');
  win1.focus();
  this.close();
}

function goback()
{

		var win1 = window.open("View_Form.php", '_blank');
  win1.focus();
  this.close();
}


</script>

 <body onload="initialize()" style="background-color:#f4e851">



	<?php
	require_once('includes/header.php');
	?>



                       <form   action="notifysss.php" method="post"  enctype="multipart/form-data" autocomplete="off">



<!-- Fixed navbar -->


   <div class="container-fluid"  id="works" style="margin-top:9%;border:none;">
      <input type="hidden" name="lat1" ID="lat" value ="default" size="40"><br><br/><br/>
      <input type="hidden" name="lon1" ID="lon" value ="default" size="40"><br><br/><br/>
          <div style="width:100%;margin-right:80px;border:none;background-color:#FFF;padding:0px;background-color:transparent;border:none;" class="well sidebar-nav">
            <div style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;">
 We have recieved your Information.We will contact with you soon on you email !
  </div>





     <div style="margin-top:5%;border:none;">

<input type="button" name="submits"  style="font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;float:left;width:44%;background-color:#00afc9;color:white;" value="BACK"  onclick="javascript:goback()"/ >

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
