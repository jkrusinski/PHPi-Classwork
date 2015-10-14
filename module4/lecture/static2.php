<?php
class Card
{

    protected static $allowedSuits = array('D', 'H', 'S', 'C');

    /**
     * @return array
     */
    public static function getAllowedSuites()
    {
        //SELF is the equivalent to THIS, but SELF is at the class level while THIS is at the object level
        return self::$allowedSuits;
    }

}

$suitsBefore = Card::getAllowedSuites();

$card = new Card();
$suits = $card->getAllowedSuites();

echo '<pre>';
var_dump($suits);