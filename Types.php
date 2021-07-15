BOOLEAN
<?php
//assigning value 
$foo = True;                echo "<br>";

//using var_dump function,casting to boolean
var_dump((bool) "");        echo "<br>";    // bool(false)  
var_dump((bool) 1);         echo "<br>";    // bool(true)
var_dump((bool) -2);        echo "<br>";    // bool(true)
var_dump((bool) "foo");     echo "<br>";    // bool(true)
var_dump((bool) 2.3e5);     echo "<br>";    // bool(true)
var_dump((bool) array(12)); echo "<br>";    // bool(true)
var_dump((bool) array());   echo "<br>";    // bool(false)
var_dump((bool) "false");   echo "<br>";    // bool(true)
?>  <br>                   

INTEGER<br>
<?php
$large_number = 9223372036854775807;
var_dump($large_number);    echo "<br>";     // int(9223372036854775807)

$large_number = 9223372036854775808;
var_dump($large_number);     echo "<br>";    // float(9.2233720368548E+18)

$million = 1000000;
$large_number =  50000000000000 * $million;
var_dump($large_number);       echo "<br>";  // float(5.0E+19)

//division, round function
var_dump(25/7);                 echo "<br>";      // float(3.5714285714286)
var_dump((int) (25/7));         echo "<br>";      // int(3)
var_dump(round(25/7));          echo "<br>";      // float(4)
?><br>

FLOAT<br>
<?php
$a = 1.234; 
$b = 1.2e3; 
$c = 7E-10;
$d = 1_234.567; // as of PHP 7.4.0
?>

STRING<br>
<?php
//single quotes
echo 'this is a simple string';
//double quotes in herodoc
echo <<<"FOOBAR"
Hello World!
FOOBAR;
