
<?php
if(isset($_POST['added']))
{
	$con=mysqli_connect("172.16.0.57","u1046393_turas","Soamin123@","db1046393_dublin");
    $latitude = mysqli_real_escape_string($con, $_POST['lat1']);
    $longitude = mysqli_real_escape_string($con, $_POST['lon1']);

    $file = $_FILES['pic'];
    $file_path = $file['tmp_name'];
    $file_name = $file['name'];
    $file_type = $file['type'];
    $file_id = $file['tmp_name'];
	$file_name = str_replace(' ', '_', $file_name);
    move_uploaded_file($file_path,'images/'.$file_name);
    $result = mysqli_query($con,"SELECT * FROM photos where latitude = '$latitude' AND longitude = '$longitude'");
    $num_rows = mysqli_num_rows($result);
	$row = mysqli_fetch_assoc($result);
    if(($num_rows==0)&&($_FILES['pic']['size']>0)&&(!empty($latitude))&&((!empty($longitude))))
    {
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{
		$sql=("Insert into photos(UploadPic,latitude,longitude ) values ('$file_name','$latitude' ,'$longitude')");

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

    if(($num_rows>0)&&(!empty($latitude))&&($_FILES['pic']['size']>0)&&((!empty($longitude))))
    {
		if(empty($row['UploadPic']))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photos SET UploadPic='$file_name' where latitude ='$latitude' AND longitude  = '$longitude'";

    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
    }

	else
{

$msg = "Files Uploaded Successfully!";
}

}
else
{
	$msg = "Invalid Photo Format";
}

}
if((empty($row['picname1']))&&(!empty($row['UploadPic'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photos SET picname1='$file_name' where latitude ='$latitude' AND longitude  = '$longitude'";

    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
    }

	else
{

$msg = "Files Uploaded Successfully!";
}

}
else
{
	$msg = "Invalid Photo Format";
}

}
if((empty($row['picname2']))&&(!empty($row['UploadPic']))&&(!empty($row['picname1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photos SET picname2='$file_name' where latitude ='$latitude' AND longitude  = '$longitude'";

    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
    }

	else
{

$msg = "Files Uploaded Successfully!";
}

}
else
{
	$msg = "Invalid Photo Format";
}

}


	if((empty($row['picname3']))&&(!empty($row['UploadPic']))&&(!empty($row['picname2']))&&(!empty($row['picname1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photos SET  picname3= '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'";

    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
    }

	else
{

$msg = "Files Uploaded Successfully!";
}

}
else
{
	$msg = "Invalid Photo Format";
}

}
	if((empty($row['picname4']))&&(!empty($row['UploadPic']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photos SET picname4= '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'";

    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
    }

	else
{

$msg = "Files Uploaded Successfully!";
}

}
else
{
	$msg = "Invalid Photo Format";
}

}
if((empty($row['picname5']))&&(!empty($row['UploadPic']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photos SET  picname5= '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'";

    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
    }

	else
{

$msg = "Files Uploaded Successfully!";
}

}
else
{
	$msg = "Invalid Photo Format";
}

}


	if((empty($row['picname6']))&&(!empty($row['UploadPic']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4'])&&(!empty($row['picname5']))&&(!empty($row['picname1']))))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photos SET picname6='$file_name' where latitude ='$latitude' AND longitude  = '$longitude'";

    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
    }

	else
{

$msg = "Files Uploaded Successfully!";
}

}
else
{
	$msg = "Invalid Photo Format";
}

}
if((empty($row['picname7']))&&(!empty($row['UploadPic']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photos SET picname7='$file_name' where latitude ='$latitude' AND longitude  = '$longitude'";

    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
    }

	else
{

$msg = "Files Uploaded Successfully!";
}

}
else
{
	$msg = "Invalid Photo Format";
}

}


if((empty($row['picname8']))&&(!empty($row['UploadPic']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(empty($row['picname7']))&&(empty($row['picname6']))&&(!empty($row['picname1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photos SET picname8='$file_name' where latitude ='$latitude' AND longitude  = '$longitude'";

    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
    }

	else
{

$msg = "Files Uploaded Successfully!";
}

}
else
{
	$msg = "Invalid Photo Format";
}

}
if((empty($row['picname9']))&&(!empty($row['UploadPic']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photos SET picname9= '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'";

    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
    }

	else
{

$msg = "Files Uploaded Successfully!";
}

}
else
{
	$msg = "Invalid Photo Format";
}

}
if((empty($row['picname10']))&&(!empty($row['UploadPic']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photos SET picname10='$file_name' where latitude ='$latitude' AND longitude  = '$longitude'";

    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
    }

	else
{

$msg = "Files Uploaded Successfully!";
}

}
else
{
	$msg = "Invalid Photo Format";
}

}
if((empty($row['picname11']))&& (!empty($row['UploadPic']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photos SET picname11='$file_name' where latitude ='$latitude' AND longitude  = '$longitude'";

    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
    }

	else
{

$msg = "Files Uploaded Successfully!";
}

}
else
{
	$msg = "Invalid Photo Format";
}

}
if((empty($row['picname12']))&&(!empty($row['UploadPic']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11']))&&(!empty($row['picname1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photos SET  picname12= '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'";

    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
    }

	else
{

$msg = "Files Uploaded Successfully!";
}

}
else
{
	$msg = "Invalid Photo Format";
}

}
if((empty($row['picname13']))&&(!empty($row['UploadPic']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11']))&&(!empty($row['picname12']))&&(!empty($row['picname1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photos SET picname13='$file_name' where latitude ='$latitude' AND longitude  = '$longitude'";

    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
    }

	else
{

$msg = "Files Uploaded Successfully!";
}

}
else
{
	$msg = "Invalid Photo Format";
}

}
if((empty($row['picname14']))&&(!empty($row['UploadPic']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11']))&&(!empty($row['picname12']))&&(!empty($row['picname13']))&&(!empty($row['picname1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photos SET  picname14= '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'";

    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
    }

	else
{

$msg = "Files Uploaded Successfully!";
}

}
else
{
	$msg = "Invalid Photo Format";
}

}
if((empty($row['picname15']))&&(!empty($row['UploadPic']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11']))&&(!empty($row['picname12']))&&(!empty($row['picname13']))&&(!empty($row['picname14']))&&(!empty($row['picname1'])))

		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photos SET  picname15='$file_name' where latitude ='$latitude' AND longitude  = '$longitude'";

    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
    }

	else
{

$msg = "Files Uploaded Successfully!";
}

}
else
{
	$msg = "Invalid Photo Format";
}

}
if((empty($row['picname16']))&&(!empty($row['UploadPic']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11']))&&(!empty($row['picname12']))&&(!empty($row['picname13']))&&(!empty($row['picname14']))&&(!empty($row['picname15']))&&(!empty($row['picname1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photos SET  picname16= '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'";

    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
    }

	else
{

$msg = "Files Uploaded Successfully!";
}

}
else
{
	$msg = "Invalid Photo Format";
}

}
if((empty($row['picname17']))&&(!empty($row['UploadPic']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11']))&&(!empty($row['picname12']))&&(!empty($row['picname13']))&&(!empty($row['picname14']))&&(!empty($row['picname15']))&&(!empty($row['picname16']))&&(!empty($row['picname1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photos SET picname17= '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'";

    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
    }

	else
{

$msg = "Files Uploaded Successfully!";
}

}
else
{
	$msg = "Invalid Photo Format";
}

}
if((empty($row['picname18']))&&(!empty($row['UploadPic']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11']))&&(!empty($row['picname12']))&&(!empty($row['picname13']))&&(!empty($row['picname14']))&&(!empty($row['picname15']))&&(!empty($row['picname16']))&&(!empty($row['picname17']))&&(!empty($row['picname1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{
	$sql3="UPDATE photos SET  picname18='$file_name' where latitude ='$latitude' AND longitude  = '$longitude'";

    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
    }

	else
{

$msg = "Files Uploaded Successfully!";
}

}
else
{
	$msg = "Invalid Photo Format";
}

}
if((empty($row['picname19']))&&(!empty($row['UploadPic']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11']))&&(!empty($row['picname12']))&&(!empty($row['picname13']))&&(!empty($row['picname14']))&&(!empty($row['picname15']))&&(!empty($row['picname16']))&&(!empty($row['picname17']))&&(!empty($row['picname18']))&&(!empty($row['picname1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photos SET  picname19= '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'";

    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
    }

	else
{

$msg = "Files Uploaded Successfully!";
}

}
else
{
	$msg = "Invalid Photo Format";
}

}
if((empty($row['picname20']))&&(!empty($row['UploadPic']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11']))&&(!empty($row['picname12']))&&(!empty($row['picname13']))&&(!empty($row['picname14']))&&(!empty($row['picname15']))&&(!empty($row['picname16']))&&(!empty($row['picname17']))&&(!empty($row['picname18']))&&(!empty($row['picname19']))&&(!empty($row['picname1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photos SET  picname20= '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'";

    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
    }

	else
{

$msg = "Files Uploaded Successfully!";
}

}
else
{
	$msg = "Invalid Photo Format";
}

}
if((empty($row['picname21']))&&(!empty($row['UploadPic']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11']))&&(!empty($row['picname12']))&&(!empty($row['picname13']))&&(!empty($row['picname14']))&&(!empty($row['picname15']))&&(!empty($row['picname16']))&&(!empty($row['picname17']))&&(!empty($row['picname18']))&&(!empty($row['picname19']))&&(!empty($row['picname20']))&&(!empty($row['picname1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photos SET  picname21= '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'";

    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
    }

	else
{

$msg = "Files Uploaded Successfully!";
}

}
else
{
	$msg = "Invalid Photo Format";
}

}
if((empty($row['picname22']))&&(!empty($row['UploadPic']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11']))&&(!empty($row['picname12']))&&(!empty($row['picname13']))&&(!empty($row['picname14']))&&(!empty($row['picname15']))&&(!empty($row['picname16']))&&(!empty($row['picname17']))&&(!empty($row['picname18']))&&(!empty($row['picname19']))&&(!empty($row['picname20']))&&(!empty($row['picname21']))&&(!empty($row['picname1'])))

{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photos SET picname22= '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'";

    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
    }

	else
{

$msg = "Files Uploaded Successfully!";
}

}
else
{
	$msg = "Invalid Photo Format";
}

}
if((empty($row['picname23']))&&(!empty($row['UploadPic']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11']))&&(!empty($row['picname12']))&&(!empty($row['picname13']))&&(!empty($row['picname14']))&&(!empty($row['picname15']))&&(!empty($row['picname16']))&&(!empty($row['picname17']))&&(!empty($row['picname18']))&&(!empty($row['picname19']))&&(!empty($row['picname20']))&&(!empty($row['picname21']))&&(!empty($row['picname22']))&&(!empty($row['picname1'])))		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photos SET picname23='$file_name' where latitude ='$latitude' AND longitude  = '$longitude'";

    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
    }

	else
{

$msg = "Files Uploaded Successfully!";
}

}
else
{
	$msg = "Invalid Photo Format";
}

}
if((empty($row['picname24']))&&(!empty($row['UploadPic']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11']))&&(!empty($row['picname12']))&&(!empty($row['picname13']))&&(!empty($row['picname14']))&&(!empty($row['picname15']))&&(!empty($row['picname16']))&&(!empty($row['picname17']))&&(!empty($row['picname18']))&&(!empty($row['picname19']))&&(!empty($row['picname20']))&&(!empty($row['picname21']))&&(!empty($row['picname23']))&&(!empty($row['picname22']))&&(!empty($row['picname1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photos SET picname24='$file_name' where latitude ='$latitude' AND longitude  = '$longitude'";

    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
    }

	else
{

$msg = "Files Uploaded Successfully!";
}

}
else
{
	$msg = "Invalid Photo Format";
}

}

if(!empty($row['picname24']))
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

    <title>Insert Photographs</title>


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
	alert("  JPEG/PNG/GIF/TIFF File Types Are Allowed For Upload ");
}

   function cll()
	{
		  var win1 = window.open("ViewData.php");
  win1.focus();
		this.close();

	}



</script>
 <body onload="initialize()" style="background-color:#f4e851">


	<?php
	require_once('includes/header.php');
	?>




                       <form   action="InsertPhotographs.php" method="post"  enctype="multipart/form-data" autocomplete="off">



    <!-- Fixed navbar -->



   <div class="container-fluid"  id="works" >
      <input type="hidden" name="lat1" ID="lat" value ="default" size="40"><br><br/><br/>
      <input type="hidden" name="lon1" ID="lon" value ="default" size="40"><br><br/><br/>
          <div style="width:100%;margin-right:80px;border:none;background-color:#FFF;padding:0px;background-color:transparent;border:none;" class="well sidebar-nav">
            <div style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;color:#960;">
  <?php echo $msg ?>
  </div>
            <font style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:bold;"><b>Upload photograph for site/location</font>
            <br/>
            <br/>


            <div id="map-canv"   style="height:300px;width:45%;float:left;" ></div>

   <div id="map-canvas"  style="height:300px;width:45%;float:right;" >   </div>
         <br/><br/> <br/>



       <b style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:100%;margin-top:5%;">
    Insert Photograph:
     </b>
    <label style="width:100%;">
    <input type="file" name="pic" style="margin-left:40px;;width:400px;" id="pic" onClick="pops()" required />
    </label>



       <br/>  <br/>







     <div style="margin-top:5px;border:none;">

<input type="button" name="submits"  style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:20%;background-color:#00afc9;color:white;" value="BACK"  onClick="javascript:goback()"/ >
<input type="submit" name="added" style="font-family:'Source Sans Pro', sans-serif;font-size:20px;font-weight:semibold;float:left;width:24%;background-color:#00afc9;color:white;" value="UPLOAD" onClick="javascript:show()" />
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
