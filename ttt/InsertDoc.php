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


move_uploaded_file($file_path1,'images/'.$file_name1);

$fp      = fopen($file_path1, 'r');
$content = fread($fp, filesize($file_path1));
$content = addslashes($content);
fclose($fp);
$result = mysqli_query($con,"SELECT * FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
$num_rows = mysqli_num_rows($result);
$row1 = mysqli_fetch_assoc($result);
if(($num_rows>0)&&($_FILES['pic1']['size']>0)&&(!empty($latitude))&&((!empty($longitude))))
    { if(empty($row1['filename']))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', UploadDoc = '$content' ,filename = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'"); 
	
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
	 if(empty($row1['filename1'])&&(!empty($row1['filename'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', doc1 = '$content' ,filename1 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'"); 
	
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
	  if(empty($row1['filename2'])&&(!empty($row1['filename']))&&(!empty($row1['filename1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', doc2 = '$content' ,filename2 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'"); 
	
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
  if(empty($row1['filename3'])&&(!empty($row1['filename']))&&(!empty($row1['filename2']))&&(!empty($row1['filename1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', doc3 = '$content' ,filename3 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'"); 
	
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
	 if(empty($row1['filename4'])&&(!empty($row1['filename']))&&(!empty($row1['filename2']))&&(!empty($row1['filename3']))&&(!empty($row1['filename1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', doc4 = '$content' ,filename4 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'"); 
	
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
	 if(empty($row1['filename5'])&&(!empty($row1['filename']))&&(!empty($row1['filename2']))&&(!empty($row1['filename3']))&&(!empty($row1['filename4']))&&(!empty($row1['filename1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', doc5 = '$content' ,filename5 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'"); 
	
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
	 if(empty($row1['filename6'])&&(!empty($row1['filename']))&&(!empty($row1['filename2']))&&(!empty($row1['filename3']))&&(!empty($row1['filename4']))&&(!empty($row1['filename5']))&&(!empty($row1['filename1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', doc6 = '$content' ,filename6 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'"); 
	
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
	 if(empty($row1['filename7'])&&(!empty($row1['filename']))&&(!empty($row1['filename2']))&&(!empty($row1['filename3']))&&(!empty($row1['filename4']))&&(!empty($row1['filename5']))&&(!empty($row1['filename6']))&&(!empty($row1['filename1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', doc7 = '$content' ,filename7 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'"); 
	
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
	 if(empty($row1['filename8'])&&(!empty($row1['filename']))&&(!empty($row1['filename2']))&&(!empty($row1['filename3']))&&(!empty($row1['filename4']))&&(!empty($row1['filename5']))&&(!empty($row1['filename6']))&&(!empty($row1['filename7']))&&(!empty($row1['filename1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', doc8 = '$content' ,filename8 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'"); 
	
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
	if(empty($row1['filename9'])&&(!empty($row1['filename']))&&(!empty($row1['filename2']))&&(!empty($row1['filename3']))&&(!empty($row1['filename4']))&&(!empty($row1['filename5']))&&(!empty($row1['filename6']))&&(!empty($row1['filename7']))&&(!empty($row1['filename8']))&&(!empty($row1['filename1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', doc9 = '$content' ,filename9 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'"); 
	
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
if(empty($row1['filename10'])&&(!empty($row1['filename']))&&(!empty($row1['filename2']))&&(!empty($row1['filename3']))&&(!empty($row1['filename4']))&&(!empty($row1['filename5']))&&(!empty($row1['filename6']))&&(!empty($row1['filename7']))&&(!empty($row1['filename8']))&&(!empty($row1['filename9']))&&(!empty($row1['filename1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', doc10 = '$content' ,filename10 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'"); 
	
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
	if(empty($row1['filename11'])&&(!empty($row1['filename']))&&(!empty($row1['filename2']))&&(!empty($row1['filename3']))&&(!empty($row1['filename4']))&&(!empty($row1['filename5']))&&(!empty($row1['filename6']))&&(!empty($row1['filename7']))&&(!empty($row1['filename8']))&&(!empty($row1['filename9']))&&(!empty($row1['filename10']))&&(!empty($row1['filename1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', doc11 = '$content' ,filename11 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'"); 
	
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
	if(empty($row1['filename12'])&&(!empty($row1['filename']))&&(!empty($row1['filename2']))&&(!empty($row1['filename3']))&&(!empty($row1['filename4']))&&(!empty($row1['filename5']))&&(!empty($row1['filename6']))&&(!empty($row1['filename7']))&&(!empty($row1['filename8']))&&(!empty($row1['filename9']))&&(!empty($row1['filename10']))&&(!empty($row1['filename11']))&&(!empty($row1['filename1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', doc12 = '$content' ,filename12 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'"); 
	
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
	
	if(empty($row1['filename13'])&&(!empty($row1['filename']))&&(!empty($row1['filename2']))&&(!empty($row1['filename3']))&&(!empty($row1['filename4']))&&(!empty($row1['filename5']))&&(!empty($row1['filename6']))&&(!empty($row1['filename7']))&&(!empty($row1['filename8']))&&(!empty($row1['filename9']))&&(!empty($row1['filename10']))&&(!empty($row1['filename11']))&&(!empty($row1['filename12']))&&(!empty($row1['filename1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', doc13 = '$content' ,filename13 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'"); 
	
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
	if(empty($row1['filename14'])&&(!empty($row1['filename']))&&(!empty($row1['filename2']))&&(!empty($row1['filename3']))&&(!empty($row1['filename4']))&&(!empty($row1['filename5']))&&(!empty($row1['filename6']))&&(!empty($row1['filename7']))&&(!empty($row1['filename8']))&&(!empty($row1['filename9']))&&(!empty($row1['filename10']))&&(!empty($row1['filename11']))&&(!empty($row1['filename12']))&&(!empty($row1['filename13']))&&(!empty($row1['filename1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', doc14 = '$content' ,filename14 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'"); 
	
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
	
	if(empty($row1['filename15'])&&(!empty($row1['filename']))&&(!empty($row1['filename2']))&&(!empty($row1['filename3']))&&(!empty($row1['filename4']))&&(!empty($row1['filename5']))&&(!empty($row1['filename6']))&&(!empty($row1['filename7']))&&(!empty($row1['filename8']))&&(!empty($row1['filename9']))&&(!empty($row1['filename10']))&&(!empty($row1['filename11']))&&(!empty($row1['filename12']))&&(!empty($row1['filename13']))&&(!empty($row1['filename14']))&&(!empty($row1['filename1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', doc15 = '$content' ,filename15 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'"); 
	
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
	
	if(empty($row1['filename16'])&&(!empty($row1['filename']))&&(!empty($row1['filename2']))&&(!empty($row1['filename3']))&&(!empty($row1['filename4']))&&(!empty($row1['filename5']))&&(!empty($row1['filename6']))&&(!empty($row1['filename7']))&&(!empty($row1['filename8']))&&(!empty($row1['filename9']))&&(!empty($row1['filename10']))&&(!empty($row1['filename11']))&&(!empty($row1['filename12']))&&(!empty($row1['filename13']))&&(!empty($row1['filename14']))&&(!empty($row1['filename15']))&&(!empty($row1['filename1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', doc16 = '$content' ,filename16 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'"); 
	
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
	if(empty($row1['filename17'])&&(!empty($row1['filename']))&&(!empty($row1['filename2']))&&(!empty($row1['filename3']))&&(!empty($row1['filename4']))&&(!empty($row1['filename5']))&&(!empty($row1['filename6']))&&(!empty($row1['filename7']))&&(!empty($row1['filename8']))&&(!empty($row1['filename9']))&&(!empty($row1['filename10']))&&(!empty($row1['filename11']))&&(!empty($row1['filename12']))&&(!empty($row1['filename13']))&&(!empty($row1['filename14']))&&(!empty($row1['filename15']))&&(!empty($row1['filename16']))&&(!empty($row1['filename1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', doc17 = '$content' ,filename17 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'"); 
	
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
	if(empty($row1['filename18'])&&(!empty($row1['filename']))&&(!empty($row1['filename2']))&&(!empty($row1['filename3']))&&(!empty($row1['filename4']))&&(!empty($row1['filename5']))&&(!empty($row1['filename6']))&&(!empty($row1['filename7']))&&(!empty($row1['filename8']))&&(!empty($row1['filename9']))&&(!empty($row1['filename10']))&&(!empty($row1['filename11']))&&(!empty($row1['filename12']))&&(!empty($row1['filename13']))&&(!empty($row1['filename14']))&&(!empty($row1['filename15']))&&(!empty($row1['filename16']))&&(!empty($row1['filename17']))&&(!empty($row1['filename1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', doc18 = '$content' ,filename18 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'"); 
	
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
	if(empty($row1['filename19'])&&(!empty($row1['filename']))&&(!empty($row1['filename2']))&&(!empty($row1['filename3']))&&(!empty($row1['filename4']))&&(!empty($row1['filename5']))&&(!empty($row1['filename6']))&&(!empty($row1['filename7']))&&(!empty($row1['filename8']))&&(!empty($row1['filename9']))&&(!empty($row1['filename10']))&&(!empty($row1['filename11']))&&(!empty($row1['filename12']))&&(!empty($row1['filename13']))&&(!empty($row1['filename14']))&&(!empty($row1['filename15']))&&(!empty($row1['filename16']))&&(!empty($row1['filename17']))&&(!empty($row1['filename18']))&&(!empty($row1['filename1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', doc19 = '$content' ,filename19 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'"); 
	
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
		if(empty($row1['filename20'])&&(!empty($row1['filename']))&&(!empty($row1['filename2']))&&(!empty($row1['filename3']))&&(!empty($row1['filename4']))&&(!empty($row1['filename5']))&&(!empty($row1['filename6']))&&(!empty($row1['filename7']))&&(!empty($row1['filename8']))&&(!empty($row1['filename9']))&&(!empty($row1['filename10']))&&(!empty($row1['filename11']))&&(!empty($row1['filename12']))&&(!empty($row1['filename13']))&&(!empty($row1['filename14']))&&(!empty($row1['filename15']))&&(!empty($row1['filename16']))&&(!empty($row1['filename17']))&&(!empty($row1['filename18']))&&(!empty($row1['filename19']))&&(!empty($row1['filename1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', doc20 = '$content' ,filename20 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'"); 
	
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
	if(empty($row1['filename21'])&&(!empty($row1['filename']))&&(!empty($row1['filename2']))&&(!empty($row1['filename3']))&&(!empty($row1['filename4']))&&(!empty($row1['filename5']))&&(!empty($row1['filename6']))&&(!empty($row1['filename7']))&&(!empty($row1['filename8']))&&(!empty($row1['filename9']))&&(!empty($row1['filename10']))&&(!empty($row1['filename11']))&&(!empty($row1['filename12']))&&(!empty($row1['filename13']))&&(!empty($row1['filename14']))&&(!empty($row1['filename15']))&&(!empty($row1['filename16']))&&(!empty($row1['filename17']))&&(!empty($row1['filename18']))&&(!empty($row1['filename19']))&&(!empty($row1['filename20']))&&(!empty($row1['filename1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', doc21 = '$content' ,filename21 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'"); 
	
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
	if(empty($row1['filename22'])&&(!empty($row1['filename']))&&(!empty($row1['filename2']))&&(!empty($row1['filename3']))&&(!empty($row1['filename4']))&&(!empty($row1['filename5']))&&(!empty($row1['filename6']))&&(!empty($row1['filename7']))&&(!empty($row1['filename8']))&&(!empty($row1['filename9']))&&(!empty($row1['filename10']))&&(!empty($row1['filename11']))&&(!empty($row1['filename12']))&&(!empty($row1['filename13']))&&(!empty($row1['filename14']))&&(!empty($row1['filename15']))&&(!empty($row1['filename16']))&&(!empty($row1['filename17']))&&(!empty($row1['filename18']))&&(!empty($row1['filename19']))&&(!empty($row1['filename21']))&&(!empty($row1['filename20']))&&(!empty($row1['filename1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', doc22 = '$content' ,filename22 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'"); 
	
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
	if(empty($row1['filename23'])&&(!empty($row1['filename']))&&(!empty($row1['filename2']))&&(!empty($row1['filename3']))&&(!empty($row1['filename4']))&&(!empty($row1['filename5']))&&(!empty($row1['filename6']))&&(!empty($row1['filename7']))&&(!empty($row1['filename8']))&&(!empty($row1['filename9']))&&(!empty($row1['filename10']))&&(!empty($row1['filename11']))&&(!empty($row1['filename12']))&&(!empty($row1['filename13']))&&(!empty($row1['filename14']))&&(!empty($row1['filename15']))&&(!empty($row1['filename16']))&&(!empty($row1['filename17']))&&(!empty($row1['filename18']))&&(!empty($row1['filename19']))&&(!empty($row1['filename21']))&&(!empty($row1['filename22']))&&(!empty($row1['filename20']))&&(!empty($row1['filename1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', doc23 = '$content' ,filename23 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'"); 
	
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
	
	if(empty($row1['filename24'])&&(!empty($row1['filename']))&&(!empty($row1['filename2']))&&(!empty($row1['filename3']))&&(!empty($row1['filename4']))&&(!empty($row1['filename5']))&&(!empty($row1['filename6']))&&(!empty($row1['filename7']))&&(!empty($row1['filename8']))&&(!empty($row1['filename9']))&&(!empty($row1['filename10']))&&(!empty($row1['filename11']))&&(!empty($row1['filename12']))&&(!empty($row1['filename13']))&&(!empty($row1['filename14']))&&(!empty($row1['filename15']))&&(!empty($row1['filename16']))&&(!empty($row1['filename17']))&&(!empty($row1['filename18']))&&(!empty($row1['filename19']))&&(!empty($row1['filename21']))&&(!empty($row1['filename22']))&&(!empty($row1['filename20']))&&(!empty($row1['filename23']))&&(!empty($row1['filename1'])))
	{
		if ( $_FILES["pic1"]["type"] == "application/pdf" ||
			$_FILES["pic1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
			$_FILES["pic1"]["type"] == "application/vnd.oasis.opendocument.text" ||
		    $_FILES["pic1"]["type"] == "application/msword" ||
			$_FILES["pic1"]["type"] == "application/txt")
			{
$sql3=("UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', doc24 = '$content' ,filename24 = '$file_name1' where Latitude ='$latitude' AND Longitude  = '$longitude'"); 
	
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
	
	
}
  
}


 
 





?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enter Information Details</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'>

		<link rel="stylesheet" type="text/css" href="css/slicknav.css">
		<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		
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
    
</style>
<link href="css/bootstrap-responsive.css" rel="stylesheet">
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



</script>
<body onload="initialize()">

<div>
    
     		
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
			
														<a href="ViewData.php" class="hhh"  style="color:white;margin-right:50%;font-weight:200">HOME</a>
                         

					
			
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
                       	
                         <form action="InsertDoc.php" method="post" enctype="multipart/form-data">

<div style="margin-left:100px;font-family: Arial, Helvetica, sans-serif;font-weight:bold;color:#960;font-family: Arial, Helvetica, sans-serif;font-weight:1000;font-size:36px;">
  <?php echo $msg ?>
  </div>
<div class="container-fluid">
      <div class="row-fluid">
      <div  class="span3">
         <ul  class="nav nav-list" >
         <div style="margin-left:1%;width:80%;float:left;margin-right:1%;" class="well sidebar-nav" > 
<div style="float:left;width:52%;" >
<div style="margin-left:40px;">
<b style="font-size:16px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;" align="left">UPLOAD DOCUMENT FOR THE SITE/LOCATION<br/><br/><br/></b>
</div>
    <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:40px;">
    Insert Document:</b>
    <br/><br/><br/>
     <label>
    <input type="file" name="pic1" onClick="pops()" style="margin-left:40px;;width:400px;" id="pic1" required/>
    </label>
     <br/><br/>
          </div> 
    <div style="float:right;width:28%;margin-right:1%;">
     <div id="map-canv" style="position:relative;float:left;height:200px;width:100%;padding:10px;margin-top:60px;"></div>
 
     <div id="map-canvas" style="position:relative;float:left;height:200px;width:100%;padding:10px;margin-top:40px;">
   
    </div> 
     
     </div> 
        
        </div> 
     
   
   
  
  
</ul>
            
 
   
<br/>
<br/>

 </div>
  
 </div>
</div>

     <div style="margin-top:5px;border:none;margin-left:140px;">
<input type="button" NAME="submits" class="btn btn-embossed btn-primary" value="Back"  onclick="javascript:goback()"/ >     
<input type="submit" name="added" class="btn btn-primary btn-large" value="Upload" />
</div>

<br/>
<br/>
  <br/>
<br/>
<input type="hidden" name="lat1" ID="lat"  size="40"><br><br/><br/>
<input type="hidden" name="lon1" ID="lon"  size="40"><br><br/><br/>
</form>  



</body>
<div class="container-fluid">
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
        </body>

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

    
</html>
 

 
