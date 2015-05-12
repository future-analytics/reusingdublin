<?php

//creating coonection elements with the database
 $con=mysqli_connect("172.16.0.57","u1046393_turas","Soamin123@","db1046393_dublin");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
