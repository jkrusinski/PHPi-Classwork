<?php

###########################################################################
################################# IF-ELSE #################################
###########################################################################

echo '<h1>Control Structures</h1>';

echo '<h3>Simple <em>if-else</em></h3>';

$location = 'Austin';
if ($location == 'Austin') {
    echo '<p>Your town rocks!</p>';
} else {
    echo '<p>Your town is cool</p>';
}

echo '<h3>Nested Conditional</h3>';

$myFlower = 'lily';
$myAnimal = 'human';
$flowers = ['rose', 'daisy', 'lily', 'lotus'];
$animals = ['monkey', 'tiger', 'lion', 'human'];

if (in_array($myFlower, $flowers)) {

    echo "<p>A $myFlower smells great!</p>";

    if (in_array($myAnimal, $animals)) {
        echo "<p>And a $myAnimal is a killer!</p>";
    } else {
        echo "<p>And a $myAnimal is not dangerous.</p>";
    }

} else {
    echo "<p>A $myFlower is not very pleasant!</p>";
}

###########################################################################
############################### SWITCH-CASE ###############################
###########################################################################

echo '<h3>Switch-Case</h3>';

$errorCode = 404;

switch ($errorCode) {
    case 404:
        $errorMessage = 'Not found!';
        break;
    case 500:
        $errorMessage = 'Internal Server Error';
        break;
    case 304:
        $errorMessage = 'Not Modified';
        break;
    default:
        $errorMessage = 'Invalid error code!';
        break;
}

echo "<p>Error code $errorCode: $errorMessage</p>";


