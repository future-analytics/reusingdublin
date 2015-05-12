<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>


<body>
<?php
require_once("../PHPMailer_5.2.4/class.phpmailer.php");
$mail= new PHPMailer();
$mail->IsSMTP();
$mail-> SMTPDebug = 1;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->Username = "priyankasingh125";
$mail->Password = "futureanalytics";
$mail->SetFrom('priyankasingh125@gmail.com');
$mail->Subject= "i am the subject";
$mail->AddAddress('priyankasingh125@gmail.com');
$mail->Body(true);
if($mail->Send())
{
	echo ("message has been sent");
}
else
{
	echo ("message has not  been sent");
}






?>

</body>
</html>