<!--
    This section is going to guide you about PHP numbers.
    And we're going to explore many functions that can be used to check if a variable is a number or not.

-->

<?php

    /**
     * Let's start with integer. integer is a number that can only be positive or negative, and can't have decimal point.
     * In 32-bit system, integer can be from -2147483648 to 2147483647 and in 64-bit system, integer can be from -9223372036854775808 to 9223372036854775807.
     * A value greater or lower than these limits is stored as a float.
     *
     * Another important thing: even 2.5 * 4 results 10, but is store as float because one of the operands is a float.
     *
     * PHP has following predefined integer constants:
     * PHP_INT_MIN - minimum value of an integer
     * PHP_INT_MAX - maximum value of an integer
     * PHP_INT_SIZE - size of an integer in bytes
     *
     * PHP has the following functions to check if the type of variable is integer:
     * is_int()
     * is_integer() - alias of is_int()
     * is_long() - alias of is_int()
     *
     * Okay, lets start play with it.
     */

    # define a variable with integer data type, an Integer can have only numbers.
    $integer = 123;

    # Explore is_int() function to check if the variable is an integer or not.
    echo "Is this variable an integer? " . var_dump(is_int($integer)) . "<br />";

    # Define a variable with float data type, a Float can have only numbers and decimal point.
    $float = 123.45;

    # Test is_int() function to check if the variable is an integer or not.
    echo "Is this variable an integer? " . var_dump(is_int($float)) . "<br />";


    /**
     * PHP Float - float is a number that can have decimal point.
     * A float data type can commonly store a value up to 1.7976931348623E+308 (platform dependent), and a maximum precision of 14 digits.
     *
     * PHP has the following predefined float constants:
     * PHP_FLOAT_MIN - minimum value of a float
     * PHP_FLOAT_MAX - maximum value of a float
     * PHP_FLOAT_DIG - number of significant digits in a float
     * PHP_FLOAT_EPSILON - difference between 1.0 and the next representable float
     * PHP_FLOAT_MIN_EXP - minimum exponent for a float
     * PHP_FLOAT_MAX_EXP - maximum exponent for a float
     * PHP_FLOAT_MIN_10_EXP - minimum exponent for a base 10 float
     * PHP_FLOAT_MAX_10_EXP - maximum exponent for a base 10 float
     * PHP_FLOAT_RADIX - radix for a float
     * PHP_FLOAT_ROUNDS - number of decimal digits in a float
     * PHP_FLOAT_SCALE - scale for a float
     * PHP_FLOAT_STR_PRECISION - number of significant digits in a float as a string
     *
     * PHP has the following functions to check if the type of variable is float:
     * is_float()
     * is_real() - alias of is_float()
     * is_double() - alias of is_float()
     * is_numeric() - alias of is_float()
     * is_finite() - alias of is_float()
     * is_infinite() - alias of is_float()
     * is_nan() - alias of is_float()
     *
     */

    echo "Is this variable a float? " . var_dump(is_float($float)) . "<br />";

    /**
     * PHP Infinity - is a value that is larger than PHP_FLOAT_MAX.
     *
     * PHP has the following functions to check if the type of variable is infinity:
     * is_infinite()
     * is_nan() - alias of is_infinite()
     * is_finite() - alias of is_infinite()
     *
     */

    $infiniteVar = 1.9e308;

    echo "Is this variable an infinite? " . var_dump(is_infinite($infiniteVar)) . "<br />";

    /**
     * PHP NaN - is a value that is not a number.
     *
     * NaN is used for impossible values, such as 0/0, or sqrt(-1), or log(0).
     *
     * PHP has the following functions to check if the type of variable is NaN:
     * is_nan()
     * is_infinite() - alias of is_nan()
     * is_finite() - alias of is_nan()
     *
     */

    $nanVar = sqrt(-1);

    echo "Is this variable a NaN? " . var_dump(is_nan($nanVar)) . "<br />";


    /**
     * PHP Numerical String - is a string that can only contain numbers.
     *
     * PHP has the following functions to check if the type of variable is numerical string:
     *
     * is_numeric()
     * is_string() - alias of is_numeric()
     * is_scalar() - alias of is_numeric()
     * is_float() - alias of is_numeric()
     * is_integer() - alias of is_numeric()
     * is_long() - alias of is_numeric()
     * is_double() - alias of is_numeric()
     * is_real() - alias of is_numeric()
     * is_finite() - alias of is_numeric()
     * is_infinite() - alias of is_numeric()
     * is_nan() - alias of is_numeric()
     * is_int() - alias of is_numeric()
     * is_long() - alias of is_numeric()
     */

    $numericString = "123";

    echo "Is this variable a numerical string? " . var_dump(is_numeric($numericString)) . "<br />";

    /**
     * PHP Casting String and Floats to number - is a way to convert a string or float to a number.
     *
     * PHP has the following functions to convert a string or float to a number:
     * intval()
     * floatval()
     * doubleval()
     *
     * Also, type checking can be performed with these functions, to determine if a variable is a number or not.:
     * is_int()
     * is_float()
     * is_double()
     * is_string()
     * is_numeric()
     */

    # Cast e float to integer
    $simpleFloat = "123.45";
    $castedInt = (int)$simpleFloat;

    echo "Is this variable an integer? " . var_dump(is_int($castedInt)) . "<br />";

    # Cast a numeric String to float
    $numericString = "123.80";
    $castedFloat = (float)$numericString;

    echo "Is this variable a float? " . var_dump(is_float($castedFloat)) . "<br />";
