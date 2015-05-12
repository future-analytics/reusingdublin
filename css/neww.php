
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Confirmation</title>

<style>
p
{
	color:#063;
}
</style>
</head>
<script type="text/javascript">
function initialize(){
  var a = sessionStorage.getItem("lll");
  var b = sessionStorage.getItem("llll");
  document.getElementById("lon").value = b;
  document.getElementById("lat").value = a;
}
function goback(){
	this.close();
	
	
}
</script>


<body onload="initialize()">
<p align="center">YOU WANT TO UPDATE/VIEW THE RECORD</p>
 <div align="center">
 <form  action="Reads.php" method="POST"  enctype="multipart/form-data"  >

 <input type="hidden" name="lat1" ID="lat"   size="40"><br><br/><br/>
      <input type="hidden" name="lon1" ID="lon"   size="40"><br><br/><br/>
   <input type="button" value="NO"  style="background-color:#060;border:none;margin-top:15px;height:30px;width:50px;color:#FFF;font-size:20px" align="absmiddle" onclick="javascript:goback()"/>          
<input type="submit" name="fff" style="background-color:#060;border:none;margin-top:15px;float:left;height:30px;width:50px;color:#FFF;font-size:20px" value="YES" onclick="javascript:goback()"/>

</form>
</div>

</body>
</html>
<?php
if(isset($_POST['fff']))
{
 

$con=mysqli_connect("172.16.0.57","u1046393_turas","Soamin123@","db1046393_dublin");
	$sql2 = "SELECT * FROM Address2";
$result = mysqli_query($con,$sql2);
 $rowcount = mysqli_num_rows($result);


if($rowcount!=0)
{
$sql1="DELETE FROM Address2";

if (!mysqli_query($con,$sql1)){
  die('Error: ' . mysqli_error($con));
}
} 
$latitude = mysqli_real_escape_string($con, $_POST['lat1']);
$longitude = mysqli_real_escape_string($con, $_POST['lon1']);

$sql="INSERT INTO Address2 (Latitude,Longitude) VALUES ('$latitude', '$longitude')";


if (!mysqli_query($con,$sql)){
  die('Error: ' . mysqli_error($con));
}else{
echo "1 record added";
}




mysqli_close($con);
}



?>
