<?php 
error_reporting(0);
$server = "localhost";
$username = "root";
$password = "";
$db_name = "student_management";
$con = mysqli_connect($server,$username,$password,$db_name);
if(!$con){
    echo"Please Check Database Connection";
}


?>