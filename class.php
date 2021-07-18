<?php
//class
class Fruit {
    // Properties
    public $name;
    public $color;
  
    // Methods
    function set_name($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
}

//methods and properties
$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');
 
echo $apple->get_name();
echo "<br>";
echo $banana->get_name();//Apple Banana

//extends
class MyClass {
    public function hello() {
        echo "Hello World!";
    }
}
class AnotherClass extends MyClass {
}
$obj = new AnotherClass();
$obj->hello();//"Hello World!"

//class constant
class Goodbye {
    const LEAVING_MESSAGE = "Thanks for visiting!";//Thanks for visiting!
}  
echo Goodbye::LEAVING_MESSAGE;

//autoloading class
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
 });
 $obj = new test1();
 $obj2 = new test2();
 echo "objects of test1 and test2 class created successfully";//objects of test1 and test2 class created successfully
 
//constructor
class Tree
{
    function Tree()
    {
        echo "Its a User-defined Constructor of the class Tree";
    }
 
    function __construct()
    {
        echo "Its a Pre-defined Constructor of the class Tree";
    }
} 
$obj= new Tree(); //Its a Pre-defined Constructor of the class Tree

//destructor
class SomeClass
    {
 
        function __construct()
        {
            echo "In constructor, ";
            $this->name = "Class object! ";
        }
 
        function __destruct()
        {
            echo "destroying " . $this->name . "\n";
        }
    }
$obj = new Someclass();//In constructor, destroying Class object! 
 
?>