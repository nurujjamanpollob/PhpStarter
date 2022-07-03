<!--

    This section solely discuss php string functions
    For now, this tutorial discusses only about the following functions:

    1. strlen()
    2. str_word_count()
    3. strrev()
    4. str_pos()
    5. str_replace()
    6. str_split()

    Okay, let's start!
-->

<?php

    # strlen() - returns the length of the string
    $string = "Hello, world!";

    # print length of the string
    echo "Length of the string: " . strlen($string) . "<br />";

    # str_word_count() - returns the number of words in a string
    echo "Number of words in the string: " . str_word_count($string) . "<br />";

    # str_reverse() - returns the string in reverse order
    echo "String in reverse order: " . strrev($string) . "<br />";

    # str_pos() - returns the position of the first occurrence of a substring in a string
    echo "Position of the first occurrence of the string: " . strpos($string, "world") . "<br />";

    # str_replace() - replaces all occurrences of the search string with the replacement string
    echo str_replace("world", "universe", $string);

    # str_split() - splits a string into an array of substrings
    echo "String in array: " . implode(", ", str_split($string)) . "<br />";



