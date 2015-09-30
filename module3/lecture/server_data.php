<?php
header('Content-Type: application/json');

$classMates = ['alex', 'jerry', 'simon', 'samir', 'brian', 'traci', 'jared'];

$len = count($classMates) - 1;

$ranNum = rand(0, $len);

echo json_encode(array(
    'name' => $classMates[$ranNum],
    'date' => date('Y-m-d h:i:s')
));

