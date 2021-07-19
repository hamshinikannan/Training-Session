<?php
//checkdate - validate a Gregorian date
var_dump(checkdate(12,31,-400));
echo "<br>";
var_dump(checkdate(2,29,2003));
echo "<br>";
var_dump(checkdate(2,29,2004));

//ate_create_from_format - returns a new DateTime object formatted according to the specified format
$date=date_create_from_format("j-M-Y","15-Mar-2013");

//date_default_timezone_get - returns the default timezone used by all date/time functions in the script
echo date_default_timezone_get();

//date_default_timezone_set - sets the default timezone used by all date/time functions in the script
date_default_timezone_set("Asia/China");
echo date_default_timezone_get();

//date_create - returns a date formatted according to the specified format.
$date=date_create("2013-03-15");
echo date_format($date,"Y/m/d H:i:s");

//date - local date and time, and returns the formatted date string
echo date("l") . "<br>";// Prints the day
echo date("l jS \of F Y h:i:s A"); // Prints the day, date, month, year, time, AM or PM

//localtime - returns the local time.
print_r(localtime());
echo "<br><br>";
print_r(localtime(time(),true));

//time() function returns the current time in the number of seconds 
$t=time();
echo($t . "<br>");
echo(date("Y-m-d",$t));

//timezone_version_get - returns the version of the timezonedb
echo timezone_version_get();

?>