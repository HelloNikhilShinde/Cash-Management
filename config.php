<?php
$servername = "sql311.epizy.com";
$username = "epiz_27654400";
$password = "H3yGpbbQcP6ZQU";
$database = "epiz_27654400_cashmanagement";
$con = mysqli_connect($servername,$username,$password,$database);
if($con){
    // echo "connection successful";
}
else{
die("sorry we failed to connect:" .mysqli_connect_error());
} 
?>