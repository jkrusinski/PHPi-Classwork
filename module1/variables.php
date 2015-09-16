<?php

//Define some variables, and assign values to them

$personName = 'Jane Doe';   // string
$personAge = 26;            // int
$bankBalance = 17.45;       // float
$isCool = false;            // bool

$fruits = ['orange', 'apple', 'papaya', array('plums', 'raisins')];   // array
$pets = array('dog', 'cat', 'giraffe');     // another way to array

echo '<h4>Fruits</h4>';
echo '<pre>';
print_r($fruits);
echo '</pre>';


###################################################################################
################################ ASSOCIATIVE ARRAY ################################
###################################################################################

$user = array(
    'name' => 'Jerry',
    'age' => 23,
    'location' => 'Austin'
);

echo '<h4>Associative Array</h4>';
echo '<pre>';
print_r($user);
echo '</pre>';


###################################################################################
############################## STANDARD CLASS OBJECT ##############################
###################################################################################

$user2 = new stdClass();

$user2->name = 'Jerry';
$user2->age = 23;
$user2->location = 'Austin';

echo '<h4>Standard Class Object</h4>';
echo '<pre>';
print_r($user2);
echo '</pre>';

