<!-- This example going to show you PHP variable scope -->
<?php

    /**
     * First example - Global scope
     * This variable can be only accessed outside by functions,
     * If you try to access this variable inside a function, it will throw error.
     */
    $globalScopeVar = "Nurujjaman Pollob from Bangladesh";

    # trying access a global variable from function should throw error
    function accessGlobalFunctionInvalid(): void
    {

        echo "Tyring access global variable $globalVar <br /> <br />";

    }

    # Call accessGlobalFunctionInvalid()
    accessGlobalFunctionInvalid();

    # accessing global variable from outside should work fine
    echo "Global variable $globalScopeVar <br /> <br />";

    /**
     * Second example - Local variable
     * That can be used locally inside a function.
     */
    function accessLocalVariable() : void
    {
        $localVar = "Hi, this is local variable <br /><br />";

        echo $localVar;
    }

    # Call accessLocalVariable()
    accessLocalVariable();

    /**
     * Define a global variable, so the functions can access it.
     */
    global $globalVar;
    $globalVar = "This is a global variable";

    # Try to access it from inside a function
    function accessGlobalVariable() : void
    {
        # Accessing global reference
        global $globalVar;

        echo "Access Global variable inside function -> $globalVar <br /> <br />";
    }

    # Call accessGlobalVariable()
    accessGlobalVariable();


    # Try to access it from outside
    echo "Access Global variable outside function -> $globalVar <br /> <br />";

    /**
     * PHP also store all global variables in an array called $GLOBALS.
     * So, here, we are accessing $GLOBALS array and accessing $globalVar.
     * Using $GLOBALS['index'] where php usages name based indexing.
     */

    # Access from $GLOBALS['index']
    $varFromGlobal = $GLOBALS['globalVar'];

    # Echo outside the function
    echo "Access Global variable from GLOBALS['index'] ouside function -> $varFromGlobal <br /> <br />";

    # Echo inside the function
    function accessFromGlobalsArray() : void
    {
        # Access from $GLOBALS['index']
        $varFromGlobal = $GLOBALS['globalVar'];

        echo "Access Global variable from GLOBALS['index'] inside function -> $varFromGlobal <br /> <br />";
    }

    # Call accessFromGlobalsArray()
    accessFromGlobalsArray();

    /**
     * Third example - Static variable
     *  is a variable that is shared by all instances of a class.
     * Normally, a static variable is declared outside any function.
     *
     * This example going to show you how to define a static variable, that is sit
     * inside a function, and it's value keeps constant, after finish executing this function.
     * Normally, when you define a variable for example, $name, inside a function, it's got deleted after
     * the function is executed.
     */
    function defineStaticVariable() : void{

        # Define a static variable
        static $staticVar = 0;

        echo "Static variable inside function -> $staticVar <br /> <br />";

        # Increment the static variable
        $staticVar++;
    }

    # Call defineStaticVariable()
    defineStaticVariable();
    # Call defineStaticVariable()
    defineStaticVariable();
    # Call defineStaticVariable()
    defineStaticVariable();




