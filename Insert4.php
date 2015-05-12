
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
    move_uploaded_file($file_path,'images/'.$file_name);
    $result = mysqli_query($con,"SELECT * FROM SiteDetails where Latitude = '$latitude' AND Longitude = '$longitude'");
    $num_rows = mysqli_num_rows($result);
    $result1 = mysqli_query($con,"SELECT UploadPhoto FROM SiteDetails where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row1 = mysqli_fetch_assoc($result1);
	$result25 = mysqli_query($con,"SELECT photo1 FROM SiteDetails where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row25 = mysqli_fetch_assoc($result25);
	$result2 = mysqli_query($con,"SELECT photo2 FROM SiteDetails where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row2 = mysqli_fetch_assoc($result2);
	$result3 = mysqli_query($con,"SELECT photo3  FROM SiteDetails where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row3 = mysqli_fetch_assoc($result3);
	$result4 = mysqli_query($con,"SELECT photo4 FROM SiteDetails where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row4 = mysqli_fetch_assoc($result4);
	$result5 = mysqli_query($con,"SELECT photo5 FROM SiteDetails where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row5 = mysqli_fetch_assoc($result5);
	$result6 = mysqli_query($con,"SELECT photo6 FROM SiteDetails where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row6 = mysqli_fetch_assoc($result6);
	$result7 = mysqli_query($con,"SELECT photo7 FROM SiteDetails where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row7 = mysqli_fetch_assoc($result7);
	$result8 = mysqli_query($con,"SELECT photo8 FROM SiteDetails where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row8 = mysqli_fetch_assoc($result8);
	$result9 = mysqli_query($con,"SELECT photo9 FROM SiteDetails where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row9 = mysqli_fetch_assoc($result9);
	$result10 = mysqli_query($con,"SELECT photo10 FROM SiteDetails where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row10 = mysqli_fetch_assoc($result10);
	$result11 = mysqli_query($con,"SELECT photo11 FROM SiteDetails where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row11 = mysqli_fetch_assoc($result11);
	$result12 = mysqli_query($con,"SELECT photo12 FROM SiteDetails where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row12 = mysqli_fetch_assoc($result12);
	$result13 = mysqli_query($con,"SELECT photo13 FROM SiteDetails where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row13 = mysqli_fetch_assoc($result13);
	$result14 = mysqli_query($con,"SELECT photo14 FROM SiteDetails where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row14 = mysqli_fetch_assoc($result14);
	$result15 = mysqli_query($con,"SELECT photo15 FROM SiteDetails where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row15 = mysqli_fetch_assoc($result15);
	$result16 = mysqli_query($con,"SELECT photo16 FROM SiteDetails where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row16 = mysqli_fetch_assoc($result16);
	$result17 = mysqli_query($con,"SELECT photo17 FROM SiteDetails where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row17 = mysqli_fetch_assoc($result17);
	$result18 = mysqli_query($con,"SELECT photo18 FROM SiteDetails where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row18 = mysqli_fetch_assoc($result18);
	$result19 = mysqli_query($con,"SELECT photo19 FROM SiteDetails where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row19 = mysqli_fetch_assoc($result19);
	$result20 = mysqli_query($con,"SELECT photo20 FROM SiteDetails where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row20 = mysqli_fetch_assoc($result20);
	$result21 = mysqli_query($con,"SELECT photo21 FROM SiteDetails where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row21 = mysqli_fetch_assoc($result21);
	$result22 = mysqli_query($con,"SELECT photo22 FROM SiteDetails where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row22 = mysqli_fetch_assoc($result22);
	$result23 = mysqli_query($con,"SELECT photo23 FROM SiteDetails where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row23 = mysqli_fetch_assoc($result23);
	$result24 = mysqli_query($con,"SELECT photo24 FROM SiteDetails where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row24 = mysqli_fetch_assoc($result24);
	
	
    if(($num_rows>0)&&(!empty($latitude))&&($_FILES['pic']['size']>0)&&((!empty($longitude))))
    {
		if(empty($row1['UploadPhoto']))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE SiteDetails SET Latitude = '$latitude', Longitude ='$longitude', UploadPhoto='images/$file_name', Picname = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row25['photo1']))&&(!empty($row1['UploadPhoto'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE SiteDetails SET Latitude = '$latitude', Longitude ='$longitude', photo1='images/$file_name', Picname1 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row2['photo2']))&&(!empty($row1['UploadPhoto']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE SiteDetails SET Latitude = '$latitude', Longitude ='$longitude', photo2='images/$file_name', Picname2= '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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


	if((empty($row3['photo3']))&&(!empty($row1['UploadPhoto']))&&(!empty($row2['photo2']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE SiteDetails SET Latitude = '$latitude', Longitude ='$longitude', photo3='images/$file_name', Picname3 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
	if((empty($row4['photo4']))&&(!empty($row1['UploadPhoto']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE SiteDetails SET Latitude = '$latitude', Longitude ='$longitude', photo4='images/$file_name', Picname4 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row5['photo5']))&&(!empty($row1['UploadPhoto']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE SiteDetails SET Latitude = '$latitude', Longitude ='$longitude', photo5='images/$file_name', Picname5 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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


	if((empty($row6['photo6']))&&(!empty($row1['UploadPhoto']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4'])&&(!empty($row5['photo5']))&&(!empty($row25['photo1']))))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE SiteDetails SET Latitude = '$latitude', Longitude ='$longitude', photo6='images/$file_name', Picname6 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row7['photo7']))&&(!empty($row1['UploadPhoto']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE SiteDetails SET Latitude = '$latitude', Longitude ='$longitude', photo7='images/$file_name', Picname7 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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


if((empty($row8['photo8']))&&(!empty($row1['UploadPhoto']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(empty($row7['photo7']))&&(empty($row6['photo6']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE SiteDetails SET Latitude = '$latitude', Longitude ='$longitude', photo8='images/$file_name', Picname8 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row9['photo9']))&&(!empty($row1['UploadPhoto']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE SiteDetails SET Latitude = '$latitude', Longitude ='$longitude', photo9='images/$file_name', Picname9 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row10['photo10']))&&(!empty($row1['UploadPhoto']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE SiteDetails SET Latitude = '$latitude', Longitude ='$longitude', photo10='images/$file_name', Picname10 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row11['photo11']))&& (!empty($row1['UploadPhoto']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE SiteDetails SET Latitude = '$latitude', Longitude ='$longitude', photo11='images/$file_name', Picname11 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row12['photo12']))&&(!empty($row1['UploadPhoto']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row11['photo11']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE SiteDetails SET Latitude = '$latitude', Longitude ='$longitude', photo12='images/$file_name', Picname12 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row13['photo13']))&&(!empty($row1['UploadPhoto']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row11['photo11']))&&(!empty($row12['photo12']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE SiteDetails SET Latitude = '$latitude', Longitude ='$longitude', photo13='images/$file_name', Picname13 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row14['photo14']))&&(!empty($row1['UploadPhoto']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row11['photo11']))&&(!empty($row12['photo12']))&&(!empty($row13['photo13']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE SiteDetails SET Latitude = '$latitude', Longitude ='$longitude', photo14='images/$file_name', Picname14 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row15['photo15']))&&(!empty($row1['UploadPhoto']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row11['photo11']))&&(!empty($row12['photo12']))&&(!empty($row13['photo13']))&&(!empty($row14['photo14']))&&(!empty($row25['photo1'])))

		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE SiteDetails SET Latitude = '$latitude', Longitude ='$longitude', photo15='images/$file_name', Picname15 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row16['photo16']))&&(!empty($row1['UploadPhoto']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row11['photo11']))&&(!empty($row12['photo12']))&&(!empty($row13['photo13']))&&(!empty($row14['photo14']))&&(!empty($row15['photo15']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE SiteDetails SET Latitude = '$latitude', Longitude ='$longitude', photo16='images/$file_name', Picname16 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row17['photo17']))&&(!empty($row1['UploadPhoto']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row11['photo11']))&&(!empty($row12['photo12']))&&(!empty($row13['photo13']))&&(!empty($row14['photo14']))&&(!empty($row15['photo15']))&&(!empty($row16['photo16']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE SiteDetails SET Latitude = '$latitude', Longitude ='$longitude', photo17='images/$file_name', Picname17 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row18['photo18']))&&(!empty($row1['UploadPhoto']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row11['photo11']))&&(!empty($row12['photo12']))&&(!empty($row13['photo13']))&&(!empty($row14['photo14']))&&(!empty($row15['photo15']))&&(!empty($row16['photo16']))&&(!empty($row17['photo17']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{
	$sql3="UPDATE SiteDetails SET Latitude = '$latitude', Longitude ='$longitude', photo18='images/$file_name', Picname18 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row19['photo19']))&&(!empty($row1['UploadPhoto']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row11['photo11']))&&(!empty($row12['photo12']))&&(!empty($row13['photo13']))&&(!empty($row14['photo14']))&&(!empty($row15['photo15']))&&(!empty($row16['photo16']))&&(!empty($row17['photo17']))&&(!empty($row18['photo18']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE SiteDetails SET Latitude = '$latitude', Longitude ='$longitude', photo19='images/$file_name', Picname19 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row20['photo20']))&&(!empty($row1['UploadPhoto']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row11['photo11']))&&(!empty($row12['photo12']))&&(!empty($row13['photo13']))&&(!empty($row14['photo14']))&&(!empty($row15['photo15']))&&(!empty($row16['photo16']))&&(!empty($row17['photo17']))&&(!empty($row18['photo18']))&&(!empty($row19['photo19']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE SiteDetails SET Latitude = '$latitude', Longitude ='$longitude', photo20='images/$file_name', Picname20 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row21['photo21']))&&(!empty($row1['UploadPhoto']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row11['photo11']))&&(!empty($row12['photo12']))&&(!empty($row13['photo13']))&&(!empty($row14['photo14']))&&(!empty($row15['photo15']))&&(!empty($row16['photo16']))&&(!empty($row17['photo17']))&&(!empty($row18['photo18']))&&(!empty($row19['photo19']))&&(!empty($row20['photo20']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE SiteDetails SET Latitude = '$latitude', Longitude ='$longitude', photo21='images/$file_name', Picname21 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row22['photo22']))&&(!empty($row1['UploadPhoto']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row11['photo11']))&&(!empty($row12['photo12']))&&(!empty($row13['photo13']))&&(!empty($row14['photo14']))&&(!empty($row15['photo15']))&&(!empty($row16['photo16']))&&(!empty($row17['photo17']))&&(!empty($row18['photo18']))&&(!empty($row19['photo19']))&&(!empty($row20['photo20']))&&(!empty($row21['photo21']))&&(!empty($row25['photo1'])))

{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE SiteDetails SET Latitude = '$latitude', Longitude ='$longitude', photo22='images/$file_name', Picname22= '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row23['photo23']))&&(!empty($row1['UploadPhoto']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row11['photo11']))&&(!empty($row12['photo12']))&&(!empty($row13['photo13']))&&(!empty($row14['photo14']))&&(!empty($row15['photo15']))&&(!empty($row16['photo16']))&&(!empty($row17['photo17']))&&(!empty($row18['photo18']))&&(!empty($row19['photo19']))&&(!empty($row20['photo20']))&&(!empty($row21['photo21']))&&(!empty($row22['photo22']))&&(!empty($row25['photo1'])))		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE SiteDetails SET Latitude = '$latitude', Longitude ='$longitude', photo23='images/$file_name', Picname23 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row24['photo24']))&&(!empty($row1['UploadPhoto']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row11['photo11']))&&(!empty($row12['photo12']))&&(!empty($row13['photo13']))&&(!empty($row14['photo14']))&&(!empty($row15['photo15']))&&(!empty($row16['photo16']))&&(!empty($row17['photo17']))&&(!empty($row18['photo18']))&&(!empty($row19['photo19']))&&(!empty($row20['photo20']))&&(!empty($row21['photo21']))&&(!empty($row23['photo23']))&&(!empty($row22['photo22']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE SiteDetails SET Latitude = '$latitude', Longitude ='$longitude', photo24='images/$file_name', Picname24 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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



	}
	
	
	

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=8">
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
  var win1 = window.open("View_Form.php");
  win1.focus();
  this.close();
}
function pops()
{
	alert("  JPEG/PNG/GIF/TIFF File Types Are Allowed For Upload ");
}

   function cll()
	{
		this.close();
		
	}



</script>
 <body onload="initialize()" style="background-color:#f4e851">





  	
                       <form   action="Insert4.php" method="post"  enctype="multipart/form-data" autocomplete="off">
             	
 

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
            <font style="font-family:'Source Sans Pro', sans-serif;font-size:40px;font-weight:bold;"><b>Upload photograph for site/location</font>
            <br/>
            <br/>
             
            
            <div id="map-canv"   style="height:300px;width:45%;float:left;" ></div> 
            
   <div id="map-canvas"  style="height:300px;width:45%;float:right;" >   </div>
         <br/><br/> <br/>   

      
     
       <b style="font-family:'Source Sans Pro', sans-serif;font-size:28px;font-weight:regular;float:left;width:100%;width:100%;">
    Insert Photograph:
     </b>
    <label style="width:100%;">
    <input type="file" name="pic" style="margin-left:40px;;width:400px;" id="pic" onClick="pops()" required />
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
