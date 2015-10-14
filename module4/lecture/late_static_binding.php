<?php

class Army
{
    public static $strength = 20;

    public static function getStrength()
    {
        //late static binding... if the child that called the method has a the property, use that one
        //else, go up the class hierarchy and find the static property
        return static::$strength;
    }
}

echo 'Army strength: ' . Army::getStrength() . '<br/>';

class Batallion extends Army
{
    public static $strength = 10;
}

echo 'Batallion strength: ' . Batallion::getStrength() . "<br/>";