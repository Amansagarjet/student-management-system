<?php 

error_reporting(0);
$server = "localhost";
$username = "root";
$psw = "";
$db_name = "student_management";

$con = mysqli_connect($server,$username,$psw,$db_name);
if(!$con){
    echo'Connection Failed! Please Check Base File';
}

?>