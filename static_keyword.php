<?php
//static method
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}
greeting::welcome(); // Call static method
?>

<?php
//static property
class pi {
    public static $value = 3.14159;
}
echo pi::$value; // Get static property 
?>
