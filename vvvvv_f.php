<?php
$con=mysqli_connect("172.16.0.57","u1046393_turas","Soamin123@","db1046393_dublin");
$result1 = mysqli_query($con,"SELECT * FROM Address2");
while($row = mysqli_fetch_assoc($result1))
{
	$data[] = $row;
	
}

$result2 = mysqli_query($con,"SELECT * FROM SiteDetails");
while($row1 = mysqli_fetch_assoc($result2))
{
	$data1[] = $row1;
	
}
$result3 = mysqli_query($con,"SELECT * FROM photo");
while($row2 = mysqli_fetch_assoc($result3))
{
	$data2[] = $row2;
	
}
  
    $result4 = mysqli_query($con,"SELECT * FROM file");
while($row3 = mysqli_fetch_assoc($result4))
{
	$data3[] = $row3;
	
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

    <title>Update Information Details</title>

    	
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
var longitudes;
var latitudes;

var a;
var b;
var filename1;
var dr = [];
var er = [];
	var arrr = [];
	var brrr = [];
	var crrr = [];
	var drrr = [];
	var errr = [];
	var frrr = [];
	var frrr1 = [];
	var frrr2 = [];
	var frrr3 = [];
	var frrr4 = [];
	var frrr5 = [];
	var frrr6 = [];
	var frrr7 = [];
	var frrr8 = [];
	var frrr9 = [];
	var frrr10 = [];
	var frrr11 = [];
	var frrr12 = [];
	var frrr13 = [];
	var frrr14 = [];
	var frrr15 = [];
	var frrr16 = [];
	var frrr17 = [];
	var frrr18 = [];
	var frrr19 = [];
	var frrr20 = [];
	var frrr21 = [];
	var frrr22 = [];
	var frrr23 = [];
	var frrr24 = [];
	var grrr = [];
	var grrr1 = [];
	var grrr2 = [];
	var grrr3 = [];
	var grrr4 = [];
	var grrr5 = [];
	var grrr6 = [];
	var grrr7 = [];
	var grrr8 = [];
	var grrr9 = [];
	var grrr10 = [];
	var grrr11 = [];
	var grrr12 = [];
	var grrr13 = [];
	var grrr14 = [];
	var grrr15 = [];
	var grrr16 = [];
	var grrr17 = [];
	var grrr18 = [];
	var grrr19 = [];
	var grrr20 = [];
	var grrr21 = [];
	var grrr22 = [];
	var grrr23 = [];
	var grrr24 = [];
    var trrr = [];
	var hrrr = [];
	var irrr = [];
	var jrrr = [];
	var arr = [];
	var drr = [];
	var err = [];
	var frr = [];
	var grr = [];
	var brr = [];
	var c = [];
	var ema = [];
var dates = [];
var v1 = [];
var v2 = [];
var v3 = [];
var lattts = [];
var lonnns  = [];
		
function initialize() {


 <?php 
foreach($data as $marker)
{
	$lat  = $marker['Latitude']; 
    $lon  = $marker['Longitude']; 
    $ans  = $marker['Answers']; 
	$email =  $marker['aliasname'];
	$date =  $marker['date'];

	
?>

var lat  = <?php echo $lat;?>;
    arr.push(lat);

	  var lon  = <?php echo $lon;?>;
	
     brr.push(lon);
	  var ans  = "<?php echo $ans;?>";
	 
     c.push(ans);
	 var email = "<?php echo $email;?>";
	 ema.push(email);
	 	 var date = "<?php echo $date;?>";
	   dates.push(date);
<?php
}

?>
<?php
foreach($data3 as $marker3)
{   $lats = $marker3['latitude'];
    $lons = $marker3['longitude'];
	$filenamepic =  $marker3['doc1'];
	$filenamepic1 =  $marker3['doc2'];
	$filenamepic2 =  $marker3['doc3'];
	$filenamepic3 =  $marker3['doc4'];
	$filenamepic4 =  $marker3['doc5'];
	$filenamepic5 =  $marker3['doc6'];
	$filenamepic6 =  $marker3['doc7'];
	$filenamepic7 =  $marker3['doc8'];
	$filenamepic8 =  $marker3['doc9'];
	$filenamepic9 =  $marker3['doc10'];
	$filenamepic10 =  $marker3['doc11'];
	$filenamepic11 =  $marker3['doc12'];
	$filenamepic12 =  $marker3['doc13'];
	$filenamepic13 =  $marker3['doc14'];
	$filenamepic14 =  $marker3['doc15'];
	$filenamepic15 =  $marker3['doc16'];
	$filenamepic16 =  $marker3['doc17'];
	$filenamepic17 =  $marker3['doc18'];
	$filenamepic18 =  $marker3['doc19'];
	$filenamepic19 =  $marker3['doc20'];
	$filenamepic20 =  $marker3['doc21'];
	$filenamepic21 =  $marker3['doc22'];
	$filenamepic22 =  $marker3['doc23'];
	$filenamepic23 =  $marker3['doc24'];
	$filenamepic24 =  $marker3['doc25'];


?>
var latts = "<?php echo $lats;?>";
dr.push(latts);
var lonns = "<?php echo $lons;?>";
er.push(lonns);
var filenamepic = "<?php echo $filenamepic;?>";
frrr.push(filenamepic);
var filenamepic2 = "<?php echo $filenamepic2;?>";
frrr2.push(filenamepic2);
var filenamepic1 = "<?php echo $filenamepic1;?>";
frrr1.push(filenamepic1);
var filenamepic3 = "<?php echo $filenamepic3;?>";
frrr3.push(filenamepic3);
var filenamepic4 = "<?php echo $filenamepic4;?>";
frrr4.push(filenamepic4);
var filenamepic5 = "<?php echo $filenamepic5;?>";
frrr5.push(filenamepic5);
var filenamepic6 = "<?php echo $filenamepic6;?>";
frrr6.push(filenamepic6);
var filenamepic7 = "<?php echo $filenamepic7;?>";
frrr7.push(filenamepic7);
var filenamepic8 = "<?php echo $filenamepic8;?>";
frrr8.push(filenamepic8);
var filenamepic9 = "<?php echo $filenamepic9;?>";
frrr9.push(filenamepic9);
var filenamepic10 = "<?php echo $filenamepic10;?>";
frrr10.push(filenamepic10);
var filenamepic11 = "<?php echo $filenamepic11;?>";
frrr11.push(filenamepic11);
 var filenamepic12 = "<?php echo $filenamepic12;?>";
frrr12.push(filenamepic12);
 var filenamepic13 = "<?php echo $filenamepic13;?>";
frrr13.push(filenamepic13);
var filenamepic14 = "<?php echo $filenamepic14;?>";
frrr14.push(filenamepic14);
var filenamepic15 = "<?php echo $filenamepic15;?>";
frrr15.push(filenamepic15);
var filenamepic16 = "<?php echo $filenamepic16;?>";
frrr16.push(filenamepic16);
var filenamepic17 = "<?php echo $filenamepic17;?>";
frrr17.push(filenamepic17);
var filenamepic18 = "<?php echo $filenamepic18;?>";
frrr18.push(filenamepic18);
var filenamepic19 = "<?php echo $filenamepic19;?>";
frrr19.push(filenamepic19);
var filenamepic20 = "<?php echo $filenamepic20;?>";
frrr20.push(filenamepic20);
var filenamepic21 = "<?php echo $filenamepic21;?>";
frrr21.push(filenamepic21);
var filenamepic22 = "<?php echo $filenamepic22;?>";
frrr22.push(filenamepic22);
var filenamepic23 = "<?php echo $filenamepic23;?>";
frrr23.push(filenamepic23);
var filenamepic24 = "<?php echo $filenamepic24;?>";
frrr24.push(filenamepic24);
<?php
}
?>
 
<?php 
foreach($data1 as $marker1)
{
	$lats  = $marker1['latitude']; 
    $lons  = $marker1['longitude']; 
    $filename  = $marker1['Docname'];
	$filename1  = $marker1['filename1']; 
	$filename2  = $marker1['filename2']; 
	$filename3  = $marker1['filename3']; 
	$filename4  = $marker1['filename4']; 
	$filename5  = $marker1['filename5']; 
	$filename6  = $marker1['filename6']; 
	$filename7  = $marker1['filename7']; 
	$filename8  = $marker1['filename8']; 
	$filename9  = $marker1['filename9']; 
	$filename10  = $marker1['filename10']; 
	$filename11  = $marker1['filename11']; 
	$filename12  = $marker1['filename12']; 
	$filename13  = $marker1['filename13']; 
	$filename14  = $marker1['filename14']; 
	$filename15  = $marker1['filename15']; 
	$filename16  = $marker1['filename16']; 
	$filename17  = $marker1['filename17']; 
	$filename18  = $marker1['filename18']; 
	$filename19  = $marker1['filename19']; 
	$filename20  = $marker1['filename20']; 
	$filename21  = $marker1['filename21']; 
	$filename22  = $marker1['filename22']; 
	$filename23  = $marker1['filename23']; 
	$filename24  = $marker1['filename24'];
	$lat  = $marker1['latitude']; 
    $lon  = $marker1['longitude']; 
    $email  = $marker1['adress']; 
	$owners  = $marker1['owner']; 
	$zon =  $marker1['zoning'];
	$plan =  $marker1['planningistory'];
	$size =  $marker1['size'];
	$heritage =  $marker1['heritage'];
	$derelict =  $marker1['derelict'];
	$desription =  $marker1['desription'];
	$suggesteduses =  $marker1['Suggesteduses'];
	$video1 =  $marker1['video1'];
	$video2 =  $marker1['video2'];
	$video3 =  $marker1['video3'];

?>

var lats  = "<?php echo $lats;?>";
drr.push(lats);
var lons  = "<?php echo $lons;?>";
err.push(lons);
var filename  = "<?php echo $filename;?>";
frrr.push(filename);
var filename1  = "<?php echo $filename1;?>";
frrr1.push(filename1);
var filename2  = "<?php echo $filename2;?>";
frrr2.push(filename2);
var filename3  = "<?php echo $filename3;?>";
frrr3.push(filename3);
var filename4  = "<?php echo $filename4;?>";
frrr4.push(filename4);
var filename5  = "<?php echo $filename5;?>";
frrr5.push(filename5);
var filename6  = "<?php echo $filename6;?>";
frrr6.push(filename6);
var filename7  = "<?php echo $filename7;?>";
frrr7.push(filename7);
var filename8  = "<?php echo $filename8;?>";
frrr8.push(filename8);
var filename9  = "<?php echo $filename9;?>";
frrr9.push(filename9);
var filename10  = "<?php echo $filename10;?>";
frrr10.push(filename10);
var filename11  = "<?php echo $filename11;?>";
frrr11.push(filename11);
var filename12  = "<?php echo $filename12;?>";
frrr12.push(filename12);
var filename13  = "<?php echo $filename13;?>";
frrr13.push(filename13);
var filename14  = "<?php echo $filename14;?>";
frrr14.push(filename14);
var filename15  = "<?php echo $filename15;?>";
frrr15.push(filename15);
var filename16  = "<?php echo $filename16;?>";
frrr16.push(filename16);
var filename17  = "<?php echo $filename17;?>";
frrr17.push(filename17);
var filename18  = "<?php echo $filename18;?>";
frrr18.push(filename18);
var filename19  = "<?php echo $filename19;?>";
frrr19.push(filename19);
var filename20  = "<?php echo $filename20;?>";
frrr20.push(filename20);
var filename21  = "<?php echo $filename21;?>";
frrr21.push(filename21);
var filename22  = "<?php echo $filename22;?>";
frrr22.push(filename22);
var filename23  = "<?php echo $filename23;?>";
frrr23.push(filename23);
var filename24  = "<?php echo $filename24;?>";
frrr24.push(filename24);
var lati  = "<?php echo $lat;?>";
arrr.push(lati);
var longi  = "<?php echo $lon;?>";
brrr.push(longi);
var emails  = "<?php echo $email;?>";
crrr.push(emails);
var zone = "<?php echo $zon;?>";
drrr.push(zone);
var planning = "<?php echo $plan;?>";
errr.push(planning);
var size = "<?php echo $size;?>";
frr.push(size);
var heritages = "<?php echo $heritage;?>";
grr.push(heritages);
var derelicts = "<?php echo $derelict;?>";
hrrr.push(derelicts);
var desriptions = "<?php echo $desription;?>";
irrr.push(desriptions);
var owners = "<?php echo $owners;?>";
jrrr.push(owners);
var suggesteduses = "<?php echo $suggesteduses;?>";
trrr.push(suggesteduses);
var video1 = "<?php echo $video1;?>";
v1.push(video1);
var video2 = "<?php echo $video2;?>";
v2.push(video2);
var video3 = "<?php echo $video3;?>";
v3.push(video3);


<?
}
?>
<?php
foreach($data2 as $marker2)
{   $lats = $marker2['latitude'];
    $lons = $marker2['longitude'];
	$filenamepic =  $marker2['Picname'];
	$filenamepic1 =  $marker2['picname1'];
	$filenamepic2 =  $marker2['picname2'];
	$filenamepic3 =  $marker2['picname3'];
	$filenamepic4 =  $marker2['picname4'];
	$filenamepic5 =  $marker2['picname5'];
	$filenamepic6 =  $marker2['picname6'];
	$filenamepic7 =  $marker2['picname7'];
	$filenamepic8 =  $marker2['picname8'];
	$filenamepic9 =  $marker2['picname9'];
	$filenamepic10 =  $marker2['picname10'];
	$filenamepic11 =  $marker2['picname11'];
	$filenamepic12 =  $marker2['picname12'];
	$filenamepic13 =  $marker2['picname13'];
	$filenamepic14 =  $marker2['picname14'];
	$filenamepic15 =  $marker2['picname15'];
	$filenamepic16 =  $marker2['picname16'];
	$filenamepic17 =  $marker2['picname17'];
	$filenamepic18 =  $marker2['picname18'];
	$filenamepic19 =  $marker2['picname19'];
	$filenamepic20 =  $marker2['picname20'];
	$filenamepic21 =  $marker2['picname21'];
	$filenamepic22 =  $marker2['picname22'];
	$filenamepic23 =  $marker2['picname23'];
	$filenamepic24 =  $marker2['picname24'];


?>
var latts = "<?php echo $lats;?>";
lattts.push(latts);
var lonns = "<?php echo $lons;?>";
lonnns.push(lonns);
var filenamepic = "<?php echo $filenamepic;?>";
grrr.push(filenamepic);
var filenamepic2 = "<?php echo $filenamepic2;?>";
grrr2.push(filenamepic2);
var filenamepic1 = "<?php echo $filenamepic1;?>";
grrr1.push(filenamepic1);
var filenamepic3 = "<?php echo $filenamepic3;?>";
grrr3.push(filenamepic3);
var filenamepic4 = "<?php echo $filenamepic4;?>";
grrr4.push(filenamepic4);
var filenamepic5 = "<?php echo $filenamepic5;?>";
grrr5.push(filenamepic5);
var filenamepic6 = "<?php echo $filenamepic6;?>";
grrr6.push(filenamepic6);
var filenamepic7 = "<?php echo $filenamepic7;?>";
grrr7.push(filenamepic7);
var filenamepic8 = "<?php echo $filenamepic8;?>";
grrr8.push(filenamepic8);
var filenamepic9 = "<?php echo $filenamepic9;?>";
grrr9.push(filenamepic9);
var filenamepic10 = "<?php echo $filenamepic10;?>";
grrr10.push(filenamepic10);
var filenamepic11 = "<?php echo $filenamepic11;?>";
grrr11.push(filenamepic11);
 var filenamepic12 = "<?php echo $filenamepic12;?>";
grrr12.push(filenamepic12);
 var filenamepic13 = "<?php echo $filenamepic13;?>";
grrr13.push(filenamepic13);
var filenamepic14 = "<?php echo $filenamepic14;?>";
grrr14.push(filenamepic14);
var filenamepic15 = "<?php echo $filenamepic15;?>";
grrr15.push(filenamepic15);
var filenamepic16 = "<?php echo $filenamepic16;?>";
grrr16.push(filenamepic16);
var filenamepic17 = "<?php echo $filenamepic17;?>";
grrr17.push(filenamepic17);
var filenamepic18 = "<?php echo $filenamepic18;?>";
grrr18.push(filenamepic18);
var filenamepic19 = "<?php echo $filenamepic19;?>";
grrr19.push(filenamepic19);
var filenamepic20 = "<?php echo $filenamepic20;?>";
grrr20.push(filenamepic20);
var filenamepic21 = "<?php echo $filenamepic21;?>";
grrr21.push(filenamepic21);
var filenamepic22 = "<?php echo $filenamepic22;?>";
grrr22.push(filenamepic22);
var filenamepic23 = "<?php echo $filenamepic23;?>";
grrr23.push(filenamepic23);
var filenamepic24 = "<?php echo $filenamepic24;?>";
grrr24.push(filenamepic24);
<?php
}
?>


comments();
a = sessionStorage.getItem("lll");
b = sessionStorage.getItem("llll");
document.getElementById('lat').value = a;
document.getElementById('lon').value = b;
var loc = sessionStorage.getItem("locat");
var desc = sessionStorage.getItem("descrip");
	
 document.body.scroll = "yes";



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

function comments()
{
var ll =  document.getElementById('lat').value;
var looo = document.getElementById('lon').value;

for (var g = 0; g < arrr.length ;g++) {
var latt = arrr[g];
var lonn = brrr[g];
	
 if (latt === ll && lonn === looo) {


	//document.getElementById("addres1").innerHTML = crrr[g];   

	//document.getElementById("addres3").innerHTML = drrr[g]; 
	//document.getElementById("addres2").innerHTML = jrrr[g]; 
	//document.getElementById("addres4").innerHTML = errr[g]; 
	//document.getElementById("addres5").innerHTML = frrr[g]; 
	//document.getElementById("addres6").innerHTML= grrr[g]; 
	//document.getElementById("addres7").innerHTML = hrrr[g] ; 
	//document.getElementById("addres8").innerHTML = irrr[g] ; 

	
	//	document.getElementById("demos").attributes.href = 'images/' + filepic;



	//document.getElementById("demoos").attributes.href = 'images/' + docfile;

  }
}
	var ll =  document.getElementById('lat').value;
var looo = document.getElementById('lon').value;

for (var y = 0; y < arrr.length ;y++) {
var latt = arrr[y];
var lonn = brrr[y];
	
 if (latt === ll && lonn === looo) {
		

	
 if(crrr[y]=="")
	{	document.getElementById("addres2").innerHTML = "null";
	}
	else
	{ 
	alert(document.getElementById("addres2").innerHTML);
	alert('hello');
	document.getElementById("addres2").innerHTML = crrr[y];
	}
	if(drrr[y]=="")
	{	document.getElementById("addres3").innerHTML = "null";
	
	}
	else
	{ 
	document.getElementById("addres3").innerHTML = drrr[y];
		alert(document.getElementById("addres3").innerHTML);
	}
	 }

	

}
	//document.getElementById("demoos").attributes.href = 'images/' + do}

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
  } else {
	
    alert('Street View data not found for this location.');
  }
}

  // Setup the markers on the map
  
  // We get the map's default panorama and set up some defaults.
  // Note that we don't yet set it visible.


   
      function cll()
	{
			
  this.close()
		
	}



google.maps.event.addDomListener(window, 'load',initialize);

    </script>


 <body onload="initialize()" style="background-color:#f4e851">





  	
                       <form name="form1"  action="Update_Form.php" method="post"  enctype="multipart/form-data" autocomplete="off">
             	
 

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
         <a onClick="cll();">     <img src="reusing-drraft-13.04-04.png"  style="margin-top:7%;height:20%;width:20%;border-top:hidden;" /></a>
        </div>
        </div>
        <div class="container">
        <div id="navbar" class="navbar-collapse collapse" style="float:right;margin-top:-4%;">
          <ul class="nav navbar-nav">
            <li><a onClick="cll();" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:19px;">HOME</a></li>
            <li><a href="#works" style="color:#FFF;font-family:'Source Sans Pro', sans-serif;font-size:19px;">LEARN MORE ABOUT THE SITE</a></li>
            <li><a href="http://www.facebook.com/reusingdublin" target="_blank"><img style="float:!important;" href="http://www.facebook.com/reusingdublin" src="facebook.png"></img></a></li>
               <li><a href="http://www.twitter.com/reusingdublin" target="_blank"><img style="float:!important" href="http://www.twitter.com/reusingdublin"  src="twitter.png"></img></a></li>
           
       
          </ul>
        
        </div><!--/.nav-collapse -->
        </div>
      </div>
    </nav>
   </div>
    
  
   <div class="container-fluid" id="works"  >
      <input type="hidden" name="lat1" ID="lat" value ="default" size="40"><br><br/><br/>
      <input type="hidden" name="lon1" ID="lon" value ="default" size="40"><br><br/><br/>
          <div style="width:100%;margin-right:80px;border:none;background-color:#FFF;padding:0px;background-color:transparent;border:none;" class="well sidebar-nav">
            <div style="margin-left:100px;margin-top:0px;font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:bold;color:#960;">
  <?php echo $msg ?>
  </div> 
            <font style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;"><b>Update a space</font>
            <br/>
            <br/>
             
            
            <div id="map-canv"   style="height:300px;width:45%;float:left;" ></div> 
            
   <div id="map-canvas"  style="height:300px;width:45%;float:right;padding:10px;" >   </div>
         <br/><br/> <br/>    <br/><br/> <br/>   <br/><br/> <br/>   <br/><br/> <br/>   <br/><br/> <br/>  <br/><br/> <br/>   <br/><br/> <br/>   <br/><br/> <br/>   
  <p  name="comment1"  style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;border:none;" id ="addres2"></p> 
    <p name="comment2"  style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;border:none;" id ="addres3"></p>   
   
   
 

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
