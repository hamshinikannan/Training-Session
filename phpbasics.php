<?php
echo "My first PHP script!" . "<br>";
echo "This ", "sentence ", "is ", "separated ", "with commas.";
echo "<br>";

$name = "PHP Program";
echo "<br>";
echo "Welcome to " . $name . "<br>";

$x= 10 + 10 ;
echo $x;

//function
function Test() {
    $x = 5;
    echo "<p>Variable x inside function is: $x</p>"; //local scope 
} 
Test();
echo "<p>Variable x outside function is: $x</p>";//global scope

//global variable in array format
$a = 16;
$b = 24;
function myTest() {
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
} 
myTest();
echo $b;
echo "<br>";

//array 
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>";

//string functions
echo strlen("Hello world!");// returns the length of the string
echo "<br>";
echo str_word_count("Hello world!");//returns the number of words
echo "<br>";
echo strrev("Hello world!");// reverse the string
echo "<br>";
echo str_replace("javascript", "php", "Welcome to javascript!");//replace the words
echo "<br>";

$time = date("H");
if ($time < "12") {
  echo "Have a good morning!";
} elseif ($time < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
//switch 
$favgame = "badminton";
switch ($favgame) {
  case "badminton":
    echo "Your favorite game is badminton!";
    break;
  case "tennis":
    echo "Your favorite game is tennis!";
    break;
  case "cricket":
    echo "Your favorite game is cricket!";
    break;
  default:
    echo "Your favorite game is neither badminton, tennis, nor cricket!";
}

?>
