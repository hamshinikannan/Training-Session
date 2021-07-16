<?php
//variable declaration
$var = 'Bob';
$Var = 'Joe';
echo "$var, $Var ";
?>
<?php
//assign value by reference
$foo = 'Albert';              // Assign the value 'Albert' to $foo
$bar = &$foo ;              // Reference $foo via $bar.
$bar = "My name is $bar";  // Alter $bar...
echo $bar;
echo $foo;                 // $foo is altered too.
?>