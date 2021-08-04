<?php

class SigninModel{
    /*
     * checks for user records
     */ 
    public function checkUser(){
        
        include ("../../database.php");
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM useraccount WHERE email= '$email' AND password='$password'";
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($result);
            
            if($row['email']==$email && $row['password']==$password){
                return true;
            }else{
                echo "Invalid Email and Password";
                return false;
            }
        }
        
    }
}