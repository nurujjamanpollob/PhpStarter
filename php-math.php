<!--

    PHP Math Functions - Math functions is used to abstract the mathematical operations.
    The following are the list of math functions:
    abs() - Returns the absolute value of a number.
    ceil() - Returns the smallest integer greater than or equal to a number.
    floor() - Returns the largest integer less than or equal to a number.
    round() - Rounds a number to a specified number of decimal places.
    rand() - Generates a random integer.
    sqrt() - Returns the square root of a number.
    pi() - Returns the value of pi.
    pow() - Returns the value of a number raised to the power of another.
    exp() - Returns the value of e raised to the power of a number.
    log() - Returns the natural logarithm of a number.
    log10() - Returns the base-10 logarithm of a number.
    sin() - Returns the sine of the number.
    cos() - Returns the cosine of the number.
    tan() - Returns the tangent of the number.
    asin() - Returns the arc sine of a number.
    acos() - Returns the arc cosine of a number.
    atan() - Returns the arc tangent of a number.
    atan2() - Returns the arc tangent of a number, with two arguments.
    deg2rad() - Converts a number from degrees to radians.
    rad2deg() - Converts a number from radians to degrees.
    sinh() - Returns the hyperbolic sine of a number.
    cosh() - Returns the hyperbolic cosine of a number.
    tanh() - Returns the hyperbolic tangent of a number.
    asinh() - Returns the hyperbolic arc sine of a number.
    acosh() - Returns the hyperbolic arc cosine of a number.
    atanh() - Returns the hyperbolic arc tangent of a number.
    decbin() - Converts a decimal number to binary.
    bindec() - Converts a binary number to decimal.
    dechex() - Converts a decimal number to hexadecimal.
    hexdec() - Converts a hexadecimal number to decimal.
    decoct() - Converts a decimal number to octal.
    octdec() - Converts an octal number to decimal.
    base_convert() - Converts a number between arbitrary bases.

    Okay, let's start!
-->

<?php

    # abs() - Returns the absolute value of a number.
    $abs = abs(-123);
    echo "The absolute value of -123 is $abs";

    # ceil() - Returns the smallest integer greater than or equal to a number.
    $ceil = ceil(123.45);
    echo "The ceil value of 123.45 is $ceil";

    # floor() - Returns the largest integer less than or equal to a number.
    $floor = floor(123.45);
    echo "The floor value of 123.45 is $floor";

    # round() - Rounds a number to a specified number of decimal places.
    $round = round(123.45);
    echo "The round value of 123.45 is $round";

    # rand() - Generates a random integer.
    $rand = rand();
    echo "The random value of 123.45 is $rand";

    # sqrt() - Returns the square root of a number.
    $sqrt = sqrt(123.45);
    echo "The square root value of 123.45 is $sqrt";

    # pi() - Returns the value of pi.
    $pi = pi();
    echo "The value of pi is $pi";

    # pow() - Returns the value of a number raised to the power of another.
    $pow = pow(2, 3);
    echo "The value of 2 raised to the power of 3 is $pow";

    # exp() - Returns the value of e raised to the power of a number.
    $exp = exp(2);
    echo "The value of e raised to the power of 2 is $exp";

    # log() - Returns the natural logarithm of a number.
    $log = log(2);
    echo "The natural logarithm of 2 is $log";

    # log10() - Returns the base-10 logarithm of a number.
    $log10 = log10(2);
    echo "The base-10 logarithm of 2 is $log10";

    # sin() - Returns the sine of the number.
    $sin = sin(2);
    echo "The sine of 2 is $sin";

    # cos() - Returns the cosine of the number.
    $cos = cos(2);
    echo "The cosine of 2 is $cos";

    # tan() - Returns the tangent of the number.
    $tan = tan(2);
    echo "The tangent of 2 is $tan";

    # asin() - Returns the arc sine of a number.
    $asin = asin(2);
    echo "The arc sine of 2 is $asin";

    # acos() - Returns the arc cosine of a number.
    $acos = acos(2);
    echo "The arc cosine of 2 is $acos";

    # atan() - Returns the arc tangent of a number.
    $atan = atan(2);
    echo "The arc tangent of 2 is $atan";

    # atan2() - Returns the arc tangent of a number, with two arguments.
    $atan2 = atan2(2, 3);
    echo "The arc tangent of 2 and 3 is $atan2";

    # deg2rad() - Converts a number from degrees to radians.
    $deg2rad = deg2rad(2);
    echo "The value of 2 in radians is $deg2rad";

    # rad2deg() - Converts a number from radians to degrees.
    $rad2deg = rad2deg(2);
    echo "The value of 2 in degrees is $rad2deg";

    # sinh() - Returns the hyperbolic sine of a number.
    $sinh = sinh(2);
    echo "The hyperbolic sine of 2 is $sinh";

    # cosh() - Returns the hyperbolic cosine of a number.
    $cosh = cosh(2);
    echo "The hyperbolic cosine of 2 is $cosh";

    # tanh() - Returns the hyperbolic tangent of a number.
    $tanh = tanh(2);
    echo "The hyperbolic tangent of 2 is $tanh";

    # asinh() - Returns the hyperbolic arc sine of a number.
    $asinh = asinh(2);
    echo "The hyperbolic arc sine of 2 is $asinh";

    # acosh() - Returns the hyperbolic arc cosine of a number.
    $acosh = acosh(2);
    echo "The hyperbolic arc cosine of 2 is $acosh";

    # atanh() - Returns the hyperbolic arc tangent of a number.
    $atanh = atanh(2);
    echo "The hyperbolic arc tangent of 2 is $atanh";

    # decbin() - Converts a decimal number to binary.
    $decbin = decbin(2);
    echo "The decimal value of 2 in binary is $decbin";

    # bindec() - Converts a binary number to decimal.
    $bindec = bindec(2);
    echo "The binary value of 2 in decimal is $bindec";

    # dechex() - Converts a decimal number to hexadecimal.
    $dechex = dechex(2);
    echo "The decimal value of 2 in hexadecimal is $dechex";

    # hexdec() - Converts a hexadecimal number to decimal.
    $hexdec = hexdec(2);
    echo "The hexadecimal value of 2 in decimal is $hexdec";

    # decoct() - Converts a decimal number to octal.
    $decoct = decoct(2);
    echo "The decimal value of 2 in octal is $decoct";

    # octdec() - Converts an octal number to decimal.
    $octdec = octdec(2);
    echo "The octal value of 2 in decimal is $octdec";

    # base_convert() - Converts a number between arbitrary bases.
    $base_convert = base_convert(2, 2, 2);
    echo "The value of 2 in base 2 is $base_convert";

    # number_format() - Formats a number with grouped thousands.
    $number_format = number_format(2);
    echo "The value of 2 in grouped thousands is $number_format";




    
