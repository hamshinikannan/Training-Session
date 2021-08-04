
<?php
/*
 * controller for signup page
 */ 
include ("../Model/signup.php"); 
class Controller{
    public $model;
    public function __construct(){
        $this->model = new Model();
    }
    
    public function Invoke(){
        $result = $this->model->insertValues();
        /*
         * if the data given in the field validates go to signin page else stay in signup page
         */ 
        if($result){
            header("Location: ../View/signin.php");
        }else{
            header("Location: ../View/signup.php");
        }
    }
}
$cnt = new Controller();
$cnt->Invoke();
