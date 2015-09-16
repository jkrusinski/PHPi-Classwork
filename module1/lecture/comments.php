<?php
// This is one way to define a comment

# This is another way to do the same thing

/*
 * This is a comment that spans
 * multiple lines
 * and is slightly different from this next comment...
 */

/**
 * ...that has 2 ** after the first /
 * This style of commenting is used in a "docblock"
 * Use this to document a method signature
 */

$var = 'complex';

/*
 * This is a comment
 * Another comment
 * Omg, it keeps going
 * Wow
 */


/**
 * This function multiplies
 * @param int $name a number
 * @param int $age a number
 * @return int $tada the multiple
 */
function foo($name, $age)
{
    $tada = $name * $age;
    return $tada;
}

echo 'I am here';
echo "\n";
echo 'So am I';
echo "\n";

/*
 * single quotes = literal strings
 * double quotes = complex strings
 */



