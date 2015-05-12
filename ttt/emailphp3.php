<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CONTACT DETAILs FORM</title>
  <link href="turas.css" type="text/css" rel="stylesheet"/>

</head>
<script type="text/javascript">
 
function goback(){
	
	window.open("http://www.google.com");
	
}
function back(){
document.getElementById("messages").value = document.getElementById("matter").value + ' '+'by' + ' '+ document.getElementById("lat").value + ' ' + 'from company' +  ' ' +  document.getElementById("lon").value +' ' + 'and email id as ' + ' ' + document.getElementById("emails").value;
	

}



</script>
<body>

<form action="emailphp3.php" method="post" enctype="multipart/form-data">
<div style="overflow-y:scroll;">
<div style="float:left">
<img src="shelpui06.png" height = "100px" width = "100px" />
</div>
<div style="float:right">
<img src="shelpui07.png" height = "100px" width = "100px" padding = "10px" />
</div>
<br />
<br />
  <fieldset class="account-info">
  <h3 align="left">SEND CONTACT DETAILS</h3>
   <b style="font-size:16px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;">
     Name:
      </b>
      <label>
      <input type="text" name="lat1" id="lat" >
    </label>
<b style="font-size:16px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;">
    Company Name:
      </b>
      <label>
      <input type="text"  name="lon1" id="lon">
    </label>
    <b style="font-size:16px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;">
     Email ID:
     </b>
     <label>
      <input type="email" name="emails" id="emails" />
    </label>
   <input type="hidden" name="messages" id="messages" />
<b style="font-size:16px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;">
    Subject:
     </b>
     <label>
      <input type="text" name="subjects" id="subjects" / >
    </label>
<b style="font-size:16px;font-family: 'Arial Black', Gadget, sans-serif;color:#395870;">
   Matter of Concern:
    </b>
    <label>
       <input type="text" name="matter" id="matter" / >
        </label>
        </fieldset>
  <fieldset class="account-action">
     
    <input type="button" name="BACK" value="Back" class="btn btn-embossed btn-primary" onclick="javascript:goback();" />
<input type="submit" name="submits" class="btn btn-embossed btn-primary" value="Upload" onclick="javascript:back();"/>
  </fieldset>
  </div>
</form>
</body>
</html>


<?php


if(isset($_POST["submits"]))
{
	
 
$subject = $_POST["subjects"];
$message = $_POST["messages"] ;
$mail_from = $_POST["emails"];

$to = "priyanka.singh@futureanalytics.ie";
$send_contact= mail($to,$subject,$message);
if($send_contact)
{
	

	echo "We have recieved your information";
}
else
{
	echo "Error";
}
}
?>