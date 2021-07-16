<?php
//operator precedence
$a = 1;
echo $a + $a++; //3

//modulo
echo (5 % 3)."\n";   // 2
echo (5 % -3)."\n";  // 2
echo (-5 % 3)."\n";  // -2
echo (-5 % -3)."\n"; //-2

//arithmetic
$x = 10;  
$y = 3;
echo $x + $y;//13
echo $x - $y;//7
echo $x * $y;//30
echo $x / $y;//3.3333333333333
echo $x ** $y; //1000

//assignment
$a = ($b = 4) + 5; //a=9, b gets set to 4

//assignment by reference
$a = 3;
$b = &$a; // $b is a reference to $a
print "$a\n"; // prints 3
print "$b\n"; // prints 3

$a = 4; // change $a
print "$a\n"; // prints 4
print "$b\n"; //4, $b is a reference to $a

//comparison
$x = 100;  
$y = "100";

var_dump($x == $y); //bool(true)
var_dump($x === $y); //bool(false)
var_dump($x != $y);  //bool(false)
var_dump($x <> $y); //bool(false)
var_dump($x !== $y); //bool(true)
var_dump($x > $y); //bool(true)
var_dump($x < $y); //bool(true)
var_dump($x >= $y); //bool(true)
var_dump($x <= $y); //bool(true)

//ternary
$user = "John Doe";
echo $status = (empty($user)) ? "anonymous" : "logged in"; // if empty($user) = FALSE, "logged in"
   
//null coalescing
echo $color = $color ?? "red"; //$color is null, red

//spaceship
$x = 5;  
$y = 10;
echo ($x <=> $y); // returns -1,  $x is less than $y
echo "<br>";

$x = 10;  
$y = 10;
echo ($x <=> $y); // returns 0,  values are equal
echo "<br>";

$x = 15;  
$y = 10;
echo ($x <=> $y); // returns +1,  $x is greater than $y

//increment and decrement
$x = 10;  
echo ++$x;//11, 1 + 10 = 11
echo $x++;//11, 11+1=12
echo --$x;//11, -1+12= 11
echo $x--;//11, 11-1=10

//logical
//and
$x = 100;  
$y = 50;
if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
//or
if ($x == 100 or $y == 80) {
    echo "Hello world!";
}
//xor
if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}
//  &&
if ($x == 100 && $y == 50) {
    echo "Hello world!";
}
//  ||
if ($x == 100 || $y == 80) {
    echo "Hello world!";
}
//not
if ($x !== 90) {
    echo "Hello world!";
}

// "||" has higher precedence than "or"
$e = false || true; // this becomes $e = (false||true), $e=> true
$f = false or true; // this becomes ($e = false) or true ,$f=> false
var_dump($e, $f); // true, false

// "&&" has a higher precedence than "and"
$g = true && false; // this becomes ($g = (true && false)), $g=>false
$h = true and false; // this beomes (($h = true) and false), $h=>true
var_dump($g, $h);// false, true
?>
?>

<?php
//string
//concatenation
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;//Hello world!

//concatenating assignment
$t1 = "Hello";
$t2 = " world!";
$t1 .= $t2;
echo $t1; //Hello world!

//array
$a = array("apple", "banana");
$b = array(1 => "banana", "0" => "apple");  
var_dump($a == $b); // bool(true)
var_dump($a === $b); // bool(false)
?>


