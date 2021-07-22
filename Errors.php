<?php
$x = "programming";
y = "Computer science"; // gives syntax error
echo $x;
echo $y;
?>

<?php
  
function add($x, $y)
{
    $sum = $x + $y;
    echo "sum = " . $sum;
}
$x = 0;
$y = 20;
add($x, $y);
  
diff($x, $y);//fatal error - recognizes an undeclared function
?>

<?php 
  
  $x = "GeeksforGeeks";
    
  include ("gfg.php");
    
  echo $x . "Computer science portal";// warning- missing file
  ?>

<?php 
  
  $x = "hello world";
    
  echo $x;
    
  echo $item; // notice error -program contains something wrong but it allows the execution of script.
  ?>