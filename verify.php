<?php 
  $userid = trim($_POST["userid"]);
  $pwd = trim($_POST["pwd"]);
  
  if ($userid == "")                // if user id is blank
    echo "you must not leave it blank"; 
  else if ($userid == "johnny")     // if user id is "johnny" (case sensitive)
    echo "'johnny' has been used, please choose another User ID";
  else                              // if user id anything else
    echo "yeah! user id \"".$userid."\" is available, you are free to use it.d";
	if ($pwd == "")                // if user id is blank
    echo "you must not leave it blank"; 
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