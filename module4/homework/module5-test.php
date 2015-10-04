<?php
include_once('module5-hw.php');

try {

    //Create new Card and run testFunction
    $test = new Card('hearts', 13);
    $test->testFunction();

} catch (Exception $e) {

    //Print the exception message
    echo $e->getMessage();

}
