<?php
//using comparison operator
// Point.php

class Point
{
	private $x;

	private $y;

	public function __construct($x, $y)
	{
		$this->x = $x;
		$this->y = $y;
	}
}
?>

<?php
require 'Point.php';

$p1 = new Point(10, 20);
$p2 = new Point(10, 20);

if ($p1 == $p2) {
	echo 'p1 and p2 are equal.';
} else {
	echo 'p1 and p2 are not equal.';
}
//output: p1 and p2 are equal
?>

<?php
//using identity operator
require 'Point.php';

$p1 = new Point(10, 20);
$p2 = $p1;

if ($p1 === $p2) {
	echo 'p1 and p2 are identical.';
} else {
	echo 'p1 and p2 are not identical.';
}
?>

<?php
require 'Point.php';

$p1 = new Point(10, 20);
$p2 = $p1;

if ($p1 === $p2) {
	echo 'p1 and p2 are identical.';
} else {
	echo 'p1 and p2 are not identical.';
}

$p3 = new Point(10, 20);
if ($p1 === $p3) {
	echo 'p1 and p3 are identical.';
} else {
	echo 'p1 and p3 are not identical.';
}