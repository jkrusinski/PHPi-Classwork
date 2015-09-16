<html>
<head>
    <style>

    </style>
</head>
<body>
<?php

##############################################################
######################### DATA TYPES #########################
##############################################################

$name = 'Jerry';
$age = 23;
$location = 'Austin';
$bankBalance = 14.20;
$pets = ['lana', 'ghost', 'ash', 'rue', 'handsome'];

$fruit = new stdClass();
$fruit->name = 'Apple';
$fruit->color = 'Red';
$fruit->price = 4.33;

echo '<h1>Find Type</h1>';
echo '<h3>is_</h3>';

if (is_string($name)) {
    echo '<p>Name is a string.</p>';
} else {
    echo '<p>Name is not a string.</p>';
}

if (is_int($age)) {
    echo '<p>Age is an integer.</p>';
} else {
    echo '<p>Age is not an integer.</p>';
}

if (is_string($location)) {
    echo '<p>Location is a string.</p>';
} else {
    echo '<p>Location is not a string.</p>';
}

// TERNARY OPERATOR
echo(is_float($bankBalance) ? '<p>Bank balance is a float.</p>' : '<p>Bank balance is not a float.</p>');

if (is_array($pets)) {
    echo '<p>Pets is an array.</p>';
} else {
    echo '<p>Pets is not an array.</p>';
}

if (is_object($fruit)) {
    echo '<p>Fruit is an object.</p>';
} else {
    echo '<p>Fruit is not an object.</p>';
}

##############################################################
######################### TYPECASTING ########################
##############################################################

echo '<h1>Typecasting</h1>';

$actualNumber = 15;
echo '<p>The type of $actualNumber is: <pre>';
var_dump($actualNumber);
echo '</pre></p>';

$stringNumber = '15';
echo '<p>The type of $stringNumber is: <pre>';
var_dump($stringNumber);
echo '</pre></p>';

$castedIntegerString = (int)$stringNumber;
echo '<p>The type of (int)$stringNumber is: <pre>';
var_dump($castedIntegerString);
echo '</pre></p>';

$castedFloatString = (float)$stringNumber;
echo '<p>The type of (float)$stringNumber<pre>';
var_dump($castedFloatString);
echo '</pre></p>';

$castedArray = (array)$stringNumber;
echo '<p>The type of (array)$stringNumber is: <pre>';
var_dump($castedArray);
echo '</pre></p>';

?>
</body>
</html>
