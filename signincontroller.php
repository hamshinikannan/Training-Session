<?php
//controller for signin page
include 'signinmodel.php'; //including signinmodel.php (model for signin)

class signincontroller{
    public $model;
    public function __construct(){
        $this->model = new signinmodel();
    }
    public function invoke(){
        $result = $this->model->get();
        //if the data provided in signin page validates, go to success page else stay in signin page
        if($result == true){
            header("Location: successpage.php");
        }else{
            header("Location: signin.php");
        }
    }
}
$cnt = new signincontroller();
$cnt->invoke();
