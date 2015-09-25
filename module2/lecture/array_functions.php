<?php
$zoo = array(
    'zone_1' => "Monkey",
    'zone_2' => 'Giraffe',
    'zone_3' => 'Rhino'
);

$newZone = 'zone_4';
$newAnimal = 'Lemur';

$zoo[$newZone] = $newAnimal;

$zoo['zone_2'] = "Gorilla";

//unset() function
unset($zoo['zone_1']);

$fruits=['apple', 'banana', 'mango', 'peach'];

unset($fruits[0]);
$fruits = array_values($fruits);

echo $fruits[0];