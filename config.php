<?php
$servername = "localhost:127.0.0.1";
$username = "DBUSERNAME";
$password = "DBPASSWORD";
$database = "DBNAME";
$con = mysqli_connect($servername,$username,$password,$database);
if($con){
     echo "connection successful";
}
else{
die("sorry we failed to connect:" .mysqli_connect_error());
} 
?>
