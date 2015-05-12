<?php

//creating coonection elements with the database
 $con=mysqli_connect("127.0.0.1","root","chanman","reusingdublin");
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
