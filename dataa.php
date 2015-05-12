<?php 
$con=mysqli_connect("172.16.0.57","u1046393_turas","Soamin123@","db1046393_dublin");
$result = mysqli_query($con,"SELECT * FROM SiteDetails");
while($row1 = mysqli_fetch_assoc($result))
{
	$data1[] = $row1;
	
}
foreach($data1 as $marker)
{
	$list   = array('docs' => $marker['UploadPhoto']); 
     echo $marker['adress'];
}
$c = json_encode($list);
echo $c;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>