STRING<br>
<?php
echo 'this is a simple string'; echo "<br>"; //single quotes
echo 'I\'ll be back in a moment'; echo "<br>";
echo 'This is \$ dollar sign '; echo "<br>" //backslash also gets printed
?>

<?php
//heredoc Example
echo <<<EOT
bar <br>
EOT;
?>

<?php
$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.
EOD;

/* More complex example, with variables. */
class foo
{
    var $foo;
    var $bar;

    function __construct()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'MyName';

echo <<<EOT
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should print a capital 'A': \x41 <br>
EOT;
?>

<?php
//nowdoc
echo <<<'abc'
Example of string spanning multiple lines
using nowdoc syntax. Backslashes are always treated literally,
e.g. \\ and \'.
abc;
?>

<?php
//variable parsing
$juice = "apple";
echo "He drank some $juice juice.";
// Invalid. "s" is a valid character for a variable name, but the variable is $juice.
echo "He drank some juice made of $juice.";
// Valid. Explicitly specify the end of the variable name by enclosing it in braces:
echo "He drank some juice made of ${juice}s";
?>