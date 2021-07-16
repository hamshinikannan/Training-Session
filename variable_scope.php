<?php
//scope
$a = 1; /* global scope */ 
function test()
{ 
    $a = 20;// 20 local scope 
    echo $a; echo "<br>";  /* reference to local scope variable */ 
} 
test();
echo $a;  echo "<br>"; // 1

//global keyword
$a = 1;
$b = 2;
function Sum()
{
    global $a, $b;
    $b = $a + $b; 
} 
Sum();
echo $b; echo "<br>"; 

//$GLOBALS instead of global
$a = 1;
$b = 2;
function add()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
} 
add();
echo $b;  echo "<br>"; 
?>

<?php
//static variable
function demo()
{
    static $a = 7;
    echo $a;  echo "<br>"; 
    $a++;
}
demo();
demo();
?>