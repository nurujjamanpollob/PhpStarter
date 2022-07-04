<!--
    PHP contents is used to define constants.

    The syntax of the constants is: define(<constant_name>, <value>);
    The constant name can be any valid PHP variable name.

    You can also define constant arrays using th following examples:
    define(<constant_name>, <array>);

    Alternately, you can use this code to define a constant:
    const <constant_name> = <value>;

    Note: Constants are global and can be used anywhere in the script.

    Okay, let's start!
-->

<?php

    # Define a constant with const keyword.
    const CONSTANT_NAME = "value";
    echo "define using const: " . CONSTANT_NAME;

    # Define a constant with define() call.
    define("CONSTANT_NAME1", "value");
    echo "Value of defineConst: " . CONSTANT_NAME. "<br>";

    # Define a constant with define() call and array.
    define("CONSTANT_NAME2", array("value1", "value2"));
    $arrayToString = implode(", ", CONSTANT_NAME2);
    echo "Value of defineConst: " . $arrayToString. "<br>";


