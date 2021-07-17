<?php
//if statement
if ($a > $b) {
  echo "a is bigger than b";
  $b = $a;
}

//else statement
if ($a > $b) {
    echo "a is greater than b";
} else {
    echo "a is NOT greater than b";
}

//elseif
if ($a > $b) {
    echo "a is bigger than b";
} elseif ($a == $b) {
    echo "a is equal to b";
} else {
    echo "a is smaller than b";
}
//alternate syntax of control structures
if ($a > $b):
    echo $a." is greater than ".$b;
elseif ($a == $b): // elseif -- in combined form
    echo $a." equals ".$b;
else:
    echo $a." is neither greater than or equal to ".$b;
endif;

//while
$i = 1;
while ($i <= 10) {
    echo $i++; 
}

//do-while
$i = 0;
do {
    echo $i;
} while ($i > 0);

//for
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
//for, break
for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}

//foreach
$a = array(1, 2, 3, 17);
foreach ($a as $v) {
    echo "Current value of \$a: $v.\n";
}

//foreach by reference
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}

//continue
for ($i = 0; $i < 5; ++$i) {
    if ($i == 2)
        continue
    print "$i\n";
}

//switch
switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
    default:
        echo "i is not equal to 0,1 and 2"; 
}

//match
$age = 23;
$result = match (true) {
    $age >= 65 => 'senior',
    $age >= 25 => 'adult',
    $age >= 18 => 'young adult',
    default => 'kid',
};
var_dump($result);

//declare
declare(ticks=1);
function tick_handler()
{
    echo "tick_handler() called\n";
}
register_tick_function('tick_handler'); // causes a tick event
$a = 1; // causes a tick event
if ($a > 0) {
    $a += 2; // causes a tick event
    print($a); // causes a tick event
}
?>

var.php
<?php
//include
$color = 'green';
$fruit = 'apple';
?>
test.php
<?php
echo "A $color $fruit"; // A
include 'var.php';
echo "A $color $fruit"; // A green apple
?>

<?php
//goto
goto a;
echo 'Foo';
 
a:
echo 'Bar';
