<?php

class PlayingCard
{
    //usually you want to make your properties protected or private
    public $suite;

    public $rank;

    public function __construct($suite, $rank)
    {
        $this->suite = $suite;
        $this->rank = $rank;
    }
}

$aceOfSpades = new PlayingCard('Spades', 'Ace');

echo '<pre>';
print_r($aceOfSpades);