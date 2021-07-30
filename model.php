<?php

class model{
    public function get(){
        include ("database.php");
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $fileupload = $_POST['fileupload'];

            if(!empty($username) && !is_numeric($username) && !empty($email) && !empty($password) && !empty($fileupload)){
                $sql = "INSERT INTO signup (username,email,password,fileupload)
                        VALUES ('$username','$email','$password','$fileupload')";
                mysqli_query($con,$sql);
                return true;
            } else{
                return false;
            }
        }
    }
}