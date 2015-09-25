<?php

$outsideFunction = 'outside';

function testFunction()
{
    global $outsideFunction;
    $insideFunction = 'inside';
    echo "Outside: $outsideFunction<br />";
    echo "Inside: $insideFunction<br />";
}

testFunction();