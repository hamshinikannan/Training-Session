<?php
//controller for signup page
include ("model.php"); //including model.php (model for signup)

class controller{
    public $model;
    public function __construct(){
        $this->model = new model();
    }
    public function invoke(){
        $result = $this->model->get();
        //if the data given in the field validates go to signin page else stay in signup page
        if($result == true){
            header("Location: signin.php");
        }else{
            header("Location: signup.php");
        }
    }
}
$cnt = new controller();
$cnt->invoke();
