<?php

$name = 'Jerry';
$age = 23;
$location = 'Austin';
$bankBalance = 14.20;
$pets = ['lana', 'ghost', 'ash', 'rue', 'handsome'];

$fruit = new stdClass();
$fruit->name = 'Apple';
$fruit->color = 'Red';
$fruit->price = 4.33;

// Timebox 2
if(is_string($name)){
    echo 'Name is a string. <br />';
} else {
    echo 'Name is not a string. <br />';
}

if(is_int($age)){
    echo 'Age is an integer.<br />';
} else {
    echo 'Age is not an integer. <br />';
}

if(is_string($location)){
    echo 'Location is a string. <br />';
} else {
    echo 'Location is not a string. <br />';
}

/*
 * TERNARY OPERATOR
 *
 * New condition format:
 * condition ? if true : if false
 */
echo(is_float($bankBalance) ? 'Bank balance is a float. <br />' : 'Bank balance is not a float. <br />');

if(is_array($pets)){
    echo 'Pets is an array. <br />';
} else {
    echo 'Pets is not an array. <br />';
}

if(is_object($fruit)){
    echo 'Fruit is an object. <br />';
} else {
    echo 'Fruit is not an object. <br />';
}


