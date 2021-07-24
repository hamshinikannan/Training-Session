<?php
// Array with names
$a[] = "Anna";
$a[] = "Cinderella";
$a[] = "Hamshini";
$a[] = "Inba";
$a[] = "John";
$a[] = "Brinda";
$a[] = "Neha";
$a[] = "mani";
$a[] = "abi";
$a[] = "Violet";
$a[] = "lily";
$a[] = "Elizabeth";
$a[] = "kohli";
$a[] = "chahar";
$a[] = "Vicky";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
        // stristr-searches for the first occurrence of a string inside another string
        //substr-returns a part of a string
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>