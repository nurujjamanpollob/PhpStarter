<!--
    This example going to discuss PHP operators

    Here, is the List of PHP operators:

    1. Arithmetic Operators
    2. Assignment Operators
    3. Comparison Operators
    5. Logical Operators
    6. String Operators
    7. Increment/Decrement Operators
    8. Array Operators
    9. Conditional Assignment Operators

    Now, we are going to discuss them.

-->
<?php

    /**
     * Arithmetic Operators - Addition, Subtraction, Multiplication, Division, Modulus, Exponentiation
     */

    # Addition Example
    $x = 10;
    $y = 20;
    $z = $x + $y;
    echo "The sum of $x and $y is $z <br>";

    # Subtraction Example
    $z = $x - $y;
    echo "The difference of $x and $y is $z <br>";

    # Multiplication Example
    $z = $x * $y;
    echo "The product of $x and $y is $z <br>";

    # Division Example
    $z = $x / $y;
    echo "The quotient of $x and $y is $z <br>";

    # Modulus Example
    $z = $x % $y;
    echo "The remainder of $x and $y is $z <br>";

    # Exponentiation Example
    $z = $x ** $y;
    echo "The exponent of $x and $y is $z <br>";

    /**
     * PHP Assignment Operators is stands for assigning a value to a variable.
     * The assignment operators are:
     * 1. = (Assignment)
     * 2. += (Addition Assignment)
     * 3. -= (Subtraction Assignment)
     * 4. *= (Multiplication Assignment)
     * 5. /= (Division Assignment)
     * 6. %= (Modulus Assignment)
     * 7. .= (Concatenation Assignment)
     */

    # Assignment Operator Example
    $varX = 10;
    echo "After assigning the value of $varX to the variable varX, the value of varX is $varX <br>";

    # Addition Assignment Operator Example
    $varX += 10;
    echo "After adding 10 to the value of varX, the value of varX is $varX <br>";

    # Subtraction Assignment Operator Example
    $varX -= 10;
    echo "After subtracting 10 from the value of varX, the value of varX is $varX <br>";

    # Multiplication Assignment Operator Example
    $varX *= 10;
    echo "After multiplying 10 to the value of varX, the value of varX is $varX <br>";

    # Division Assignment Operator Example
    $varX /= 10;
    echo "After dividing 10 from the value of varX, the value of varX is $varX <br>";

    # Modulus Assignment Operator Example
    $varX %= 10;
    echo "After modulus 10 from the value of varX, the value of varX is $varX <br>";

    # Concatenation Assignment Operator Example
    $varX .= 10;
    echo "After concatenating 10 to the value of varX, the value of varX is $varX <br>";

    /**
     * PHP Comparison Operators is stands for comparing two values.
     * The comparison operators are:
     * 1. == (Equality) - Checks if two values are equal.
     * 2. === (Identity) - Checks if two values are equal and of the same type.
     * 3. != (Inequality) - Checks if two values are not equal.
     * 4. !== (Idenity Inequality) - Checks if two values are not equal or not of the same type.
     * 5. < (Less Than) - Checks if the value of the left operand is less than the value of the right operand.
     * 6. > (Greater Than) - Checks if the value of the left operand is greater than the value of the right operand.
     * 7. <= (Less Than or Equal To) - Checks if the value of the left operand is less than or equal to the value of the right operand.
     * 8. >= (Greater Than or Equal To) - Checks if the value of the left operand is greater than or equal to the value of the right operand.
     */

    # Equality Operator Example
    $varX = 10;
    $varY = 10;
    echo "Is varX equal to varY? ". var_dump($varX == $varY) . "<br>";

    # Identity Operator Example
    echo "Is varX identical to varY? ". var_dump($varX === $varY) . "<br>";

    # Inequality Operator Example
    echo "Is varX not equal to varY? ". var_dump($varX != $varY) . "<br>";

    # Identity Inequality Operator Example
    echo "Is varX not identical to varY? ". var_dump($varX !== $varY) . "<br>";

    # Less Than Operator Example
    echo "Is varX less than varY? ". var_dump($varX < $varY) . "<br>";

    # Greater Than Operator Example
    echo "Is varX greater than varY? ". var_dump($varX > $varY) . "<br>";

    # Less Than or Equal To Operator Example
    echo "Is varX less than or equal to varY? ". var_dump($varX <= $varY) . "<br>";

    # Greater Than or Equal To Operator Example
    echo "Is varX greater than or equal to varY? ". var_dump($varX >= $varY) . "<br>";

    /**
     * PHP Logical Operators is stands for combining two or more conditional statements.
     * The logical operators are:
     * 1. && (Logical AND) - Checks if both operands are true.
     * 2. || (Logical OR) - Checks if either operand is true.
     * 3. ! (Logical NOT) - Checks if the operand is false.
     */

    # Logical AND Operator Example
    $varY = 20;
    echo "Is varX less than varY and varX is 10? ". var_dump($varX < $varY && $varX == 10) . "<br>";

    # Logical OR Operator Example
    echo "Is varX less than varY or varX is 10? ". var_dump($varX < $varY || $varX == 10) . "<br>";

    # Logical NOT Operator Example
    echo "Is varX not equal to 10? ". var_dump(!$varX == 10);

    /**
     * PHP Conditional Assignment Operators is stands for assigning a value to a variable if a condition is true.
     * The conditional assignment operators are:
     * 1. ?: (Ternary Operator) - Assigns a value to a variable if a condition is true.
     */

    # Ternary Operator Example
    $varX = $varX > 10 ? 10 : 20;
    echo "The value of varX is $varX <br>";

    /**
     * PHP String Operators is stands for manipulating strings.
     * The string operators are:
     * 1. . (Concatenation) - Concatenates two or more strings.
     * 2. .= (Concatenation Assignment) - Concatenates two or more strings and assigns the result to the left operand.
     * 3. .= (String Length) - Returns the length of a string.
     * 4. .= (String Position) - Returns the position of a character in a string.
     * 5. .= (String Replace) - Replaces a string with another string.
     * 6. .= (String Split) - Splits a string into an array.
     * 7. .= (String Substring) - Returns a portion of a string.
     * 8. .= (String Trim) - Removes whitespace from both ends of a string.
     * 9. .= (String Uppercase) - Converts a string to uppercase.
     * 10. .= (String Lowercase) - Converts a string to lowercase.
     * 11. .= (String Capitalize) - Capitalizes the first letter of a string.
     * 12. .= (String Reverse) - Reverses a string.
     * 13. .= (String Pad) - Pads a string to a certain length.
     * 14. .= (String Repeat) - Repeats a string a certain number of times.
     */

    # Concatenation Operator Example
    $varX = "Hello ";
    $varY = "World!";
    $varZ = $varX . $varY;
    echo "varX and varY is concatenated to varZ: $varZ <br>";

    # Concatenation Assignment Operator Example
    $varX .= "World!";
    echo "varX is concatenated to varY: $varX <br>";

    # String Length Operator Example
    $varX = "Hello World!";
    echo "The length of varX is ". strlen($varX) . " characters <br>";

    # String Position Operator Example
    $varX1 = "Hello World!";
    echo "The position of the letter 'o' in varX is ". strpos($varX1, "o") . " <br>";

    # String Replace Operator Example
    $varX2 = "Hello World!";
    $varY = str_replace("World", "Universe", $varX2);
    echo "The string 'World' in varX is replaced with 'Universe' in varY: $varY <br>";

    # String Split Operator Example
    $varX3 = "Hello World!";
    $varY = explode(" ", $varX3);
    echo "The string 'Hello World!' is split into an array: ". var_dump($varY)." <br>";

    # String Substring Operator Example
    $varX4 = "Hello World!";
    echo "The substring of varX from position 5 to position 10 is: ". substr($varX4, 5, 10) . " <br>";

    # String Trim Operator Example
    $varX5 = "Hello World!";
    echo "The string 'Hello World!' is trimmed: ". trim($varX5) . " <br>";

    # String Uppercase Operator Example
    $varX6 = "hello world!";
    echo "The string 'hello world!' is converted to uppercase: ". strtoupper($varX6) . " <br>";

    # String Lowercase Operator Example
    $varX7 = "HELLO WORLD!";
    echo "The string 'HELLO WORLD!' is converted to lowercase: ". strtolower($varX7) . " <br>";

    # String Capitalize Operator Example
    $varX8 = "hello world!";
    echo "The string 'hello world!' is capitalized: ". ucwords($varX8) . " <br>";

    # String Reverse Operator Example
    $varX9 = "Hello World!";
    echo "The string 'Hello World!' is reversed: ". strrev($varX9) . " <br>";

    # String Pad Operator Example
    $varX10 = "Hello World!";
    echo "The string 'Hello World!' is padded: ". str_pad($varX10, 20, "*") . " <br>";

    # String Repeat Operator Example
    $varX11 = "Hello World!";
    echo "The string 'Hello World!' is repeated: ". str_repeat($varX11, 3) . " <br>";

    /**
     * PHP Array Operators is stands for manipulating arrays.
     * The array operators are:
     * 1. [] (Array Index) - Returns the value of an element in an array.
     * 2. []= (Array Index Assignment) - Assigns a value to an element in an array.
     * 3. []= (Array Push) - Adds a value to the end of an array.
     * 4. []= (Array Pop) - Removes the last element from an array.
     * 5. []= (Array Shift) - Removes the first element from an array.
     * 6. []= (Array Unshift) - Adds a value to the beginning of an array.
     * 7. []= (Array Merge) - Merges two or more arrays.
     * 8. []= (Array Sort) - Sorts an array.
     * 9. []= (Array Reverse) - Reverses an array.
     * 10. []= (Array Slice) - Extracts a portion of an array.
     * 11. []= (Array Splice) - Inserts or removes elements from an array.
     * 12. []= (Array Key Exists) - Checks if an array contains a specified key.
    */

    # Array Index Operator Example
    $varX = array("Hello", "World!");
    echo "The value of varX[0] is: ". $varX[0] . " <br>";

    # Array Index Assignment Operator Example
    $varX[0] = "Hello World!";
    echo "The value of varX[0] is: ". $varX[0] . " <br>";

    # Array Push Operator Example
    $varX = array("Hello", "World!");
    $varX[] = "Universe";
    echo "The value of varX[2] is: ". $varX[2] . " <br>";

    # Array Pop Operator Example
    $varX = array("Hello", "World!", "Universe");
    array_pop($varX);
    echo "The value of varX[1] is: ". $varX[1] . " <br>";

    # Array Shift Operator Example
    $varX = array("Hello", "World!", "Universe");
    array_shift($varX);
    echo "The value of varX[0] is: ". $varX[0] . " <br>";

    # Array Unshift Operator Example
    $varX = array("Hello", "World!");
    array_unshift($varX, "Universe");
    echo "The value of varX[0] is: ". $varX[0] . " <br>";

    # Array Merge Operator Example
    $varX = array("Hello", "World!");
    $varY = array("Universe");
    $varZ = array_merge($varX, $varY);
    echo "The value of varZ[2] is: ". $varZ[2] . " <br>";

    # Array Sort Operator Example
    $varX = array("Hello", "World!", "Universe");
    sort($varX);
    echo "The value of varX[0] is: ". $varX[0] . " <br>";

    # Array Reverse Operator Example
    $varX = array("Hello", "World!", "Universe");
    rsort($varX);
    echo "The value of varX[0] is: ". $varX[0] . " <br>";

    # Array Slice Operator Example
    $varX = array("Hello", "World!", "Universe");
    $varY = array_slice($varX, 1, 2);
    echo "The value of varY[0] is: ". $varY[0] . " <br>";

    # Array Splice Operator Example
    $varX1 = array("Hello", "World!", "Universe");
    array_splice($varX1, 1, 0, "Universe");
    echo "The value of varX1[1] is: ". $varX1[1] . " <br>";

    # Array Key Exists Operator Example
    $varX = array("Hello" => "World!", "Universe" => "Hello World!");
    $isExists = array_key_exists("Hello", $varX);
    echo "The value of isExists is: ". var_dump($isExists) . " <br>";


    /**
     * PHP Increment/Decrement Operators is stands for manipulating variables.
     * The increment/decrement operators are:
     * 1. ++ (Increment) - Increments the value of a variable.
     * 2. -- (Decrement) - Decrements the value of a variable.
     */

    # Increment Operator Example
    $varX = 1;
    $varX++;
    echo "The value of varX is: ". $varX . " <br>";

    # Decrement Operator Example
    $varX = 1;
    $varX--;
    echo "The value of varX is: ". $varX . " <br>";

    /**
     * PHP Conditional Assignment Operators is stands for assigning a value to a variable if a condition is true.
     * The conditional assignment operators are:
     * 1. ?: (Ternary Operator) - Assigns a value to a variable if a condition is true.
     */

    # PHP conditional assignment operator example - Ternary Operator
    $varX = 1;
    $varY = $varX > 0 ? "Positive" : "Negative";
    echo "The value of varY is: ". $varY . " <br>";





