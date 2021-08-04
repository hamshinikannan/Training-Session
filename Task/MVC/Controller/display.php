
<?php
/*
 *controller for display page
 *including model.php (model for display)
 */
include ("../../Model/display.php"); 

class Controller{
    public $model;
    public function __construct(){
        $this->model = new Model();
    }
    public function Invoke(){
        /*
        * Display the recorded values  
        */
        $result = $this->model->displayValues(); 
        if($result){
            header("location: ../../View/display.php");
        } else{
            die (mysqli_error($con));
        }
    }
}
$cnt = new Controller();
$cnt->Invoke();
