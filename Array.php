<?php
$array = array(
    1    => "abc",
    "1"  => "be",
    1.9  => "c",
    true => "dedhee",
    
);
var_dump($array);
?><br>
<?php
$array = array("foo", "bar", "hello", "world");
var_dump($array);
?>

<?php
//use of unset function
$arr = array(5 => 1, 12 => 2);
$arr[] = 56;    // This is the same as $arr[13] = 56;
$arr["x"] = 42; // This adds a new element to the array with key "x"
unset($arr[5]); // This removes the element from the array
unset($arr);    // This deletes the whole array
?>

<?php
$a = array(1 => 'one', 2 => 'two', 3 => 'three');
unset($a[2]);
//array_values- reindex the array
$b = array_values($a); // Now $b is array(0 => 'one', 1 =>'three')
?>

<?php
//key value of each array element
$switching = array( 
                            10, // key = 0
                    5    =>  6,
                    3    =>  7, 
                    'a'  =>  4,
                            11, // key = 6 (maximum of integer-indices was 5)
                    '8'  =>  2, // key = 8 (integer!)
                    '02' => 77, // key = '02'
                    0    => 12  // the value 10 will be overwritten by 12
                  );
?>