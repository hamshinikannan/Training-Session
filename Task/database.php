<?php
/*
 *Establishing and checking connection
 */
$server = "localhost";
$user = "root";
$password ="";
$database = "users";

/*
 *mysqli_connect(string host, string username, string password,database name) 
 */  
try{
    if($con = mysqli_connect($server,$user,$password,$database)){
        return true;
    }else{
        throw new Exception("Unable to connect");
    }
}
catch(Exception $e){
    echo $e->getMessage();
}
?>