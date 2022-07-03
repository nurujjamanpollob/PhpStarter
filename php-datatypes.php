<!--

    This example is going to show you how to use different data types in PHP
    In general, there are eight kind of datatype is available in php. That are shown below:

    # String
    # Integer
    # Float (floating point numbers - also called double)
    # Boolean
    # Array
    # Object
    # NULL
    # Resource

    Now, we are going to show you how to use different data types in PHP.

    And, here, we are going to use var_dump() function to show you the data type of each variable.
-->

<?php

    # define a variable with string data type, a String can have anything inside quotes.
    # You can use single or double quotes.
    $string = "Hello, world!";

    # Print the variable
    var_dump($string);

    # define a variable with integer data type, an Integer can have only numbers.
    $integer = 123;

    # Print the variable
    var_dump($integer);

    # define a variable with float data type, a Float can have only numbers and decimal point.
    $float = 123.45;

    # Print the variable
    var_dump($float);

    # define a variable with boolean data type, a Boolean can have only true or false.
    $booleanTrue = true;
    $booleanFalse = false;

    # Print the variable
    var_dump(
        $booleanTrue,
        $booleanFalse
    );

    # define a variable with array data type, an Array can have anything inside square brackets.
    $array = array("Hello", "world");

    # Print the variable
    var_dump($array);

    # define a simple php class, where we are going to have a constructor and a method.
    class UserDetails{

       private String $name;
       private String $age;

       # Constructor
         public function __construct($name, $age){
              $this->name = $name;
              $this->age = $age;
         }

            # Method
            public function getUserDetails(): string
            {
                return "Name: " . $this->name . " Age: " . $this->age;
            }

    }

    # Create an instance of the class
    $userDetails = new UserDetails("Nurujjaman", "22");

    # Print the variable
    var_dump($userDetails);

    # get the value of the method
    $valueFromObject = $userDetails->getUserDetails();

    # Print the variable
    var_dump($valueFromObject);

    # define a variable with null data type, a Null can have only null.
    $null = null;

    # Print the variable
    var_dump($null);

    # The resource data type is a special data type that is used to store references to resources and functions external to php.
    # It is used to store the result of functions that return resources.
    # For example, the function fopen() returns a resource.
    # We are never going to discuss this data type now, as it is an advanced topic for now.
    $resource = fopen("php-datatypes.php", "r");

    # Print the variable
    var_dump($resource);



