<?php
class Model{
    public function deleteValues(){
        /*
         * delete the values present in the record
         */ 
        include '../../database.php';
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "DELETE FROM useraccount WHERE id = '$id' ";
            $result = mysqli_query($con,$sql);

            if($result){
                header("Location: ../View/display.php");
            } else{
                die (mysqli_error($con));
            }
        }
    }
}
?>