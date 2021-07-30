<?php
$server = "localhost";
$user = "root";
$password ="";
$database = "users";

if(!$con = mysqli_connect($server,$user,$password,$database)){
    die ("Connection failed");
}
?>