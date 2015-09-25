<?php

$string = 'The weather is
just awesome
today';

echo str_replace("\n", '.__.', $string);
echo PHP_EOL;

$class = <<<FOO
Something
something
something
something
something

FOO;
