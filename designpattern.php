<?php
 //singleton - a class has only one instance, providing a global access
class DataBaseConnector {
                 
    private static $obj;
                 
    private final function __construct() {
        echo __CLASS__ . " initialize only once ";
    }
     
    public static function getConnect() {
        if (!isset(self::$obj)) {
            self::$obj = new DataBaseConnector();
        }
         
        return self::$obj;
    }
}
 
$obj1 = DataBaseConnector::getConnect();
$obj2 = DataBaseConnector::getConnect();
 
var_dump($obj1 == $obj2); //output: DataBaseConnector initialize only once bool(true)
?>

<?php 
/*factory pattern - Each time a new car is ordered, we call the order
 method and pass the car type as a parameter ('r' or 's' model).
The order method then makes a new car object (based on the parameter) and
adds the newly created car object to the $carOrders array that stores the 
list of cars that were ordered.*/
  class CarOrder {
  protected $carOrders = array();
  protected $car;
  
  // Order & make the car in the same method
  public function order($model=null)
  {
    if(strtolower($model) == 'r')
      $this->car = new CarModelR();
    else
      $this->car = new CarModelS();
 
      $this->carOrders[] = $this->car->getModel();
  }
  
 
  public function getCarOrders()
  {
    return $this->carOrders;
  }
}
?>

<?php
//dependency injection
class First_Class{
    public $var1 = "First class value";
    public function getValue(){
        return $this-> var1;
    }
}

class Second_Class{
    public $var2 ='';
    function __construct(First_class $class1){
        $this-> var2 = $class1->var1; //echo $class1->getValue();
    }
}
 $class1 = new First_Class();
 $class2 = new Second_Class($class1);
 echo $class2 ->var2;//First class value
 ?>

 <?php /*
 //MVC
class Model{
    public $string;
    public function __construct(){
        $this->string = "MVC + PHP = Awesome!";
    }
}

class View{
    private $model;
    private $controller;
    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function output(){
        return "<p>" . $this->model->string . "</p>";
    }
}

class Controller{
    private $model;
    public function __construct($model) {
        $this->model = $model;
    }
}

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);
echo $view->output();*/