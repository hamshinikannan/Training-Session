<?php

class Model{
    public function __construct(){
        $this->updateValues();
    }
    public function updateValues(){
        /*
         * fetches the record from useraccount table and update action is done in recorded values
         */
        include '../../database.php';
        $id=0;
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            
        $sql = "SELECT * FROM useraccount WHERE id=$id ";
        $result = mysqli_query($con,$sql);

        $row = mysqli_fetch_assoc($result);
        
        $username = $row['username'];
        $email = $row['email'];
        $password = $row['password'];
        $fileUpload = $row['fileupload'];
        return $id;
        }
    

        if(isset($_POST['update'])){
           
            $id = $_POST['id'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $fileUpload = $_POST['fileupload'];

            $sql = "UPDATE useraccount SET id = '$id', username ='$username', email = '$email', fileupload = '$fileUpload' WHERE id = '$id'";
           
            $result = mysqli_query($con,$sql);
    
            if($result){
                return true;
            } else{
                return false;
            }
        }
    }
    public function getUser($id) {
        include '../../database.php';
        if(!empty($id)){
            $sql=mysqli_query($con,"SELECT * FROM useraccount WHERE id=$id ");
            $row = mysqli_fetch_assoc($sql);

            $username = $row['username'];
            $email = $row['email'];
            $password = $row['password'];
            $fileUpload = $row['fileupload'];
            return ['username'=>$username,'email'=>$email,'password'=>$password,'fileupload'=>$fileUpload];
        }
    }
}
$user = new Model;

?>