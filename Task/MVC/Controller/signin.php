<?php
/*
 *controller for signin page
 */
include '../Model/signin.php'; 

class SigninController{
    public $model;
    public function __construct(){
        $this->model = new SigninModel();
    }
    public function Invoke(){
        $result = $this->model->checkUser();
        /*
         * if the data provided in signin page validates, go to success page else stay in signin page
         */
        if($result){
            header("Location: ../../successLogin.php");
        }else{
            header("Location: ../View/signin.php");
        }
    }
}
$cnt = new SigninController();
$cnt->Invoke();
