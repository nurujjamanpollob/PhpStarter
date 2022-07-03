<!-- This example going to show you some basic rules for PHP syntax
    Rules number one - PHP must start with(Space added in front of question mark for fix comment syntax error) < ?php, you have noticed that!
    The default extension for PHP files is .php

    I am using php 8.1 so the ending ?> is not required, and is redundant.
 -->
<?php

/**
 * Rules number two - in PHP keywords, functions, classes and user defined functions are not case-sensitive.
 * for example: (if, else, while, echo) is not case-sensitive
 */

echo "Hello, world(lowercase) <br />";
ECHO "Hello, world(uppercase) <br />";
eCho "Hello, world(mixed case) <br />";

/**
 * Rules number three - in PHP, variables are case-sensitive
 */

$Color = "red";
$color = "blue";
$COLOR = "green";
$cOLoR = "yellow";

# Print all variables
echo "Color: $Color <br />";
echo "color: $color <br />";
echo "COLOR: $COLOR <br />";
echo "cOLoR: $cOLoR <br />";
