
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
    $result = mysqli_query($con,"SELECT * FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
    $num_rows = mysqli_num_rows($result);
    $result1 = mysqli_query($con,"SELECT UploadPic FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row1 = mysqli_fetch_assoc($result1);
	$result25 = mysqli_query($con,"SELECT photo1 FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row25 = mysqli_fetch_assoc($result25);
	$result2 = mysqli_query($con,"SELECT photo2 FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row2 = mysqli_fetch_assoc($result2);
	$result3 = mysqli_query($con,"SELECT photo3  FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row3 = mysqli_fetch_assoc($result3);
	$result4 = mysqli_query($con,"SELECT photo4 FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row4 = mysqli_fetch_assoc($result4);
	$result5 = mysqli_query($con,"SELECT photo5 FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row5 = mysqli_fetch_assoc($result5);
	$result6 = mysqli_query($con,"SELECT photo6 FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row6 = mysqli_fetch_assoc($result6);
	$result7 = mysqli_query($con,"SELECT photo7 FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row7 = mysqli_fetch_assoc($result7);
	$result8 = mysqli_query($con,"SELECT photo8 FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row8 = mysqli_fetch_assoc($result8);
	$result9 = mysqli_query($con,"SELECT photo9 FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row9 = mysqli_fetch_assoc($result9);
	$result10 = mysqli_query($con,"SELECT photo10 FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row10 = mysqli_fetch_assoc($result10);
	$result11 = mysqli_query($con,"SELECT photo11 FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row11 = mysqli_fetch_assoc($result11);
	$result12 = mysqli_query($con,"SELECT photo12 FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row12 = mysqli_fetch_assoc($result12);
	$result13 = mysqli_query($con,"SELECT photo13 FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row13 = mysqli_fetch_assoc($result13);
	$result14 = mysqli_query($con,"SELECT photo14 FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row14 = mysqli_fetch_assoc($result14);
	$result15 = mysqli_query($con,"SELECT photo15 FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row15 = mysqli_fetch_assoc($result15);
	$result16 = mysqli_query($con,"SELECT photo16 FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row16 = mysqli_fetch_assoc($result16);
	$result17 = mysqli_query($con,"SELECT photo17 FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row17 = mysqli_fetch_assoc($result17);
	$result18 = mysqli_query($con,"SELECT photo18 FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row18 = mysqli_fetch_assoc($result18);
	$result19 = mysqli_query($con,"SELECT photo19 FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row19 = mysqli_fetch_assoc($result19);
	$result20 = mysqli_query($con,"SELECT photo20 FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row20 = mysqli_fetch_assoc($result20);
	$result21 = mysqli_query($con,"SELECT photo21 FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row21 = mysqli_fetch_assoc($result21);
	$result22 = mysqli_query($con,"SELECT photo22 FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row22 = mysqli_fetch_assoc($result22);
	$result23 = mysqli_query($con,"SELECT photo23 FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row23 = mysqli_fetch_assoc($result23);
	$result24 = mysqli_query($con,"SELECT photo24 FROM Address1 where Latitude = '$latitude' AND Longitude = '$longitude'");
	$row24 = mysqli_fetch_assoc($result24);
	
	
    if(($num_rows>0)&&(!empty($latitude))&&($_FILES['pic']['size']>0)&&((!empty($longitude))))
    {
		if(empty($row1['UploadPic']))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', UploadPic='images/$file_name', filenamepic = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row25['photo1']))&&(!empty($row1['UploadPic'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', photo1='images/$file_name', filenamepic1 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row2['photo2']))&&(!empty($row1['UploadPic']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', photo2='images/$file_name', filenamepic2= '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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


	if((empty($row3['photo3']))&&(!empty($row1['UploadPic']))&&(!empty($row2['photo2']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', photo3='images/$file_name', filenamepic3 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
	if((empty($row4['photo4']))&&(!empty($row1['UploadPic']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', photo4='images/$file_name', filenamepic4 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row5['photo5']))&&(!empty($row1['UploadPic']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', photo5='images/$file_name', filenamepic5 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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


	if((empty($row6['photo6']))&&(!empty($row1['UploadPic']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4'])&&(!empty($row5['photo5']))&&(!empty($row25['photo1']))))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', photo6='images/$file_name', filenamepic6 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row7['photo7']))&&(!empty($row1['UploadPic']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', photo7='images/$file_name', filenamepic7 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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


if((empty($row8['photo8']))&&(!empty($row1['UploadPic']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(empty($row7['photo7']))&&(empty($row6['photo6']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', photo8='images/$file_name', filenamepic8 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row9['photo9']))&&(!empty($row1['UploadPic']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', photo9='images/$file_name', filenamepic9 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row10['photo10']))&&(!empty($row1['UploadPic']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', photo10='images/$file_name', filenamepic10 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row11['photo11']))&& (!empty($row1['UploadPic']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', photo11='images/$file_name', filenamepic11 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row12['photo12']))&&(!empty($row1['UploadPic']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row11['photo11']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', photo12='images/$file_name', filenamepic12 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row13['photo13']))&&(!empty($row1['UploadPic']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row11['photo11']))&&(!empty($row12['photo12']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', photo13='images/$file_name', filenamepic13 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row14['photo14']))&&(!empty($row1['UploadPic']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row11['photo11']))&&(!empty($row12['photo12']))&&(!empty($row13['photo13']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', photo14='images/$file_name', filenamepic14 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row15['photo15']))&&(!empty($row1['UploadPic']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row11['photo11']))&&(!empty($row12['photo12']))&&(!empty($row13['photo13']))&&(!empty($row14['photo14']))&&(!empty($row25['photo1'])))

		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', photo15='images/$file_name', filenamepic15 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row16['photo16']))&&(!empty($row1['UploadPic']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row11['photo11']))&&(!empty($row12['photo12']))&&(!empty($row13['photo13']))&&(!empty($row14['photo14']))&&(!empty($row15['photo15']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', photo16='images/$file_name', filenamepic16 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row17['photo17']))&&(!empty($row1['UploadPic']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row11['photo11']))&&(!empty($row12['photo12']))&&(!empty($row13['photo13']))&&(!empty($row14['photo14']))&&(!empty($row15['photo15']))&&(!empty($row16['photo16']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', photo17='images/$file_name', filenamepic17 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row18['photo18']))&&(!empty($row1['UploadPic']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row11['photo11']))&&(!empty($row12['photo12']))&&(!empty($row13['photo13']))&&(!empty($row14['photo14']))&&(!empty($row15['photo15']))&&(!empty($row16['photo16']))&&(!empty($row17['photo17']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{
	$sql3="UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', photo18='images/$file_name', filenamepic18 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row19['photo19']))&&(!empty($row1['UploadPic']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row11['photo11']))&&(!empty($row12['photo12']))&&(!empty($row13['photo13']))&&(!empty($row14['photo14']))&&(!empty($row15['photo15']))&&(!empty($row16['photo16']))&&(!empty($row17['photo17']))&&(!empty($row18['photo18']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', photo19='images/$file_name', filenamepic19 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row20['photo20']))&&(!empty($row1['UploadPic']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row11['photo11']))&&(!empty($row12['photo12']))&&(!empty($row13['photo13']))&&(!empty($row14['photo14']))&&(!empty($row15['photo15']))&&(!empty($row16['photo16']))&&(!empty($row17['photo17']))&&(!empty($row18['photo18']))&&(!empty($row19['photo19']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', photo20='images/$file_name', filenamepic20 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row21['photo21']))&&(!empty($row1['UploadPic']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row11['photo11']))&&(!empty($row12['photo12']))&&(!empty($row13['photo13']))&&(!empty($row14['photo14']))&&(!empty($row15['photo15']))&&(!empty($row16['photo16']))&&(!empty($row17['photo17']))&&(!empty($row18['photo18']))&&(!empty($row19['photo19']))&&(!empty($row20['photo20']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', photo21='images/$file_name', filenamepic21 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row22['photo22']))&&(!empty($row1['UploadPic']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row11['photo11']))&&(!empty($row12['photo12']))&&(!empty($row13['photo13']))&&(!empty($row14['photo14']))&&(!empty($row15['photo15']))&&(!empty($row16['photo16']))&&(!empty($row17['photo17']))&&(!empty($row18['photo18']))&&(!empty($row19['photo19']))&&(!empty($row20['photo20']))&&(!empty($row21['photo21']))&&(!empty($row25['photo1'])))

{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', photo22='images/$file_name', filenamepic22= '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row23['photo23']))&&(!empty($row1['UploadPic']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row11['photo11']))&&(!empty($row12['photo12']))&&(!empty($row13['photo13']))&&(!empty($row14['photo14']))&&(!empty($row15['photo15']))&&(!empty($row16['photo16']))&&(!empty($row17['photo17']))&&(!empty($row18['photo18']))&&(!empty($row19['photo19']))&&(!empty($row20['photo20']))&&(!empty($row21['photo21']))&&(!empty($row22['photo22']))&&(!empty($row25['photo1'])))		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', photo23='images/$file_name', filenamepic23 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
if((empty($row24['photo24']))&&(!empty($row1['UploadPic']))&&(!empty($row2['photo2']))&&(!empty($row3['photo3']))&&(!empty($row4['photo4']))&&(!empty($row5['photo5']))&&(!empty($row6['photo6']))&&(!empty($row7['photo7']))&&(!empty($row8['photo8']))&&(!empty($row9['photo9']))&&(!empty($row10['photo10']))&&(!empty($row11['photo11']))&&(!empty($row12['photo12']))&&(!empty($row13['photo13']))&&(!empty($row14['photo14']))&&(!empty($row15['photo15']))&&(!empty($row16['photo16']))&&(!empty($row17['photo17']))&&(!empty($row18['photo18']))&&(!empty($row19['photo19']))&&(!empty($row20['photo20']))&&(!empty($row21['photo21']))&&(!empty($row23['photo23']))&&(!empty($row22['photo22']))&&(!empty($row25['photo1'])))
		{
	if ((($_FILES["pic"]["type"] == "image/gif")
|| ($_FILES["pic"]["type"] == "image/jpeg")
|| ($_FILES["pic"]["type"] == "image/jpg")
|| ($_FILES["pic"]["type"] == "image/png")||($_FILES["pic"]["type"] == "image/tiff")||($_FILES["pic"]["type"] == "image/bmp")))
{

	$sql3="UPDATE Address1 SET Latitude = '$latitude', Longitude ='$longitude', photo24='images/$file_name', filenamepic24 = '$file_name' where Latitude ='$latitude' AND Longitude  = '$longitude'"; 
   
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
                       	
                    	<form action="InsertPhotographs.php" method="post" enctype="multipart/form-data">

<div style="margin-left:100px;font-family: Arial, Helvetica, sans-serif;font-weight:bold;color:#960;font-family: Arial, Helvetica, sans-serif;font-weight:1000;font-size:36px;">
  <?php echo $msg ?>
  </div>

<div class="container-fluid">
      <div class="row-fluid">
        <div  class="span3">
         <ul  class="nav nav-list" >
         <div style="margin-left:1%;width:80%;float:left;margin-right:1%;" class="well sidebar-nav" > 
<div style="float:left;width:52%;" >
<div  style="margin-left:40px;"> 
<b style="font-size:16px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870" align="left">UPLOAD PHOTOGRAPH FOR THE SITE/LOCATION<br/><br/> 
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
 
