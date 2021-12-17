<?php
$host="localhost"; //nama host
$username="root"; // nama username
$password="";
$databasename="akademik"; // nama database

//mengkoneksikan dengan database
$con=@mysqli_connect($host,$username,$password,$databasename); 
if (!$con) {
 echo "Error: " . mysqli_connect_error();
exit();
}
?>