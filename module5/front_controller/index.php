<?php

echo '<pre>';
print_r($_SERVER);

$url = $_SERVER['PHP_SELF'];

$uri = $_SERVER['REQUEST_URI'];

$path = str_replace('index.php', '', $url);
$newPath = str_replace($path, '', $uri);


echo '<br/>';
echo '<br/>';
print_r('url: '. $url);
echo '<br/>';
print_r('uri: '. $uri);
echo '<br/>';
print_r('path: '. $path);
echo '<br/>';
print_r('newPath: '. $newPath);

$vars = explode('/', $newPath);

echo '<br/>';
print_r($vars);