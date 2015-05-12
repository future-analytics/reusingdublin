<?php
if(isset($_POST['added']))
{$msg = "";
{
try {
$servername = "172.16.0.57";
$username = "u1046393_turas";
$password = "Soamin123@";
$dbname = "db1046393_dublin";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$latitude =trim($_POST['lat1']);
$longitude = trim($_POST['lon1']);
$address = trim($_POST['address']);
$var8 = nl2br(htmlspecialchars(stripslashes($address)));
$comment = trim($_POST['comment']);
$var = nl2br(htmlspecialchars(stripslashes($comment)));
$ans1 = trim($_POST['address1']);
$var7 = nl2br(htmlspecialchars(stripslashes($ans1)));
$ans2 = trim($_POST['address2']);
$var6 = nl2br(htmlspecialchars(stripslashes($ans2)));
$ans3 = trim($_POST['address3']);
$var5 = nl2br(htmlspecialchars(stripslashes($ans3)));
$ans4 = trim($_POST['address4']);
$var4 = nl2br(htmlspecialchars(stripslashes($ans4)));
$ans5 = trim($_POST['address5']);
$var3 = nl2br(htmlspecialchars(stripslashes($ans5)));
$ans6 =trim($_POST['address6']);
$var2 = nl2br(htmlspecialchars(stripslashes($ans6)));
$ans7 =trim($_POST['comments']);
$var1 = nl2br(htmlspecialchars(stripslashes($ans7)));
$dates =trim($_POST['dateone']);
$ip= trim($_POST['ip']);
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
$stmt = $conn->prepare("insert into SiteDetails(adress ,owner,zoning,planningistory, size,derelict ,heritage ,desription ,ip ,Suggesteduses ,Date_of_Entry, latitude,longitude) values(:address,:owner,:zoning,:planningistory,:size,:derelict,:heritage,:desription,:ip,:Suggesteduses,:dates,:latitude,:longitude)");
$stmt->bindParam(':latitude', $latitude);
$stmt->bindParam(':longitude', $longitude);
$stmt->bindParam(':address', $var8);
$stmt->bindParam(':owner', $var7);
$stmt->bindParam(':zoning', $var6);
$stmt->bindParam(':dates', $dates);
$stmt->bindParam(':planningistory', $var5);
$stmt->bindParam(':size', $var4);
$stmt->bindParam(':derelict', $var3);
$stmt->bindParam(':heritage', $var2);
$stmt->bindParam(':desription', $var);
$stmt->bindParam(':ip', $ip);
$stmt->bindParam(':Suggesteduses', $var1);
$stmt->execute();
 }
$msg = "Data Updated Successfully!";
}
catch(PDOException $e)
{
echo 
$msg = "Error: " . $e->getMessage();
}
$conn = null;
}
}

 


// Check connection
mysqli_close($con);
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

    <title>Enter Information Details</title>

    	
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
{ var today = new Date();
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
document.getElementById("dateone").value = today;
alert('Data Uploading..Wait for a Few Seconds!');  
}
function myFunction()
{
window.open("Insert5.php",'Ratting',"height=700,width=700,scrollbars=1");
}
function myFunction1()
{
window.open("Insert7.php",'Ratting',"height=700,width=700,scrollbars=1");
}
function cll()
{
this.close();
}
</script>
<body onload="initialize()" style="background-color:#f4e851">
<form name="form1"  action="Entry_Form.php" method="post"  enctype="multipart/form-data" autocomplete="off">
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
<li><a href="https://instagram.com/reusingdublin/" target="_blank"><img style="float:!important;" href="https://instagram.com/reusingdublin/" src="instagram19.png"></img></a></li>
<li><a href="reusingdublin@gmail.com" target="_blank"><img style="float:!important;" href="reusingdublin@gmail.com"  src="email131.png"></img></a></li>
<li><a href="http://www.facebook.com/reusingdublin" target="_blank"><img style="float:!important;" href="http://www.facebook.com/reusingdublin" src="facebook.png"></img></a></li>
<li><a href="http://www.twitter.com/reusingdublin" target="_blank"><img style="float:!important" href="http://www.twitter.com/reusingdublin"  src="twitter.png"></img></a></li>
</ul>
</div><!--/.nav-collapse -->
</div>
</div>
</nav>
</div>
    
<div class="container-fluid"  id="works" >
<input type="hidden" name="lat1" ID="lat" value ="default" size="40"><br><br/><br/>
<input type="hidden" name="lon1" ID="lon" value ="default" size="40"><br><br/><br/>
<div style="width:100%;margin-right:80px;border:none;background-color:#FFF;padding:0px;background-color:transparent;border:none;" class="well sidebar-nav">
<div style="margin-left:100px;margin-top:0px;font-family: Arial, Helvetica, sans-serif;font-weight:bold;color:#960;font-weight:1000;font-size:30px;">
  <?php echo $msg ?>
  </div> 
            <font style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;"><b>Add a space</font>
            <br/>
            <br/>
             
            
            <div id="map-canv"   style="height:300px;width:45%;float:left;" ></div> 
            
   <div id="map-canvas"  style="height:300px;width:45%;float:right;" >   </div>
         <br/><br/> <br/>   
    <b style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:100%;margin-left:1%;margin-right:1%;margin-top:4%;">
    Have you an Idea for the site?
        

         </b>
      
      <label style="width:100%;">
                
       
  <textarea name="comments" id="comments"   style="height:240px;width:100%;float:left;font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;width:100%;" wrap="hard"  placeholder="Enter your idea regarding the site/location here"></textarea> 
  </label> 
   <br/><br/>
            
                        
 <b style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:100%;margin-left:1%;margin-right:1%;">
    Tell us something about this site/location. For example:
    
     <b style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:100%;color:#036A78;">
     <br/>
         <select style="width:100%;">
  <option value="1">Why do you think this site is in its current condition?</option>
  <option value="2">What has the site been previously used for?</option>
  <option value="3">How long has the site been in this condition?</option>
  <option value="4">Is there any activity on the site?</option>
  <option value="5">What is the physical condition of the site?</option>
  <option value="6">What is happening on this site?</option>
  <option value="7">What is happening around the site?</option>
  <option value="8">What are the surrounding buildings used for?</option>
  <option value="9">Is there access to this site?</option>
</select>
         </b>
       <br/><br/><br/>
  
      <label style="width:100%;">
       
  
    
  <textarea name="comment" id="commen"   style="font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;float:left;width:100%;height:240px;" wrap="hard"  placeholder="Enter your information regarding the site/location here"></textarea> 
  </label> 
    <br/><br/>

      
   
   
    
 


 
 
   <label >
     
    <button onClick="myFunction(); return false;" target="_blank" style="background-color:#00afc9;color:#FFF;margin-left:40px;height:50px;width:100%;font-family:'Source Sans Pro', sans-serif;font-weight:semibold;font-size:20px;width:300px;" >ADD A PHOTO</button>
    </label>
   <br/><br/>
   
   <label >
     
    <button onClick="myFunction1(); return false;" target="_blank" style="background-color:#00afc9;color:#FFF;margin-left:40px;height:50px;width:100%;font-family:'Source Sans Pro', sans-serif;font-weight:semibold;font-size:20px;width:300px;" >ADD A FILE &nbsp;</button>
    </label>
   <br/><br/>
  <b style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:100%;">
     Address
     </b>
      <label style="width:100%;">
      <input type="text" style="width:100%;border:float:right;font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;float:left;width:100%;" name="address" id="address" placeholder="Enter your information regarding the site/location here" required />
         </label>
     
      <b style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:100%;width:100%;">
     Ownership Details:

   </b>
     <br/>  
      <label style="width:100%;">
      <input type="text" style="font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;float:left;width:100%;width:100%;" name="address1" id="address1"  / >
    </label>
     <br/>  
      <b style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:100%;width:100%;">
     Zoning :
     </b>
     <br/>  
      <label style="width:100%;">
      <input type="text" style="font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;float:left;width:100%;width:100%;" name="address2" id="address2"   / >
    </label >
     <br/>  
      <b style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:100%;width:100%;">
    Planning History:
     </b>
     <br/>  
      <label style="width:100%;">
      
      <input type="text" style="font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;float:left;width:100%;width:100%;" name="address3" id="address3"   / >
    </label>
     <br/>  
      <b style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:100%;width:100%;">
     Size / Area (Sqm):
     </b>
       
      <label style="width:100%;">
      <input type="text" style="font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;float:left;width:100%;width:100%;" name="address4" id="address4"  onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"   / >
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
     
     <br/>  
      <b style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:100%;width:100%;">
    Heritage Designation:
     </b>
     
      <label style="width:100%;">
      <input type="text" style="font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;float:left;width:100%;width:100%;" name="address5" id="address5" / >
    </label>
     
       <b style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:100%;width:100%;">
    Is the site officially derelict? 
     </b>
           <label style="width:100%;">
      <input type="text" style="font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;float:left;width:100%;width:100%;" name="address6" id="address6"  / >
    </label>
    
       <br/>  <br/>
    
    

       
   
   
 
     <div style="margin-top:5px;border:none;">
    
<input type="button" name="submits"  style="font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;float:left;width:20%;background-color:#00afc9;color:white;width:20%;" value="BACK"  onClick="javascript:goback()"/ >      
<input type="submit" name="added" style="font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;float:left;width:24%;background-color:#00afc9;color:white;width:20%;" value="UPLOAD" onClick="javascript:show()" />
</div>

<br/>
<br/>
  <br/>
<br/>
         
 
    
   </div>
   
   </div>
    <input type="hidden" name="dateone" ID="dateone" size="40"><br><br/><br/>
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
