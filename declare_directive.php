<?php

//tick directive
declare(ticks=1);
function tick_handler() // A function called on each tick event
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

<?php
//encoding directive
declare(encoding='ISO-8859-1');
// code here
?>