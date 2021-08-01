<?php

class model{
    public function get(){
        include ("database.php"); //including database connection
        //post the values of username, email , password ,fileupload
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $fileupload = $_POST['fileupload'];

            //checking whether all the given fields are not empty
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