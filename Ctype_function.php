<?php
//ctype_alnum - Check for alphanumeric character
$strings = array('AbCd1zyZ9', 'foo!#$bar');
foreach ($strings as $testcase) {
    if (ctype_alnum($testcase)) {
        echo "The string $testcase consists of all letters or digits.\n";
    } else {
        echo "The string $testcase does not consist of all letters or digits.\n";
    }
}

//ctype_alpha — Check for alphabetic character
echo (ctype_alpha("Helloworld")."\n");

//ctype_cntrl — Check for control character
$strings = array('string1' => "\n\r\t", 'string2' => 'arf12');
foreach ($strings as $name => $testcase) {
    if (ctype_cntrl($testcase)) {
        echo "The string '$name' consists of all control characters.\n";
    } else {
        echo "The string '$name' does not consist of all control characters.\n";
    }
}

//ctype_digit — Check for numeric character
echo (ctype_digit("01234")."\n");

//ctype_graph — Check for any printable character except space
$strings = array('string1' => "asdf\n\r\t", 'string2' => 'arf12', 'string3' => 'LKA#@%.54');
foreach ($strings as $name => $testcase) {
    if (ctype_graph($testcase)) {
        echo "The string '$name' consists of all (visibly) printable characters.\n";
    } else {
        echo "The string '$name' does not consist of all (visibly) printable characters.\n";
    }
}

//ctype_lower — Check for lowercase character
$strings = array('aac123', 'qiutoas', 'QASsdks');
foreach ($strings as $testcase) {
    if (ctype_lower($testcase)) {
        echo "The string $testcase consists of all lowercase letters.\n";
    } else {
        echo "The string $testcase does not consist of all lowercase letters.\n";
    }
}

//ctype_print — Check for printable character
$strings = array('string1' => "asdf\n\r\t", 'string2' => 'arf12', 'string3' => 'LKA#@%.54');
foreach ($strings as $name => $testcase) {
    if (ctype_print($testcase)) {
        echo "The string '$name' consists of all printable characters.\n";
    } else {
        echo "The string '$name' does not consist of all printable characters.\n";
    }
}

//ctype_punct — Check for any printable character which is not whitespace or an alphanumeric character
$strings = array('ABasdk!@!$#', '!@ # $', '*&$()');
foreach ($strings as $testcase) {
    if (ctype_punct($testcase)) {
        echo "The string $testcase consists of all punctuation.\n";
    } else {
        echo "The string $testcase does not consist of all punctuation.\n";
    }
}

//ctype_space — Check for whitespace character
echo (ctype_space("\r\n \t")."\n");
//another example
$strings = array(
    'string1' => "\n\r\t",
    'string2' => "\narf12",
    'string3' => '\n\r\t' // note the single quotes
);
foreach ($strings as $name => $testcase) {
    if (ctype_space($testcase)) {
        echo "The string '$name' consists of whitespace characters only.\n";
    } else {
        echo "The string '$name' contains non-whitespace characters.\n";
    }
}

//ctype_upper — Check for uppercase character
$strings = array('AKLWC139', 'LMNSDO', 'akwSKWsm');
foreach ($strings as $testcase) {
    if (ctype_upper($testcase)) {
        echo "The string $testcase consists of all uppercase letters.\n";
    } else {
        echo "The string $testcase does not consist of all uppercase letters.\n";
    }
}

//ctype_xdigit — Check for character representing a hexadecimal digit
$strings = array('AB10BC99', 'AR1012', 'ab12bc99');
foreach ($strings as $testcase) {
    if (ctype_xdigit($testcase)) {
        echo "The string $testcase consists of all hexadecimal digits.\n";
    } else {
        echo "The string $testcase does not consist of all hexadecimal digits.\n";
    }
}