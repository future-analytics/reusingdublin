<?php
if(isset($_POST['added']))
{
$con=mysqli_connect("172.16.0.57","u1046393_turas","Soamin123@","db1046393_dublin");
$latitude = mysqli_real_escape_string($con, $_POST['lat1']);
$longitude = mysqli_real_escape_string($con, $_POST['lon1']);
$file1 = $_FILES['pic1'];
$file_path1 = $file1['tmp_name'];
$file_name1 = $_FILES['pic1']['name'];
$file_type1 = $file1['type'];
$file_id1 = $file1['tmp_name'];
$file_name1 = str_replace(' ', '_', $file_name1);
move_uploaded_file($file_path1,'images/'.$file_name1);
$fp      = fopen($file_path1, 'r');
$content = fread($fp, filesize($file_path1));
$content = addslashes($content);
fclose($fp);
$result = mysqli_query($con,"SELECT * FROM files where Latitude = '$latitude' AND Longitude = '$longitude'");
$num_rows = mysqli_num_rows($result);
$row1 = mysqli_fetch_assoc($result);
 if(($num_rows==0)&&($_FILES['pic1']['size']>0)&&(!empty($latitude))&&((!empty($longitude))))
    {
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")

{
		$sql=("insert into files(doc1 ,latitude,longitude ) values ('$file_name1','$latitude' ,'$longitude')");

if (!mysqli_query($con,$sql)){
  die('Error: ' . mysqli_error($con));
   $msg = "Error";
}

else
{

$msg = "Files Uploaded Successfully!";
}
}
else
{
$msg = "Invalid File Format!";
}


	}
if(($num_rows>0)&&($_FILES['pic1']['size']>0)&&(!empty($latitude))&&((!empty($longitude))))
   {
	 if(empty($row1['doc1']))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE files SET doc1 ='$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'");

if (!mysqli_query($con,$sql3)){
  die('Error: ' . mysqli_error($con));
   $msg = "Error";
}

else
{

$msg = "Files Uploaded Successfully!";
}
}
  else
   {

$msg = "Invalid File Format";
   }
	}
	  if(empty($row1['doc2'])&&(!empty($row1['doc1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE files SET  doc2 =  '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'");

if (!mysqli_query($con,$sql3)){
  die('Error: ' . mysqli_error($con));
   $msg = "Error";
}

else
{

$msg = "Files Uploaded Successfully!";
}
}
  else
   {

$msg = "Invalid File Format";
   }
	}
  if(empty($row1['doc3'])&&(!empty($row1['doc2']))&&(!empty($row1['doc1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE files SET doc3 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'");

if (!mysqli_query($con,$sql3)){
  die('Error: ' . mysqli_error($con));
   $msg = "Error";
}

else
{

$msg = "Files Uploaded Successfully!";
}
}
  else
   {

$msg = "Invalid File Format";
   }
	}
	 if(empty($row1['doc4'])&&(!empty($row1['doc2']))&&(!empty($row1['doc3']))&&(!empty($row1['doc1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE files SET  doc4 ='$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'");

if (!mysqli_query($con,$sql3)){
  die('Error: ' . mysqli_error($con));
   $msg = "Error";
}

else
{

$msg = "Files Uploaded Successfully!";
}
}
  else
   {

$msg = "Invalid File Format";
   }
	}
	 if(empty($row1['doc5'])&&(!empty($row1['doc2']))&&(!empty($row1['doc3']))&&(!empty($row1['doc4']))&&(!empty($row1['doc1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE files SET  doc5 =  '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'");

if (!mysqli_query($con,$sql3)){
  die('Error: ' . mysqli_error($con));
   $msg = "Error";
}

else
{

$msg = "Files Uploaded Successfully!";
}
}
  else
   {

$msg = "Invalid File Format";
   }
	}
	 if(empty($row1['doc6'])&&(!empty($row1['doc2']))&&(!empty($row1['doc3']))&&(!empty($row1['doc4']))&&(!empty($row1['doc5']))&&(!empty($row1['doc1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE files SET  doc6 =  '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'");

if (!mysqli_query($con,$sql3)){
  die('Error: ' . mysqli_error($con));
   $msg = "Error";
}

else
{

$msg = "Files Uploaded Successfully!";
}
}
  else
   {

$msg = "Invalid File Format";
   }
	}
	 if(empty($row1['doc7'])&&(!empty($row1['doc2']))&&(!empty($row1['doc3']))&&(!empty($row1['doc4']))&&(!empty($row1['doc5']))&&(!empty($row1['doc6']))&&(!empty($row1['doc1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE files SET doc7 =  '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'");

if (!mysqli_query($con,$sql3)){
  die('Error: ' . mysqli_error($con));
   $msg = "Error";
}

else
{

$msg = "Files Uploaded Successfully!";
}
}
  else
   {

$msg = "Invalid File Format";
   }
	}
	 if(empty($row1['doc8'])&&(!empty($row1['doc2']))&&(!empty($row1['doc3']))&&(!empty($row1['doc4']))&&(!empty($row1['doc5']))&&(!empty($row1['doc6']))&&(!empty($row1['doc7']))&&(!empty($row1['doc1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE files SET doc8 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'");

if (!mysqli_query($con,$sql3)){
  die('Error: ' . mysqli_error($con));
   $msg = "Error";
}

else
{

$msg = "Files Uploaded Successfully!";
}
}
  else
   {

$msg = "Invalid File Format";
   }
	}
	if(empty($row1['doc9'])&&(!empty($row1['doc2']))&&(!empty($row1['doc3']))&&(!empty($row1['doc4']))&&(!empty($row1['doc5']))&&(!empty($row1['doc6']))&&(!empty($row1['doc7']))&&(!empty($row1['doc8']))&&(!empty($row1['doc1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE files SET doc9 ='$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'");

if (!mysqli_query($con,$sql3)){
  die('Error: ' . mysqli_error($con));
   $msg = "Error";
}

else
{

$msg = "Files Uploaded Successfully!";
}
}
  else
   {

$msg = "Invalid File Format";
   }
	}
if(empty($row1['doc10'])&&(!empty($row1['doc2']))&&(!empty($row1['doc3']))&&(!empty($row1['doc4']))&&(!empty($row1['doc5']))&&(!empty($row1['doc6']))&&(!empty($row1['doc7']))&&(!empty($row1['doc8']))&&(!empty($row1['doc9']))&&(!empty($row1['doc1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE files SET  doc10 ='$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'");

if (!mysqli_query($con,$sql3)){
  die('Error: ' . mysqli_error($con));
   $msg = "Error";
}

else
{

$msg = "Files Uploaded Successfully!";
}
}
  else
   {

$msg = "Invalid File Format";
   }
	}
	if(empty($row1['doc11'])&&(!empty($row1['doc2']))&&(!empty($row1['doc3']))&&(!empty($row1['doc4']))&&(!empty($row1['doc5']))&&(!empty($row1['doc6']))&&(!empty($row1['doc7']))&&(!empty($row1['doc8']))&&(!empty($row1['doc9']))&&(!empty($row1['doc10']))&&(!empty($row1['doc1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE files SET  doc11 ='$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'");

if (!mysqli_query($con,$sql3)){
  die('Error: ' . mysqli_error($con));
   $msg = "Error";
}

else
{

$msg = "Files Uploaded Successfully!";
}
}
  else
   {

$msg = "Invalid File Format";
   }
	}
	if(empty($row1['doc12'])&&(!empty($row1['doc2']))&&(!empty($row1['doc3']))&&(!empty($row1['doc4']))&&(!empty($row1['doc5']))&&(!empty($row1['doc6']))&&(!empty($row1['doc7']))&&(!empty($row1['doc8']))&&(!empty($row1['doc9']))&&(!empty($row1['doc10']))&&(!empty($row1['doc11']))&&(!empty($row1['doc1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE files SET  doc12 =  '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'");

if (!mysqli_query($con,$sql3)){
  die('Error: ' . mysqli_error($con));
   $msg = "Error";
}

else
{

$msg = "Files Uploaded Successfully!";
}
}
  else
   {

$msg = "Invalid File Format";
   }
	}

	if(empty($row1['doc13'])&&(!empty($row1['doc2']))&&(!empty($row1['doc3']))&&(!empty($row1['doc4']))&&(!empty($row1['doc5']))&&(!empty($row1['doc6']))&&(!empty($row1['doc7']))&&(!empty($row1['doc8']))&&(!empty($row1['doc9']))&&(!empty($row1['doc10']))&&(!empty($row1['doc11']))&&(!empty($row1['doc12']))&&(!empty($row1['doc1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE files SET  doc13 =  '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'");

if (!mysqli_query($con,$sql3)){
  die('Error: ' . mysqli_error($con));
   $msg = "Error";
}

else
{

$msg = "Files Uploaded Successfully!";
}
}
  else
   {

$msg = "Invalid File Format";
   }
	}
	if(empty($row1['doc14'])&&(!empty($row1['doc2']))&&(!empty($row1['doc3']))&&(!empty($row1['doc4']))&&(!empty($row1['doc5']))&&(!empty($row1['doc6']))&&(!empty($row1['doc7']))&&(!empty($row1['doc8']))&&(!empty($row1['doc9']))&&(!empty($row1['doc10']))&&(!empty($row1['doc11']))&&(!empty($row1['doc12']))&&(!empty($row1['doc13']))&&(!empty($row1['doc1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE files SET doc14 =  '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'");

if (!mysqli_query($con,$sql3)){
  die('Error: ' . mysqli_error($con));
   $msg = "Error";
}

else
{

$msg = "Files Uploaded Successfully!";
}
}
  else
   {

$msg = "Invalid File Format";
   }
	}

	if(empty($row1['doc15'])&&(!empty($row1['doc2']))&&(!empty($row1['doc3']))&&(!empty($row1['doc4']))&&(!empty($row1['doc5']))&&(!empty($row1['doc6']))&&(!empty($row1['doc7']))&&(!empty($row1['doc8']))&&(!empty($row1['doc9']))&&(!empty($row1['doc10']))&&(!empty($row1['doc11']))&&(!empty($row1['doc12']))&&(!empty($row1['doc13']))&&(!empty($row1['doc14']))&&(!empty($row1['doc1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE files SET  doc15 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'");

if (!mysqli_query($con,$sql3)){
  die('Error: ' . mysqli_error($con));
   $msg = "Error";
}

else
{

$msg = "Files Uploaded Successfully!";
}
}
  else
   {

$msg = "Invalid File Format";
   }
	}

	if(empty($row1['doc16'])&&(!empty($row1['doc2']))&&(!empty($row1['doc3']))&&(!empty($row1['doc4']))&&(!empty($row1['doc5']))&&(!empty($row1['doc6']))&&(!empty($row1['doc7']))&&(!empty($row1['doc8']))&&(!empty($row1['doc9']))&&(!empty($row1['doc10']))&&(!empty($row1['doc11']))&&(!empty($row1['doc12']))&&(!empty($row1['doc13']))&&(!empty($row1['doc14']))&&(!empty($row1['doc15']))&&(!empty($row1['doc1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE files SET doc16 =  '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'");

if (!mysqli_query($con,$sql3)){
  die('Error: ' . mysqli_error($con));
   $msg = "Error";
}

else
{

$msg = "Files Uploaded Successfully!";
}
}
  else
   {

$msg = "Invalid File Format";
   }
	}
	if(empty($row1['doc17'])&&(!empty($row1['doc2']))&&(!empty($row1['doc3']))&&(!empty($row1['doc4']))&&(!empty($row1['doc5']))&&(!empty($row1['doc6']))&&(!empty($row1['doc7']))&&(!empty($row1['doc8']))&&(!empty($row1['doc9']))&&(!empty($row1['doc10']))&&(!empty($row1['doc11']))&&(!empty($row1['doc12']))&&(!empty($row1['doc13']))&&(!empty($row1['doc14']))&&(!empty($row1['doc15']))&&(!empty($row1['doc16']))&&(!empty($row1['doc1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE files SET  doc17 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'");

if (!mysqli_query($con,$sql3)){
  die('Error: ' . mysqli_error($con));
   $msg = "Error";
}

else
{

$msg = "Files Uploaded Successfully!";
}
}
  else
   {

$msg = "Invalid File Format";
   }
	}
	if(empty($row1['doc18'])&&(!empty($row1['doc2']))&&(!empty($row1['doc3']))&&(!empty($row1['doc4']))&&(!empty($row1['doc5']))&&(!empty($row1['doc6']))&&(!empty($row1['doc7']))&&(!empty($row1['doc8']))&&(!empty($row1['doc9']))&&(!empty($row1['doc10']))&&(!empty($row1['doc11']))&&(!empty($row1['doc12']))&&(!empty($row1['doc13']))&&(!empty($row1['doc14']))&&(!empty($row1['doc15']))&&(!empty($row1['doc16']))&&(!empty($row1['doc17']))&&(!empty($row1['doc1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE files SET doc18 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'");

if (!mysqli_query($con,$sql3)){
  die('Error: ' . mysqli_error($con));
   $msg = "Error";
}

else
{

$msg = "Files Uploaded Successfully!";
}
}
  else
   {

$msg = "Invalid File Format";
   }
	}
	if(empty($row1['doc19'])&&(!empty($row1['doc2']))&&(!empty($row1['doc3']))&&(!empty($row1['doc4']))&&(!empty($row1['doc5']))&&(!empty($row1['doc6']))&&(!empty($row1['doc7']))&&(!empty($row1['doc8']))&&(!empty($row1['doc9']))&&(!empty($row1['doc10']))&&(!empty($row1['doc11']))&&(!empty($row1['doc12']))&&(!empty($row1['doc13']))&&(!empty($row1['doc14']))&&(!empty($row1['doc15']))&&(!empty($row1['doc16']))&&(!empty($row1['doc17']))&&(!empty($row1['doc18']))&&(!empty($row1['doc1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE files SET  doc19 =  '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'");

if (!mysqli_query($con,$sql3)){
  die('Error: ' . mysqli_error($con));
   $msg = "Error";
}

else
{

$msg = "Files Uploaded Successfully!";
}
}
  else
   {

$msg = "Invalid File Format";
   }
	}
		if(empty($row1['doc20'])&&(!empty($row1['doc2']))&&(!empty($row1['doc3']))&&(!empty($row1['doc4']))&&(!empty($row1['doc5']))&&(!empty($row1['doc6']))&&(!empty($row1['doc7']))&&(!empty($row1['doc8']))&&(!empty($row1['doc9']))&&(!empty($row1['doc10']))&&(!empty($row1['doc11']))&&(!empty($row1['doc12']))&&(!empty($row1['doc13']))&&(!empty($row1['doc14']))&&(!empty($row1['doc15']))&&(!empty($row1['doc16']))&&(!empty($row1['doc17']))&&(!empty($row1['doc18']))&&(!empty($row1['doc19']))&&(!empty($row1['doc1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE files SET  doc20 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'");

if (!mysqli_query($con,$sql3)){
  die('Error: ' . mysqli_error($con));
   $msg = "Error";
}

else
{

$msg = "Files Uploaded Successfully!";
}
}
  else
   {

$msg = "Invalid File Format";
   }
	}
	if(empty($row1['doc21'])&&(!empty($row1['doc2']))&&(!empty($row1['doc3']))&&(!empty($row1['doc4']))&&(!empty($row1['doc5']))&&(!empty($row1['doc6']))&&(!empty($row1['doc7']))&&(!empty($row1['doc8']))&&(!empty($row1['doc9']))&&(!empty($row1['doc10']))&&(!empty($row1['doc11']))&&(!empty($row1['doc12']))&&(!empty($row1['doc13']))&&(!empty($row1['doc14']))&&(!empty($row1['doc15']))&&(!empty($row1['doc16']))&&(!empty($row1['doc17']))&&(!empty($row1['doc18']))&&(!empty($row1['doc19']))&&(!empty($row1['doc20']))&&(!empty($row1['doc1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE files SET  doc21 ='$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'");

if (!mysqli_query($con,$sql3)){
  die('Error: ' . mysqli_error($con));
   $msg = "Error";
}

else
{

$msg = "Files Uploaded Successfully!";
}
}
  else
   {

$msg = "Invalid File Format";
   }
	}
	if(empty($row1['doc22'])&&(!empty($row1['doc3']))&&(!empty($row1['doc4']))&&(!empty($row1['doc5']))&&(!empty($row1['doc6']))&&(!empty($row1['doc7']))&&(!empty($row1['doc8']))&&(!empty($row1['doc9']))&&(!empty($row1['doc10']))&&(!empty($row1['doc11']))&&(!empty($row1['doc12']))&&(!empty($row1['doc13']))&&(!empty($row1['doc14']))&&(!empty($row1['doc15']))&&(!empty($row1['doc16']))&&(!empty($row1['doc17']))&&(!empty($row1['doc18']))&&(!empty($row1['doc19']))&&(!empty($row1['doc21']))&&(!empty($row1['doc20']))&&(!empty($row1['doc1']))&&(!empty($row1['doc2'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE files SET  doc22 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'");

if (!mysqli_query($con,$sql3)){
  die('Error: ' . mysqli_error($con));
   $msg = "Error";
}

else
{

$msg = "Files Uploaded Successfully!";
}
}
  else
   {

$msg = "Invalid File Format";
   }
	}
	if(empty($row1['doc23'])&&(!empty($row1['doc2']))&&(!empty($row1['doc3']))&&(!empty($row1['doc4']))&&(!empty($row1['doc5']))&&(!empty($row1['doc6']))&&(!empty($row1['doc7']))&&(!empty($row1['doc8']))&&(!empty($row1['doc9']))&&(!empty($row1['doc10']))&&(!empty($row1['doc11']))&&(!empty($row1['doc12']))&&(!empty($row1['doc13']))&&(!empty($row1['doc14']))&&(!empty($row1['doc15']))&&(!empty($row1['doc16']))&&(!empty($row1['doc17']))&&(!empty($row1['doc18']))&&(!empty($row1['doc19']))&&(!empty($row1['doc21']))&&(!empty($row1['doc22']))&&(!empty($row1['doc20']))&&(!empty($row1['doc1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE files SET  doc23 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'");

if (!mysqli_query($con,$sql3)){
  die('Error: ' . mysqli_error($con));
   $msg = "Error";
}

else
{

$msg = "Files Uploaded Successfully!";
}
}
  else
   {

$msg = "Invalid File Format";
   }
	}

	if(empty($row1['doc24'])&&(!empty($row1['doc2']))&&(!empty($row1['doc3']))&&(!empty($row1['doc4']))&&(!empty($row1['doc5']))&&(!empty($row1['doc6']))&&(!empty($row1['doc7']))&&(!empty($row1['doc8']))&&(!empty($row1['doc9']))&&(!empty($row1['doc10']))&&(!empty($row1['doc11']))&&(!empty($row1['doc12']))&&(!empty($row1['doc13']))&&(!empty($row1['doc14']))&&(!empty($row1['doc15']))&&(!empty($row1['doc16']))&&(!empty($row1['doc17']))&&(!empty($row1['doc18']))&&(!empty($row1['doc19']))&&(!empty($row1['doc21']))&&(!empty($row1['doc22']))&&(!empty($row1['doc20']))&&(!empty($row1['doc23']))&&(!empty($row1['doc1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE files SET doc24 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'");

if (!mysqli_query($con,$sql3)){
  die('Error: ' . mysqli_error($con));
   $msg = "Error";
}

else
{

$msg = "Files Uploaded Successfully!";
}
}
  else
   {

$msg = "Invalid File Format";
   }
	}


	if(empty($row1['doc25'])&&(!empty($row1['doc24']))&&(!empty($row1['doc2']))&&(!empty($row1['doc3']))&&(!empty($row1['doc4']))&&(!empty($row1['doc5']))&&(!empty($row1['doc6']))&&(!empty($row1['doc7']))&&(!empty($row1['doc8']))&&(!empty($row1['doc9']))&&(!empty($row1['doc10']))&&(!empty($row1['doc11']))&&(!empty($row1['doc12']))&&(!empty($row1['doc13']))&&(!empty($row1['doc14']))&&(!empty($row1['doc15']))&&(!empty($row1['doc16']))&&(!empty($row1['doc17']))&&(!empty($row1['doc18']))&&(!empty($row1['doc19']))&&(!empty($row1['doc21']))&&(!empty($row1['doc22']))&&(!empty($row1['doc20']))&&(!empty($row1['doc23']))&&(!empty($row1['doc1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE files SET doc25 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'");

if (!mysqli_query($con,$sql3)){
  die('Error: ' . mysqli_error($con));
   $msg = "Error";
}

else
{

$msg = "Files Uploaded Successfully!";
}
}
  else
   {

$msg = "Invalid File Format";
   }
	}

	if(!empty($row1['doc25']))
	{


      $msg = "Cannot Upload more than Twenty five files!";
}

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

    <title>Insert Documents</title>


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
function pops()
{
	alert("  MSWORD/PDF File Types Are Allowed For Upload ");
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




                       <form   action="InsertDoc.php" method="post"  enctype="multipart/form-data" autocomplete="off">



    <!-- Fixed navbar -->


   <div class="container-fluid"  id="works" >

          <div style="width:100%;margin-right:80px;border:none;background-color:#FFF;padding:0px;background-color:transparent;border:none;" class="well sidebar-nav">
            <div style="font-family:'Source Sans Pro', sans-serif;font-size:40px;font-weight:bold;color:#960;font-weight:1000;font-size:30px;">
            <input type="hidden" name="lat1" ID="lat"  size="40"><br><br/><br/>
      <input type="hidden" name="lon1" ID="lon"  size="40"><br><br/><br/>
  <?php if(isset($msg)) echo $msg; ?>
  </div>
            <font style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;"><b>Upload document for site/location</font>
            <br/>
            <br/>


            <div id="map-canv"   style="height:300px;width:45%;float:left;" ></div>

   <div id="map-canvas"  style="height:300px;width:45%;float:right;" >   </div>
         <br/><br/> <br/>



       <b style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:100%;width:100%;margin-top:6%;">
    Insert Document:
     </b>
      <label  style="width:100%;">
    <input type="file" name="pic1" onClick="pops()" style="margin-left:40px;;width:400px;" id="pic1" required/>
    </label>



       <br/>  <br/>







     <div style="margin-top:5px;border:none;">

<input type="button" name="submits"  style="font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;float:left;width:42%;background-color:#00afc9;color:white;" value="BACK"  onClick="javascript:goback()"/ >
<input type="submit" name="added" style="font-family:'Source Sans Pro', sans-serif;font-size:17px;font-weight:regular;float:left;width:47%;background-color:#00afc9;color:white;" value="UPLOAD" onClick="javascript:show()" />
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
