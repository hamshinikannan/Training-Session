<?php
//array_column - returns the values from a single column in the input array
$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  )
);
$last_names = array_column($a, 'last_name');
print_r($last_names);

//array_combine - creates an array by using the elements from one "keys" array and one "values" array
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");
$c=array_combine($fname,$age);
print_r($c);

//array_flip - flips/exchanges all keys with their associated values in an array
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a1);
print_r($result);

//array_keys - returns an array containing the keys
$a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
print_r(array_keys($a));

//array_merge - merges one or more arrays into one array
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));

//array_pop - deletes the last element of an array
$a=array("red","green","blue");
array_pop($a);
print_r($a);

//array_push - inserts one or more elements to the end of an array
$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);

//array_rand - returns a random key from an array, 
//or it returns an array of random keys if you specify that the function should return more than one key.
$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];

//array_reverse - returns an array in the reverse order.
$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r(array_reverse($a));

//array_shift - removes the first element from an array, and returns the value of the removed element.
$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_shift($a);
print_r ($a);

//array_slice - returns selected parts of an array
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,2));

//splice - removes selected elements from an array and replaces it with new elements
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
array_splice($a1,0,2,$a2);
print_r($a1);

//arsort - sorts an associative array in descending order, according to the value
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
arsort($age);
foreach($age as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }

//asort - sorts an associative array in ascending order, according to the value
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
asort($age);
?>