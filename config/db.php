<?php
session_start();
$hostname = "localhost";
$username = "root";
$password ="";
$db = "blog";
$con = mysqli_connect($hostname,$username,$password,$db);
if(!$con){
echo"connection failed";
}



?>