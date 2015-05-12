

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
	
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{
    move_uploaded_file($file_path,'images/'.$file_name);
}
else
{
	$msg = "Invalid Picture Format!"; 	
}
    $result = mysqli_query($con,"SELECT * FROM photo where latitude = '$latitude' AND longitude = '$longitude'");
    $num_rows = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
	if((empty($row['Picname']) || empty($num_rows)))
	{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="insert into photo SET latitude = '$latitude', longitude ='$longitude', Picname = '$file_name'"; 
   
    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
		
$msg = "Data Not Posted Successfully!";
    }
	else
{
	
$msg = "Files Uploaded Successfully!"; 
}
}
else 
{
$msg = "Invalid Picture Format!"; 	
}

}
	
    if(($num_rows>0)&&($_FILES['pic']['size']>0)&&(!empty($latitude))&&((!empty($longitude))))
    {
		if(empty($row['Picname']))
	{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="Update SiteDetails SET latitude = '$latitude', longitude ='$longitude',  Picname = '$file_name'  where latitude ='$latitude' AND longitude  = '$longitude'"; 
   
    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
		
$msg = "Data Not Posted Successfully!";
    }
	else
{
	
$msg = "Files Uploaded Successfully!"; 
}
}
else 
{
$msg = "Invalid Picture Format!"; 	
}

}
if(empty($row['picname1'])&&(!empty($row['Picname'])))
	{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photo SET latitude = '$latitude', longitude ='$longitude',  picname1 = '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'"; 
   
    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
		
$msg = "Data Not Posted Successfully!";
    }
	else
{
	
$msg = "Files Uploaded Successfully!"; 
}
}
else 
{
$msg = "Invalid Picture Format!"; 	
}

}
if(empty($row['picname2'])&&(!empty($row['Picname']))&&(!empty($row['picname1'])))
	{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photo SET latitude = '$latitude', longitude ='$longitude', picname2 = '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'"; 
   
    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
		
$msg = "Data Not Posted Successfully!";
    }
	else
{
	
$msg = "Files Uploaded Successfully!"; 
}
}
else 
{
$msg = "Invalid Picture Format!"; 	
}

}
if(empty($row['picname3'])&&(!empty($row['Picname']))&&(!empty($row['picname1']))&&(!empty($row['picname2'])))
	{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photo SET latitude = '$latitude', longitude ='$longitude',  picname3 = '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'"; 
   
    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
		
$msg = "Data Not Posted Successfully!";
    }
	else
{
	
$msg = "Files Uploaded Successfully!"; 
}
}
else 
{
$msg = "Invalid Picture Format!"; 	
}

}
if(empty($row['picname4'])&&(!empty($row['Picname']))&&(!empty($row['picname1']))&&(!empty($row['picname2']))&&(!empty($row['picname3'])))
	{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photo SET latitude = '$latitude', longitude ='$longitude',  picname4 = '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'"; 
   
    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
		
$msg = "Data Not Posted Successfully!";
    }
	else
{
	
$msg = "Files Uploaded Successfully!"; 
}
}
else 
{
$msg = "Invalid Picture Format!"; 	
}

}
if(empty($row['picname5'])&&(!empty($row['Picname']))&&(!empty($row['picname1']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4'])))
	{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photo SET latitude = '$latitude', longitude ='$longitude',  picname5 = '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'"; 
   
    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
		
$msg = "Data Not Posted Successfully!";
    }
	else
{
	
$msg = "Files Uploaded Successfully!"; 
}
}
else 
{
$msg = "Invalid Picture Format!"; 	
}
	}
	if(empty($row['picname6'])&&(!empty($row['Picname']))&&(!empty($row['picname1']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5'])))
	{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photo SET latitude = '$latitude', longitude ='$longitude',  picname6 = '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'"; 
   
    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
		
$msg = "Data Not Posted Successfully!";
    }
	else
{
	
$msg = "Files Uploaded Successfully!"; 
}
}
else 
{
$msg = "Invalid Picture Format!"; 	
}
	}
		if(empty($row['picname7'])&&(!empty($row['Picname']))&&(!empty($row['picname1']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6'])))
	{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photo SET latitude = '$latitude', longitude ='$longitude',  picname7 = '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'"; 
   
    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
		
$msg = "Data Not Posted Successfully!";
    }
	else
{
	
$msg = "Files Uploaded Successfully!"; 
}
}
else 
{
$msg = "Invalid Picture Format!"; 	
}
	}
	if(empty($row['picname8'])&&(!empty($row['Picname']))&&(!empty($row['picname1']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7'])))
	{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photo SET latitude = '$latitude', longitude ='$longitude',  picname8 = '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'"; 
   
    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
		
$msg = "Data Not Posted Successfully!";
    }
	else
{
	
$msg = "Files Uploaded Successfully!"; 
}
}
else 
{
$msg = "Invalid Picture Format!"; 	
}
	}
	if(empty($row['picname9'])&&(!empty($row['Picname']))&&(!empty($row['picname1']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8'])))
	{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photo SET latitude = '$latitude', longitude ='$longitude', picname9 = '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'"; 
   
    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
		
$msg = "Data Not Posted Successfully!";
    }
	else
{
	
$msg = "Files Uploaded Successfully!"; 
}
}
else 
{
$msg = "Invalid Picture Format!"; 	
}
	}
		if(empty($row['picname10'])&&(!empty($row['Picname']))&&(!empty($row['picname1']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9'])))
	{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photo SET latitude = '$latitude', longitude ='$longitude', picname10 = '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'"; 
   
    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
		
$msg = "Data Not Posted Successfully!";
    }
	else
{
	
$msg = "Files Uploaded Successfully!"; 
}
}
else 
{
$msg = "Invalid Picture Format!"; 	
}
	}
			if(empty($row['picname11'])&&(!empty($row['Picname']))&&(!empty($row['picname1']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10'])))
	{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photo SET latitude = '$latitude', longitude ='$longitude',  picname11 = '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'"; 
   
    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
		
$msg = "Data Not Posted Successfully!";
    }
	else
{
	
$msg = "Files Uploaded Successfully!"; 
}
}
else 
{
$msg = "Invalid Picture Format!"; 	
}
	}
	if(empty($row['picname12'])&&(!empty($row['Picname']))&&(!empty($row['picname1']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11'])))
	{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photo SET latitude = '$latitude', longitude ='$longitude',picname12 = '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'"; 
   
    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
		
$msg = "Data Not Posted Successfully!";
    }
	else
{
	
$msg = "Files Uploaded Successfully!"; 
}
}
else 
{
$msg = "Invalid Picture Format!"; 	
}
	}
	if(empty($row['picname13'])&&(!empty($row['Picname']))&&(!empty($row['picname1']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11']))&&(!empty($row['picname12'])))
	{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photo SET latitude = '$latitude', longitude ='$longitude', picname13 = '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'"; 
   
    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
		
$msg = "Data Not Posted Successfully!";
    }
	else
{
	
$msg = "Files Uploaded Successfully!"; 
}
}
else 
{
$msg = "Invalid Picture Format!"; 	
}
	}
	if(empty($row['picname14'])&&(!empty($row['Picname']))&&(!empty($row['picname1']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11']))&&(!empty($row['picname12']))&&(!empty($row['picname13'])))
	{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photo SET latitude = '$latitude', longitude ='$longitude',  picname14 = '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'"; 
   
    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
		
$msg = "Data Not Posted Successfully!";
    }
	else
{
	
$msg = "Files Uploaded Successfully!"; 
}
}
else 
{
$msg = "Invalid Picture Format!"; 	
}
	}
	if(empty($row['picname15'])&&(!empty($row['Picname']))&&(!empty($row['picname1']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11']))&&(!empty($row['picname12']))&&(!empty($row['picname13']))&&(!empty($row['picname14'])))
	{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photo SET latitude = '$latitude', longitude ='$longitude',  picname15 = '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'"; 
   
    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
		
$msg = "Data Not Posted Successfully!";
    }
	else
{
	
$msg = "Files Uploaded Successfully!"; 
}
}
else 
{
$msg = "Invalid Picture Format!"; 	
}

	}
	if(empty($row['picname16'])&&(!empty($row['Picname']))&&(!empty($row['picname1']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11']))&&(!empty($row['picname12']))&&(!empty($row['picname13']))&&(!empty($row['picname14']))&&(!empty($row['picname15'])))
	{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photo SET latitude = '$latitude', longitude ='$longitude',  picname16 = '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'"; 
   
    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
		
$msg = "Data Not Posted Successfully!";
    }
	else
{
	
$msg = "Files Uploaded Successfully!"; 
}
}
else 
{
$msg = "Invalid Picture Format!"; 	
}
	}
	if(empty($row['picname17'])&&(!empty($row['Picname']))&&(!empty($row['picname1']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11']))&&(!empty($row['picname12']))&&(!empty($row['picname13']))&&(!empty($row['picname14']))&&(!empty($row['picname15']))&&(!empty($row['picname16'])))
	{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photo SET latitude = '$latitude', longitude ='$longitude', picname17 = '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'"; 
   
    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
		
$msg = "Data Not Posted Successfully!";
    }
	else
{
	
$msg = "Files Uploaded Successfully!"; 
}
}
else 
{
$msg = "Invalid Picture Format!"; 	
}
	}
	if(empty($row['picname18'])&&(!empty($row['Picname']))&&(!empty($row['picname1']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11']))&&(!empty($row['picname12']))&&(!empty($row['picname13']))&&(!empty($row['picname14']))&&(!empty($row['picname15']))&&(!empty($row['picname16']))&&(!empty($row['picname17'])))
	{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photo SET latitude = '$latitude', longitude ='$longitude', picname18 = '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'"; 
   
    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
		
$msg = "Data Not Posted Successfully!";
    }
	else
{
	
$msg = "Files Uploaded Successfully!"; 
}
}
else 
{
$msg = "Invalid Picture Format!"; 	
}
	}
	if(empty($row['picname19'])&&(!empty($row['Picname']))&&(!empty($row['picname1']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11']))&&(!empty($row['picname12']))&&(!empty($row['picname13']))&&(!empty($row['picname14']))&&(!empty($row['picname15']))&&(!empty($row['picname16']))&&(!empty($row['picname17']))&&(!empty($row['picname18'])))
	{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photo SET latitude = '$latitude', longitude ='$longitude',  picname19 = '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'"; 
   
    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
		
$msg = "Data Not Posted Successfully!";
    }
	else
{
	
$msg = "Files Uploaded Successfully!"; 
}
}
else 
{
$msg = "Invalid Picture Format!"; 	
}
	}
	if(empty($row['picname20'])&&(!empty($row['Picname']))&&(!empty($row['picname1']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11']))&&(!empty($row['picname12']))&&(!empty($row['picname13']))&&(!empty($row['picname14']))&&(!empty($row['picname15']))&&(!empty($row['picname16']))&&(!empty($row['picname17']))&&(!empty($row['picname18']))&&(!empty($row['picname19'])))
	{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photo SET latitude = '$latitude', longitude ='$longitude',  picname20 = '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'"; 
   
    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
		
$msg = "Data Not Posted Successfully!";
    }
	else
{
	
$msg = "Files Uploaded Successfully!"; 
}
}
else 
{

$msg = "Invalid Picture Format!"; 	
}
	}
	if(empty($row['picname21'])&&(!empty($row['Picname']))&&(!empty($row['picname1']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11']))&&(!empty($row['picname12']))&&(!empty($row['picname13']))&&(!empty($row['picname14']))&&(!empty($row['picname15']))&&(!empty($row['picname16']))&&(!empty($row['picname17']))&&(!empty($row['picname18']))&&(!empty($row['picname19']))&&(!empty($row['picname20'])))
	{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photo SET latitude = '$latitude', longitude ='$longitude',  picname21 = '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'"; 
   
    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
		
$msg = "Data Not Posted Successfully!";
    }
	else
{
	
$msg = "Files Uploaded Successfully!"; 
}
}
else 
{
$msg = "Invalid Picture Format!"; 	
}
	}
	if(empty($row['picname22'])&&(!empty($row['Picname']))&&(!empty($row['picname1']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11']))&&(!empty($row['picname12']))&&(!empty($row['picname13']))&&(!empty($row['picname14']))&&(!empty($row['picname15']))&&(!empty($row['picname16']))&&(!empty($row['picname17']))&&(!empty($row['picname18']))&&(!empty($row['picname19']))&&(!empty($row['picname20']))&&(!empty($row['picname21'])))
	{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photo SET latitude = '$latitude', longitude ='$longitude',  picname22 = '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'"; 
   
    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
		
$msg = "Data Not Posted Successfully!";
    }
	else
{
	
$msg = "Files Uploaded Successfully!"; 
}
}
else 
{
$msg = "Invalid Picture Format!"; 	
}
	}
		if(empty($row['picname23'])&&(!empty($row['Picname']))&&(!empty($row['picname1']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11']))&&(!empty($row['picname12']))&&(!empty($row['picname13']))&&(!empty($row['picname14']))&&(!empty($row['picname15']))&&(!empty($row['picname16']))&&(!empty($row['picname17']))&&(!empty($row['picname18']))&&(!empty($row['picname19']))&&(!empty($row['picname20']))&&(!empty($row['picname21']))&&(!empty($row['picname22'])))
	{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photo SET latitude = '$latitude', longitude ='$longitude',  picname23 = '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'"; 
   
    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
		
$msg = "Data Not Posted Successfully!";
    }
	else
{
	
$msg = "Files Uploaded Successfully!"; 
}
}
else 
{
$msg = "Invalid Picture Format!"; 	
}
	}
	if(empty($row['picname24'])&&(!empty($row['Picname']))&&(!empty($row['picname1']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11']))&&(!empty($row['picname12']))&&(!empty($row['picname13']))&&(!empty($row['picname14']))&&(!empty($row['picname15']))&&(!empty($row['picname16']))&&(!empty($row['picname17']))&&(!empty($row['picname18']))&&(!empty($row['picname19']))&&(!empty($row['picname20']))&&(!empty($row['picname21']))&&(!empty($row['picname22']))&&(!empty($row['picname23'])))
	{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE photo SET latitude = '$latitude', longitude ='$longitude',  picname24 = '$file_name' where latitude ='$latitude' AND longitude  = '$longitude'"; 
   
    if(!mysqli_query($con,$sql3)){
    die('Not A Valid File Type: '. mysqli_error($con));
		
$msg = "Data Not Posted Successfully!";
    }
	else
{
	
$msg = "Files Uploaded Successfully!"; 
}
}
else 
{
$msg = "Invalid Picture Format!"; 	
}
	}
}
if(!empty($row['picname24'])&&(!empty($row['Picname']))&&(!empty($row['picname1']))&&(!empty($row['picname2']))&&(!empty($row['picname3']))&&(!empty($row['picname4']))&&(!empty($row['picname5']))&&(!empty($row['picname6']))&&(!empty($row['picname7']))&&(!empty($row['picname8']))&&(!empty($row['picname9']))&&(!empty($row['picname10']))&&(!empty($row['picname11']))&&(!empty($row['picname12']))&&(!empty($row['picname13']))&&(!empty($row['picname14']))&&(!empty($row['picname15']))&&(!empty($row['picname16']))&&(!empty($row['picname17']))&&(!empty($row['picname18']))&&(!empty($row['picname19']))&&(!empty($row['picname20']))&&(!empty($row['picname21']))&&(!empty($row['picname22']))&&(!empty($row['picname23'])))
	{
	
$msg = "Cannot Upload More Files!";
   
	}
}
		



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enter Photo</title>
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
  var win1 = window.open("View_Form.php");
  win1.focus();
  this.close();
}
function pops()
{
	alert("  JPEG/PNG/GIF/TIFF File Types Are Allowed For Upload ");
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
			
														<a href="View_Form.php" class="hhh"  style="color:white;margin-right:50%;font-weight:200">HOME</a>
                         

					
			
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
                       	
                    	<form action="Insert2.php" method="post" enctype="multipart/form-data">

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
<b style="font-size:16px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;" align="left">UPLOAD PHOTOGRAPH FOR THE SITE/LOCATION<br/><br/> 
</b>
</div>
 <b style="font-size:15px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;margin-left:40px;margin-top:40px;">
    Insert Photograph:</b>
     <br/><br/>
     <label>
    <input type="file" name="pic" style="margin-left:40px;;width:400px;" id="pic" onClick="pops()" required />
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
    
<input type="button" name="submits" class="btn btn-embossed btn-primary" value="Back"  onClick="javascript:goback()"/ >      
<input type="submit" name="added" class="btn btn-primary btn-large" value="Upload" onClick="javascript:show()" />
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
 
