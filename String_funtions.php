<?php
//chop - removes whitespaces or other predefined characters from the right end of a string
$str = "Hello World!";
echo $str . "<br>";
echo chop($str,"World!");

//explode - breaks a string into an array
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));

//implode - returns a string from the elements of an array.
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr);

//join - returns a string from the elements of an array, alias of implode
$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr);

//printf - outputs a formatted string
$number = 9;
$str = "Beijing";
printf("There are %u million bicycles in %s.",$number,$str);

//str_ireplace - replaces some characters with some other characters in a string
echo str_ireplace("WORLD","Peter","Hello world!");

//str_repeat - repeats a string a specified number of times
echo str_repeat("Wow",5);

//str_replace - replaces some characters with some other characters in a string
echo str_replace("world","Peter","Hello world!");

//str_word_count - counts the number of words in a string
echo str_word_count("Happy morning!");

//strcasecmp - compares two strings.
echo strcasecmp("Hello world!","HELLO WORLD!");

//strpos - finds the position of the first occurrence of a string inside another string
echo strpos("I love php, I love php too!","php");

//trim - removes whitespace and other predefined characters from both sides of a string
//ltrim - left, rtrim - right
$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"Hed!");
?>
?>
