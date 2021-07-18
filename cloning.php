<?php
class MyClass {
  public $amount;
}

// Create an object with a reference
$value = 5;
$obj = new MyClass();
$obj->amount = &$value;

// Clone the object
$copy = clone $obj;

// Change the value in the original object
$obj->amount = 6;

// The copy is changed
print_r($copy);

//output
// MyClass Object
// (
//    [amount] => 6
//  )
?>