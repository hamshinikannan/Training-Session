<?php
$server = "localhost";
$user = "root";
$password ="";
$database = "users";

//Establishing and checking connection

//mysqli_connect(string host, string username, string password,database name);
if(!$con = mysqli_connect($server,$user,$password,$database)){
    die ("Connection failed");
}
?>