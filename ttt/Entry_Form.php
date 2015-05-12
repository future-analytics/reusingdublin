
<?php

if(isset($_POST['added']))
{   
$msg = "";
$con=mysqli_connect("172.16.0.57","u1046393_turas","Soamin123@","db1046393_dublin");
$latitude = mysqli_real_escape_string($con, $_POST['lat1']);
$longitude = mysqli_real_escape_string($con, $_POST['lon1']);
$result = mysqli_query($con,"SELECT * FROM SiteDetails where latitude = '$latitude' AND longitude = '$longitude'");
$num_rows = mysqli_num_rows($result);
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
     
 
if((!empty($num_rows)))
{
	$sql4=("UPDATE  SiteDetails SET latitude = '{$_POST['lat1']}', longitude ='{$_POST['lon1']}', adress = '$address',owner = '$ans1',zoning ='$ans2',planningistory = '$ans3' , size = '$ans4',derelict= '$ans5' ,heritage = '$ans6',desription = '$var',ip = '$ip',Suggesteduses = '$var1' where latitude ='{$_POST['lat1']}' AND longitude = '{$_POST['lon1']}'");
if (!mysqli_query($con,$sql4)){
  die('Error: ' . mysqli_error($con));
  $msg = "Data Not Updated Successfully!"; 
}
else
{
	
$msg = "Data Inserted Successfully!"; 
}
}

 
 if(((!empty($latitude))&&(!empty($longitude)))&&((!empty($address))||(!empty($comment)) ||(empty($num_rows))))
 {
 $sql=("INSERT INTO SiteDetails (latitude,longitude,adress, owner,zoning,planningistory,size,derelict,heritage,desription,ip,Suggesteduses)
VALUES ('$latitude', '$longitude','$address', '$ans1','$ans2','$ans3','$ans4','$ans5','$ans6','$var','$ip','$var1')");

if (!mysqli_query($con,$sql)){
	$msg = "Data Not Updated Successfully!"; 
  die('Error: ' . mysqli_error($con));
  

}

else
{
	
$msg = "Data Inserted Successfully!"; 
}
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
{ 	    
	  alert('Data Uploading..Wait for a Few Seconds!');  

		
             
     	
   
    

     
       
    
      


   
}


    function myFunction()
	{
		
		window.open("Insert5.php",'Ratting',"height=700,width=700,scrollbars=1");
		
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
            <li><a href="http://www.facebook.com" target="_blank"><img style="float:!important;" href="www.facebook.com" src="facebook.png"></img></a></li>
               <li><a href="http://www.twitter.com" target="_blank"><img style="float:!important" href="www.twitter.com"  src="twitter.png"></img></a></li>
           
       
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
            <font style="font-family:'Source Sans Pro', sans-serif;font-size:40px;font-weight:bold;"><b>Add a space</font>
            <br/>
            <br/>
             
            
            <div id="map-canv"   style="height:300px;width:45%;float:left;" ></div> 
            
   <div id="map-canvas"  style="height:300px;width:45%;float:right;" >   </div>
         <br/><br/> <br/>   
    <b style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;float:left;width:100%;margin-left:1%;margin-right:1%;margin-top:4%;">
    Have you an Idea for the Site?
        

         </b>
      
      <label style="width:100%;">
                
       
  <textarea name="comments" id="comments"   style="height:240px;width:100%;float:left;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;width:100%;" wrap="hard"  placeholder="Enter your Idea regarding the site/location here"></textarea> 
  </label> 
   <br/><br/>
            
                        
 <b style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;float:left;width:100%;margin-left:1%;margin-right:1%;">
    Tell us something about this site/location.For example:
    
          <b style="font-family:'Source Sans Pro', sans-serif;font-size:24px;font-weight:regular;float:left;width:100%;color:#036A78;color:#036A78;">
  Why do you think this site is in its current condition?<br/>
  What has the site been previously used for?<br/>
  How long has the site been in this condition?<br/>
  Is there any activity on the site?<br/>
  What is the physical condition of the site?<br/>
  What is happening on this site?<br/>
  What is happening around the site?<br/>
  What are the surrounding buildings used for?<br/>
  Is there access to this site?<br/>
         </b>
       <br/><br/><br/>
  
      <label style="width:100%;">
       
  
    
  <textarea name="comment" id="commen"   style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;float:left;width:100%;height:240px;" wrap="hard"  placeholder="Enter your Idea regarding the site/location here"></textarea> 
  </label> 
    <br/><br/>

      
   
   
    
 


 
 
   <label >
     
    <button onClick="myFunction();" target="_blank" style="background-color:#00afc9;color:#FFF;margin-left:40px;height:50px;width:100%;" >ADD A PHOTO</button>
    </label>
   <br/><br/>
  <b style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;float:left;width:100%;">
     Address
     </b>
      <label style="width:100%;">
      <input type="text" style="width:100%;border:float:right;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;float:left;width:100%;" name="address" id="address" placeholder="Enter a valid address" required />
         </label>
     
      <b style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;float:left;width:100%;width:100%;">
     Ownership Details:

   </b>
     <br/>  
      <label style="width:100%;">
      <input type="text" style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;float:left;width:100%;width:100%;" name="address1" id="address1"  / >
    </label>
     <br/>  
      <b style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;float:left;width:100%;width:100%;">
     Zoning :
     </b>
     <br/>  
      <label style="width:100%;">
      <input type="text" style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;float:left;width:100%;width:100%;" name="address2" id="address2"   / >
    </label >
     <br/>  
      <b style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;float:left;width:100%;width:100%;">
    Planning History:
     </b>
     <br/>  
      <label style="width:100%;">
      
      <input type="text" style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;float:left;width:100%;width:100%;" name="address3" id="address3"   / >
    </label>
     <br/>  
      <b style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;float:left;width:100%;width:100%;">
     Size / Area (Sqm):
     </b>
       
      <label style="width:100%;">
      <input type="text" style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;float:left;width:100%;width:100%;" name="address4" id="address4"  onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"   / >
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
      <b style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;float:left;width:100%;width:100%;">
    Heritage Designation:
     </b>
     
      <label style="width:100%;">
      <input type="text" style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;float:left;width:100%;width:100%;" name="address5" id="address5" / >
    </label>
     
       <b style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;float:left;width:100%;width:100%;">
    Is the site officially derelict? 
     </b>
           <label style="width:100%;">
      <input type="text" style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;float:left;width:100%;width:100%;" name="address6" id="address6"  / >
    </label>
    
       <br/>  <br/>
    
    

       
   
   
 
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
