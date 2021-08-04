<?php
session_start();
/*
 * controller for update page
 */  
include ("../Model/update.php"); 
class Controller{
    public $model;
    public function __construct(){
        $this->model = new Model();
    }
    
    public function Invoke(){
        $result = $this->model->updateValues();
        /*
         * if the data given in the field validates go to signin page else stay in signup page
         */ 
        if($result){
            $_SESSION['message'] = "Record has been updated successfully";
            header("location: ../View/display.php?id=$result");
        } else{
            $_SESSION['message'] = "There is no record found for update";
            header("location: ../View/update.php");
        }
    }
}
$user = new Controller();
$user->Invoke();
