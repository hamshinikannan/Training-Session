<?php

class signinmodel{
    public function get(){
        include ("database.php");
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM signup WHERE email= '$email' AND password='$password'";
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