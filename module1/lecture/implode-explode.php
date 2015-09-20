<?php

$data = '"Jerry Krusinski","Austin","23","Loves Dogs","Does not love cockroaches"';
$dataArray = explode(',', $data);

echo '<h3>Explode</h3>';

echo '<pre>';
print_r($dataArray);
echo '</pre>';

echo '<h3>Implode</h3>';
$newData = ['coffee', 'juice', 'yerba mate'];

echo '<p>' . implode('._.', $newData) . '</p>';