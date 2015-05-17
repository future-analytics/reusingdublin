<?php
require('db.php');
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
   $result5 = mysqli_query($con,"SELECT * FROM video");
while($row5 = mysqli_fetch_assoc($result5))
{
	$data5[] = $row5;

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

    <title>View Information Details</title>


 <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/navbar-fixed-top/navbar-fixed-top.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" type="text/css" href="css/style.css">
		 <link rel="stylesheet" type="text/css" href="css/style.min.css">


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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

    word-wrap: break-word;
}
    </style>


 <link href="css/bootstrap-responsive.css" rel="stylesheet">
 <link href="css/bootstrap.css" rel="stylesheet">
 <link href="css/reusingdublin.css" type="text/css" rel="stylesheet">

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

var d = [];
var ee = [];
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
<?php
foreach($data2 as $marker2)
{
	$lats = $marker2['latitude'];
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

foreach($data5 as $marker5)
{
	$lats = $marker5['latitude'];
    $lons = $marker5['longitude'];
    $video1 =  $marker5['video1'];
	$video2 =  $marker5['video2'];
	$video3 =  $marker5['video3'];
	?>
	var latts = "<?php echo $lats;?>";
	d.push(latts);
	var lonns = "<?php echo $lons;?>";
	ee.push(lonns);
	var video1 = "<?php echo $video1;?>";
	v1.push(video1);
	var video2 = "<?php echo $video2;?>";
	v2.push(video2);
	var video3 = "<?php echo $video3;?>";
	v3.push(video3);
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




	//document.getElementById("demoos").attributes.href = 'images/' + docfile;


  }
}
var l =  document.getElementById('lat').value;
var loo = document.getElementById('lon').value;

for (var y = 0; y < d.length ;y++) {
var latt = d[y];
var lonn = ee[y];
if (latt === l && lonn === loo)
{
if(v1[y].length!="")
	{
		document.getElementById("demooos").innerHTML += "<a href=videos/" + v1[y] + ">" + v1[y] + "</a>" + '</br>';
	}
	if(v2[y].length!="")
	{
		document.getElementById("demooos").innerHTML += "<a href=videos/" + v2[y] + ">" + v2[y] + "</a>" + '</br>';
	}
	if(v3[y].length!="")
	{
		document.getElementById("demooos").innerHTML += "<a href=videos/" + v3[y] + ">" + v3[y] + "</a>" + '</br>';
	}
}
}
var l =  document.getElementById('lat').value;
var loo = document.getElementById('lon').value;

for (var y = 0; y < dr.length ;y++) {
var latt = dr[y];
var lonn = er[y];
if (latt === l && lonn === loo)
{
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

}
}

	var ll =  document.getElementById('lat').value;
var looo = document.getElementById('lon').value;
for (var y = 0; y < lattts.length;y++) {
var latts = lattts[y];
var lonns = lonnns[y];

 if (latts === ll && lonns === looo) {

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



      function cll()
	{

  this.close()

	}



google.maps.event.addDomListener(window, 'load',initialize);

    </script>

</head>


 <body onload="comments()">



	<?php
	require_once('includes/header.php');
	?>



                       <form name="form1"  action="View_Form.php" method="post"  enctype="multipart/form-data" autocomplete="off">



    <!-- Fixed navbar -->

          <div class="container-fluid"  style="height:100%;width:100%;margin-top:-10px;" id="works" >

      <div class="row-fluid">
        <div  class="span3">
		 <ul  class="nav nav-list">
      <input type="hidden" name="lat1" ID="lat" value ="default" size="40"><br><br/><br/>
      <input type="hidden" name="lon1" ID="lon" value ="default" size="40"><br><br/><br/>
          <div style="width:100%;margin-right:80px;border:none;background-color:#FFF;padding:0px;" class="well sidebar-nav">




            <div id="map-canv"   style="height:300px;width:100%;float:left;" ></div>

   <div id="map-canvas"  style="height:150px;width:150px;float:left;margin-top:-130px;margin-left:50px;" >   </div>
            </div>


            <br/>
           <p style="margin-top:10px;"> <font style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;margin-top:50px;height:20px;width:100%;" align="center"  id="dem"></font></p> <br/>

          <div style="width:100%;margin-right:80px;border:none;background-color:#FFF;padding:0px;background-color:transparent;border:none;" class="well sidebar-nav">

             <br/>
             <br/>

                <h4 style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;margin-left:3%;"><b>DISCOVER</b></h4>
      <div class="lot-detail-information" style="float:left;margin-top:-8px;background-color:#FFF;" >
    <div class="lot-detail-main-section">
    <div class="lot-detail-information-item">

        <h4 style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;"><b>INFORMATION ABOUT THE LOT</b></h4>
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;">
                   Address:
                </div>
                <div class="lot-detail-information-item-value" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;">
            <p class="test" name="comment" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;border:none;" id ="addres1"></p>
                </div>
                <br/>
            </div>
             <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;">
                    Ownership Details:
                </div>
                <div class="lot-detail-information-item-value">
                    <p class="test" name="comment1"  style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;border:none;" id ="addres2"></p>

                </div>
                <br/>
            </div>
              <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;">
                   Zoning:
                </div>
                <div class="lot-detail-information-item-value">
                 <p class="test" name="comment2"  style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;border:none;" id ="addres3"></p>

                </div>
                 <br/>
            </div>
             <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;border:none;">
                   Planning History:

                </div>
                <div class="lot-detail-information-item-value">
                 <p class="test" name="comment3" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;border:none;" id ="addres4"></p>

                </div>
                 <br/>
            </div>

                  <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;border:none;">
                  Size / Area (Sqm):
                </div>
                <div class="lot-detail-information-item-value" style="border:none;">
                <p class="test" name="comment4" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;border:none;" id ="addres5"></p>
                </div>
                 <br/>
            </div>
            <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;border:none;">
               Heritage Designation:
                </div>
                <div class="lot-detail-information-item-value" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:20px;">
                <p class="test" name="comment5" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;border:none;" id ="addres6"></p>
                </div>
                 <br/>
            </div>
              <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;border:none;" >
               Is the site officially derelict?:
                </div>
                <div class="lot-detail-information-item-value" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:28px;">
                <p class="test" name="comment6" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;border:none;" id ="addres7"></p>
                </div>
                 <br/>
            </div>
               <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;">
               Description:
                </div>
                <div class="lot-detail-information-item-value">
                 <p class="test" name="comment7" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;border:none;" id ="addres8"></p>
                </div>
                 <br/>
            </div>
              <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;">
              Suggested Uses:
                </div>
                <div class="lot-detail-information-item-value">
                    <p class="test" name="comment8" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;border:none;" id ="addres9"></p>
                </div>
                 <br/>
            </div>
             <div class="lot-detail-information-item">
                <div class="lot-detail-information-item-label" style="color:#036A78;font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;">
             Why has this area been highlighted
                </div>
                <div class="lot-detail-information-item-value" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;border:none;">
                   This space has been created to share and connect information about this building/area which has been highlighted as vacant / under utilised.

                 </div>
                  <br/>
            </div>
                 </div>


                             </div>
                             </ul>
                 </div>





   </div>
   </div>
      <!-- Main component for a primary marketing message or call to action -->
      <div class="container" style="background-color:#FFF;border:none;float:left;">

      <!-- Main component for a primary marketing message or call to action -->


 <div class="col-md-4" style="background-color:#9dd7e3;margin-left:2%;height:70%;"  >

     <font  align="center" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;margin-left:10px;">Connect</font>



        <br/>
        <br/><br/>

    <font style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;" align="center">Have we made a mistake</font>


     <p style="margin-left:3%;"><a href="email.php?numb=<?php echo '1'?>" style="color:#FFF;color:#FFF;font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;margin-top:10px;"  class="btn btn-primary btn-large">LET US KNOW</a></p>
        </br>


     <font style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:20px;margin-left:3%;font-weight:semibold;margin-top:10px;"  align="center">Further info</font>



      <p style="margin-left:3%;"><a href="email.php?numb=<?php echo '2'?>" style="color:#FFF;font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;margin-top:10px;" class="btn btn-primary btn-large">TELL US MORE</a></p>
       </br>


        <font style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;margin-top:10px;margin-left:10px;">Connect</font>


       <p style="margin-left:3%;"><a href="connects.php" style="color:#FFF;font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;margin-top:10px;" class="btn btn-primary btn-large">CONNECT</a></p>

        </br>


    </div>


                 <div class="col-md-4" style="background-color:#cadd70;margin-left:2%;height:70%;"  >

          <font  align="center" style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;margin-left:3%;">Share</font>

        <br/>
        <br/><br/>

          <font style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;margin-left:3%;" align="center">Share</font>


     <p style="margin-left:5px;"><a href="share1.php" style="color:#FFF;color:#FFF;font-family:'Source Sans Pro', sans-serif;margin-left:3%;font-size:20px;font-weight:semibold;margin-top:10px;"  class="btn btn-primary btn-large">SHARE</a></p>
        </br>


    <font style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;margin-left:3%;" align="center">Upload your files</font>


     <p style="margin-left:5px;"><a href="Insert6.php" style="color:#FFF;color:#FFF;font-family:'Source Sans Pro', sans-serif;font-size:20px;margin-left:3%;font-weight:semibold;margin-top:10px;"  class="btn btn-primary btn-large">ADD A FILE</a></p>
       <p class="test" style="font-family:'Source Sans Pro', sans-serif;font-size:17px;" id="demoos"><b></b></p>
        </br>

     <font style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;margin-left:3%;margin-top:10px;"  align="center">Upload your videos</font>



      <p style="margin-left:5px;"><a href="Insert3.php" style="color:#FFF;font-family:'Source Sans Pro', sans-serif;font-size:20px;margin-left:3%;font-weight:semibold;margin-top:10px;" class="btn btn-primary btn-large">ADD A VIDEO</a></p>
        <p class="test" style="font-family:'Source Sans Pro', sans-serif;font-size:17px;" id="demooos"><b></b></p>
       </br>


        <font style="color:#000;font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;margin-top:10px;margin-left:3%;">Upload your photos</font>


       <p style="margin-left:5px;"><a href="Insert2.php" style="color:#FFF;font-family:'Source Sans Pro', sans-serif;font-size:20px;margin-left:3%;font-weight:semibold;margin-top:10px;" class="btn btn-primary btn-large">ADD A PHOTO</a></p>
          <p class="test" style="font-family:Arial, Helvetica, sans-serif;font-family:'Source Sans Pro', sans-serif;font-size:17px;" id="demos"><b></b></p>

        </br>


             </br>




      </div>




    </div> <!-- /container -->
      <div  class="col-md-8" style="width:100%;background-color:#FFF;border:none;float:left;padding-top:6%;padding-left:5%;" >
           <font style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;"><b>BLOGS</b></font>
            <p class="test" style="font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:semibold;" id="demo"><b></b></p>
            </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
