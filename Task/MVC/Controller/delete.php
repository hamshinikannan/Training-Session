
<?php
session_start();
/*
 * including model.php (model for delete)
 */ 
include ("../Model/delete.php"); 
/*
 * controller for delete page
 */ 

class Controller{
    public $model;
    public function __construct(){
        $this->model = new Model();
    }
    /*
     * Delete the records present in table
     */
    public function Delete(){
        $result = $this->model->deleteValues();
        /*
         * if the data given in the field validates go to signin page else stay in signup page
         */
        if($result){
            $_SESSION['message'] = "Record has been deleted successfully";
            header("Location: ../View/display.php");
        } else{
            $_SESSION['message'] = "No records to be deleted";
            header("Location; ../View/display.php");
        }
    
    }
}
$cnt = new Controller();
$cnt->Delete();
