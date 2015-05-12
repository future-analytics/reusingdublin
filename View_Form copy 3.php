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
      
		

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>View Description</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
   	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'>

		<link rel="stylesheet" type="text/css" href="css/slicknav.css">
		<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
		 <link rel="stylesheet" type="text/css" href="css/style.min.css">
		
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

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
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
	  p.test {
   
    border: 1px solid #000000;
    word-wrap: break-word;
}
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

	
		

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>
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
	$filenamepic =  $marker1['Picname'];
	$filenamepic1 =  $marker1['picname1'];
	$filenamepic2 =  $marker1['picname2'];
	$filenamepic3 =  $marker1['picname3'];
	$filenamepic4 =  $marker1['picname4'];
	$filenamepic5 =  $marker1['picname5'];
	$filenamepic6 =  $marker1['picname6'];
	$filenamepic7 =  $marker1['picname7'];
	$filenamepic8 =  $marker1['picname8'];
	$filenamepic9 =  $marker1['picname9'];
	$filenamepic10 =  $marker1['picname10'];
	$filenamepic11 =  $marker1['picname11'];
	$filenamepic12 =  $marker1['picname12'];
	$filenamepic13 =  $marker1['picname13'];
	$filenamepic14 =  $marker1['picname14'];
	$filenamepic15 =  $marker1['picname15'];
	$filenamepic16 =  $marker1['picname16'];
	$filenamepic17 =  $marker1['picname17'];
	$filenamepic18 =  $marker1['picname18'];
	$filenamepic19 =  $marker1['picname19'];
	$filenamepic20 =  $marker1['picname20'];
	$filenamepic21 =  $marker1['picname21'];
	$filenamepic22 =  $marker1['picname22'];
	$filenamepic23 =  $marker1['picname23'];
	$filenamepic24 =  $marker1['picname24'];
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
		document.getElementById("dem").innerHTML = 'Details about ' +  crrr[y] + '</br>'  ;	

	
 if(crrr[y]=="")
	{	document.getElementById("addres1").innerHTML = "null";
	}
	else
	{ 
	document.getElementById("addres1").innerHTML = crrr[y];
	}
	if(drrr[y]=="")
	{	document.getElementById("addres3").innerHTML = "null";
	}
	else
	{ 
	document.getElementById("addres3").innerHTML = drrr[y];
	}
	if(jrrr[y]=="")
	{	document.getElementById("addres2").innerHTML = "null";
	}
	else
	{ 
	document.getElementById("addres2").innerHTML = jrrr[y];
	}
	if(errr[y]=="")
	{	document.getElementById("addres4").innerHTML = "null";
	}
	else
	{ 
	document.getElementById("addres4").innerHTML = errr[y];
	}
	if(frr[y]=="")
	{	document.getElementById("addres5").innerHTML = "null";
	}
	else
	{ 
	document.getElementById("addres5").innerHTML = frr[y];
	}
	if(grr[y]=="")
	{	document.getElementById("addres7").innerHTML = "null";
	}
	else
	{ 
	document.getElementById("addres7").innerHTML = grr[y];
	}
	if(hrrr[y]=="")
	{	document.getElementById("addres6").innerHTML = "null";
	}
	else
	{ 
	document.getElementById("addres6").innerHTML = hrrr[y];
	}
	if(irrr[g]=="")
	{	document.getElementById("addres8").innerHTML = "null";
	}
	else
	{ 
	document.getElementById("addres8").innerHTML = irrr[y];
	}
	if(trrr[y]=="")
	{	document.getElementById("addres9").innerHTML = "null";
	}
	else
	{ 
	document.getElementById("addres9").innerHTML = trrr[y];
	}

	
if(grrr[y].length!="")
	{
	document.getElementById("demos").innerHTML +=  "<a href=images/" + grrr[y] + ">" + grrr[y] + "</a>" + '</br>';  
	}
	if(grrr1[y].length!="")
	{
	document.getElementById("demos").innerHTML +=  "<a href=images/" + grrr1[y] + ">" + grrr1[y] + "</a>" + '</br>';  
	}

	
	if(grrr2[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grrr2[y] + ">" + grrr2[y] + "</a>" + '</br>';  
	}
	
   if(grrr3[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grrr3[y] + ">" + grrr3[y] + "</a>" + '</br>';  
	}
	if(grrr4[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grrr4[y] + ">" + grrr4[y] + "</a>" + '</br>';  
	}
	if(grrr5[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grrr5[y] + ">" + grrr5[y] + "</a>" + '</br>';  
	}
	if(grrr6[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grrr6[y] + ">" + grrr6[y] + "</a>" + '</br>';  
	}
	if(grrr7[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grrr7[y] + ">" + grrr7[y] + "</a>" + '</br>';  
	}
	if(grrr8[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grrr8[y] + ">" + grrr8[y] + "</a>" + '</br>';  
	}
	if(grrr9[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grrr9[y] + ">" + grrr9[y] + "</a>" + '</br>';  
	}
	if(grrr10[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grrr10[y] + ">" + grrr10[y] + "</a>" + '</br>';  
	}
	if(grrr11[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grrr11[y] + ">" + grrr11[y] + "</a>" + '</br>';  
	}
	if(grrr12[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grrr12[y] + ">" + grrr12[y] + "</a>" + '</br>';  
	}
	if(grrr13[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grrr13[y] + ">" + grrr13[y] + "</a>" + '</br>';  
	}
	if(grrr14[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grrr14[y] + ">" + grrr14[y] + "</a>" + '</br>';  
	}
	if(grrr15[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grrr15[y] + ">" + grrr15[y] + "</a>" + '</br>';  
	}
	if(grrr16[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grrr16[y] + ">" + grrr16[y] + "</a>" + '</br>';  
	}
	if(grrr17[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grrr17[y] + ">" + grrr17[y] + "</a>" + '</br>';  
	}
	if(grrr18[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grrr18[y] + ">" + grrr18[y] + "</a>" + '</br>';  
	}
	if(grrr19[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grrr19[y] + ">" + grrr19[y] + "</a>" + '</br>';  
	}
	if(grrr20[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grrr20[y] + ">" + grrr20[y] + "</a>" + '</br>';  
	}
	if(grrr21[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grrr21[y] + ">" + grrr21[y] + "</a>" + '</br>';  
	}
	if(grrr22[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grrr22[y] + ">" + grrr22[y] + "</a>" + '</br>';  
	}
	if(grrr23[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grrr23[y] + ">" + grrr23[y] + "</a>" + '</br>';  
	}
	if(grrr24[y].length!="")
	{   
		document.getElementById("demos").innerHTML += "<a href=images/" + grrr24[y] + ">" + grrr24[y] + "</a>" + '</br>';  
	}
	if(frrr[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frrr[y] + ">" + frrr[y] + "</a>" + '</br>';  
	}
	if(frrr1[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frrr1[y] + ">" + frrr1[y] + "</a>" + '</br>';  
	}
	if(frrr2[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frrr2[y] + ">" + frrr2[y] + "</a>" + '</br>';  
	}
	if(frrr3[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frrr3[y] + ">" + frrr3[y] + "</a>" + '</br>';  
	}
		if(frrr4[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frrr4[y] + ">" + frrr4[y] + "</a>" + '</br>';  
	}
		if(frrr5[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frrr5[y] + ">" + frrr5[y] + "</a>" + '</br>';  
	}
		if(frrr6[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frrr6[y] + ">" + frrr6[y] + "</a>" + '</br>';  
	}
		if(frrr7[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frrr7[y] + ">" + frrr7[y] + "</a>" + '</br>';  
	}
		if(frrr8[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frrr8[y] + ">" + frrr8[y] + "</a>" + '</br>';  
	}
		if(frrr9[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frrr9[y] + ">" + frrr9[y] + "</a>" + '</br>';  
	}
		if(frrr10[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frrr10[y] + ">" + frrr10[y] + "</a>" + '</br>';  
	}
		if(frrr11[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frrr11[y] + ">" + frrr11[y] + "</a>" + '</br>';  
	}
		if(frrr12[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frrr12[y] + ">" + frrr12[y] + "</a>" + '</br>';  
	}
		if(frrr13[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frrr13[y] + ">" + frrr13[y] + "</a>" + '</br>';  
	}
		if(frrr14[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frrr14[y] + ">" + frrr14[y] + "</a>" + '</br>';  
	}
		if(frrr15[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frrr15[y] + ">" + frrr15[y] + "</a>" + '</br>';  
	}
		if(frrr16[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frrr16[y] + ">" + frrr16[y] + "</a>" + '</br>';  
	}
		if(frrr17[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frrr17[y] + ">" + frrr17[y] + "</a>" + '</br>';  
	}
		if(frrr18[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frrr18[y] + ">" + frrr18[y] + "</a>" + '</br>';  
	}
		if(frrr19[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frrr19[y] + ">" + frrr19[y] + "</a>" + '</br>';  
	}
		if(frrr20[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frrr20[y] + ">" + frrr20[y] + "</a>" + '</br>';  
	}
		if(frrr21[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frrr21[y] + ">" + frrr21[y] + "</a>" + '</br>';  
	}
		if(frrr22[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frrr22[y] + ">" + frrr22[y] + "</a>" + '</br>';  
	}
		if(frrr23[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frrr23[y] + ">" + frrr23[y] + "</a>" + '</br>';  
	}	
	if(frrr24[y].length!="")
	{   
		document.getElementById("demoos").innerHTML += "<a href=images/" + frrr24[y] + ">" + frrr24[y] + "</a>" + '</br>';  
	}
	
	
	//document.getElementById("demoos").attributes.href = 'images/' + docfile;


  }
}




for (var i = 0; i < arr.length ;i++) {
var e = arr[i];
var g = brr[i];

  if (e == ll && g == looo) {



	document.getElementById("demo").innerHTML += c[i] + '</br>' + ' ' + 'Posted By : ' + ema[i] +  '  ' +  '  ' + '   Posted On :'  + ' ' + dates[i] + '</br>' + '</br>' ;


  }
}

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

function myFunc()
	{
		window.open("http://factest.ie/timber/emailphp.php","Ratting","width=1024,height=600,0,status=0,");
		
	}
   
      function cll()
	{
		this.close();
		
	}




google.maps.event.addDomListener(window, 'load',initialize);

    </script>

  <body onload="comments()">
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
			
														<a class="hhh" onClick="cll();" style="color:white;margin-right:50%;font-weight:200">HOME</a>
                         

					
			
			</div>    
           </div>  
     
        		</div>
    
    
    
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
  
         
      <input type="hidden" name="lat1" ID="lat" value ="default" size="40"><br><br/><br/>
      <input type="hidden" name="lon1" ID="lon" value ="default" size="40"><br><br/><br/>
                       	
    <div class="container-fluid">
      <div class="row-fluid">
        <div  class="span3">
         
						
						
					
				
            
            
      <ul  class="nav nav-list">
          <div style="width:100%;margin-right:80px;border:hidden;background-color:#FFF;padding:0px;margin-top:-190px;" class="well sidebar-nav">
            
           
             
            
            <div id="map-canv"   style="height:300px;width:100%;float:left;" ></div> 
            
   <div id="map-canvas"  style="height:150px;width:150px;float:left;margin-top:-130px;margin-left:50px;" >   </div>
            </div>
            <br/>
             
        
              <div style="font-family:Arial, Helvetica, sans-serif;font-size:18px;color:#960;float:left;margin-left:10%;margin-top:10px;font-size:24px;font-family: Arial, Helvetica, sans-serif;" align="center" id="dem"><b></b></div> <br/><br/>
                  
                
       <div style="width:90%;float:left;background-color:inherit;border:hidden;opacity:0%;margin-top:20px;" >
     
     
    
   
     
           
             
 
         
            <div style="background-color:#FFF;margin-left:2%;border:hidden;float:left;width:65%;opacity:0%;margin-top:10px;" class="well sidebar-nav">
      <div class="lot-detail-information" style="float:left;margin-top:-8px;" >
      <h2 style="color:#960;margin-top:-5px;"><b>DISCOVER</b></h2>
    <div class="lot-detail-main-section">
    <div class="lot-detail-information-item">
      
        <h4 style="color:#960;"><b>INFORMATION ABOUT THE LOT</b></h4>
                <div class="lot-detail-information-item-label">
                   Address:
                </div>
                <div class="lot-detail-information-item-value">
            <p class="test" name="comment" style="border:none;color:#000;" id ="addres1"></p>       
                </div>
            </div>
             <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label">
                    Ownership Details:
                </div>
                <div class="lot-detail-information-item-value">
                    <p class="test" name="comment1" style="border-color:#9F0;border:none;color:#000;" id ="addres2"></p> 
  
                </div>
            </div>
              <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label">
                   Zoning:
                </div>
                <div class="lot-detail-information-item-value">
                 <p class="test" name="comment2" style="border-color:#9F0;border:none;color:#000;" id ="addres3"></p>  
  
                </div>
            </div>
             <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label">
                   Planning History:
                           
                </div>
                <div class="lot-detail-information-item-value">
                 <p class="test" name="comment3" style="border-color:#9F0;border:none;color:#000;" id ="addres4"></p>  
  
                </div>
            </div>
            
                  <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label">
                  Size / Area (Sqm):
                </div>
                <div class="lot-detail-information-item-value">
                <p class="test" name="comment4" style="border-color:#9F0;border:none;color:#000;" id ="addres5"></p> 
                </div>
            </div>
            <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label">
               Heritage Designation:
                </div>
                <div class="lot-detail-information-item-value">
                <p class="test" name="comment5" style="color:#000;border:none;" id ="addres6"></p> 
                </div>
            </div>
              <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label">
               Is the site officially derelict?:
                </div>
                <div class="lot-detail-information-item-value">
                <p class="test" name="comment6" style="border-color:#9F0;border:none;color:#000;" id ="addres7"></p>  
                </div>
            </div>
               <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label">
               Description:
                </div>
                <div class="lot-detail-information-item-value">
                 <p class="test" name="comment7" style="border-color:#9F0;border:none;color:#000;" id ="addres8"></p>
                </div>
            </div>
              <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label">
              Suggested Uses:
                </div>
                <div class="lot-detail-information-item-value">
                    <p class="test" name="comment8" style="border-color:#9F0;border:none;color:#000;" id ="addres9"></p>
                </div>
            </div>
             <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label">
             Why has this area been highlighted
                </div>
                <div class="lot-detail-information-item-value">
                   This space has been created to share and connect information about this building/area which has been highlighted as vacant / under utilised.
                   
                 </div>
            </div>
                 </div>
       	  
       	  
            </div> 
             </br>
        

          </div>      
      
 


    
    <div style="float:left;margin-left:2%;height:inherit;margin-top:10px;height:inherit;padding-bottom:25px;"  class="well sidebar-nav" >
    <div style="margin-left:3px;margin-right:3px;padding-bottom:5px;">
      <h2  align="center" style="color:#960;margin-top:10px;"><b>CONNECT</b></h2>
      <div class="lot-detail-information" style="float:left;background-color:inherit;" > 
    
                
        
         
    <h4 style="color:#000;" align="center"><b>HAVE WE MADE A MISTAKE</b></h4>
    
          
     <p align="center" ><a href="email.php" style="color:#FFF;"  class="btn btn-primary btn-large">Let Us Know &raquo;</a></p>
        </br>
         
     <h4 style="color:#000;"  align="center"><b>FURTHER INFO</b><h4>
       
   
          
      <p align="center" ><a href="email.php" style="color:#FFF;" class="btn btn-primary btn-large">Tell Us More &raquo;</a></p>
       </br>  
         
        
        <h4 style="color:#000;" align="center"><b>CONNECT</b><h4> 
      
      
       <p align="center" ><a href="connects.php" style="color:#FFF;" class="btn btn-primary btn-large">Connect &raquo;</a></p>
      
          
     </div>   
       </div>      
    </div>
    </div>
    </ul>
          </div><!--/.well -->
        </div><!--/span-->
          
 
      
        
                 <div style="width:100%;float:left;margin-left:5%;"  >
                         
        <div  class="span9">
         <h2 style="color:#960;"><b>SHARE</b></h2>
          <div  class="hero-unit">
           <br/>
           <h4><b>SHARE</b>
            </h4>
            <p><a href="share1.php" style="color:#FFF;" class="btn btn-primary btn-large">Share &raquo;</a></p>
          </div>
          
            <br/>
         
          
            <div  class="hero-unit">
            <h4><b>UPLOAD YOUR FILES</b>
            </h4>
            <p><a href="Insert1.php"  style="color:#FFF;" class="btn btn-primary btn-large">Add a file &raquo;</a></p>
               <p style="font-family:Arial, Helvetica, sans-serif;font-size:16px;color:#009;" id="demoos"><b></b></p> 
             <br/>
          </div>
           <div  class="hero-unit">
            <h4><b>UPLOAD YOUR VIDEOS</b>
            </h4>
            <p><a href="Insert3.php"  style="color:#FFF;" class="btn btn-primary btn-large">Add a Video &raquo;</a></p>
               <p style="font-family:Arial, Helvetica, sans-serif;font-size:16px;color:#009;" id="demoos"><b></b></p> 
             <br/>
          </div>
            <div  class="hero-unit">
            <h4><b>UPLOAD YOUR PHOTOS</b>
            </h4>
            <p><a href="Insert2.php" style="color:#FFF;"  class="btn btn-primary btn-large">Add a photo &raquo;</a></p>
             <p style="font-family:Arial, Helvetica, sans-serif;font-size:16px;color:#009;" id="demos"><b></b></p>
            
             <br/>
          </div>
          
            <h4 style="margin-top:0px"><b>BLOGS</b></h4>
            <p style="font-family:Arial, Helvetica, sans-serif;font-size:16px;color:#009;" id="demo"><b></b></p>
            
             <br/>
         
             
         </div>
         </div> 
           </div>    
            
            
    </div><!--/.fluid-container-->
      </body>      


<div class="container-fluid" >
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
    </body>
    
</html>
 
 
<?php
mysqli_close($con); ?>


