<?php

class Model{
    /*
     * insert user records
     */ 
    public function insertValues(){
        /*
         * including database connection
         */ 
        include ("../../database.php"); 
        /*
         * post the values of username, email , password ,fileupload
         */ 
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $fileUpload = $_POST['fileupload'];
            /*
             * checking whether all the given fields are not empty
             * @return Boolean
             */ 
            if(!empty($username) && !is_numeric($username) && !empty($email) && !empty($password) && !empty($fileUpload)){
                $sql = "INSERT INTO useraccount (username,email,password,fileupload)
                        VALUES ('$username','$email','$password','$fileUpload')";
                $con = mysqli_connect("localhost","root","","users");
                mysqli_query($con,$sql);
                return true;
            } else{
                return false;
            }
        }
    }
}