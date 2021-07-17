<?php
//function
$makefoo = true;
bar();
if ($makefoo) {
  function foo()
  {
    echo "I don't exist until program execution reaches me.\n";
  }
}
if ($makefoo) foo();
function bar() 
{
  echo "I exist immediately upon program start.\n";
}

//recursive function
function recursion($a)
{
    if ($a < 20) {
        echo "$a\n";
        recursion($a + 1);
    }
}

//function by reference
function add_some_extra(&$string)
{
    $string .= 'and something extra.';
}
$str = 'This is a string, ';
add_some_extra($str);
echo $str;  

//return value
function square($num)
{
    return $num * $num;
}
echo square(4);  
?>