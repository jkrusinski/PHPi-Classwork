<?php

$pets = ['dog', 'cat', 'beast'];
$flowers = ['rose', 'sunflower', 'mayflower'];

// 1. Merge both arrays together.

$merged = array_merge($pets, $flowers);

echo '<h1>Array Functions</h1>';

echo '<h3>array_merge()</h3>';

echo '<pre>';
print_r($merged);
echo '</pre>';

// 2. Sort the array alphabetically once merged.

sort($merged);

echo '<h3>sort()</h3>';

echo '<pre>';
print_r($merged);
echo '</pre>';

// 3. Count the number of elements in the array.

$counted = count($merged);

echo '<h3>count()</h3>';

echo "<p>The array has $counted elements</p>";