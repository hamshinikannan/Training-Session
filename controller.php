<?php
include "model.php";

class controller{
    public $model;
    public function __construct(){
        $this->model = new model();
    }
    public function invoke(){
        $result = $this->model->get();
        if($result == true){
            header("Location: signin.html");
        }else{
            header("Location: view.html");
        }
    }
}
$cnt = new controller();
$cnt->invoke();
