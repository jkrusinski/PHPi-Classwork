<?php

/**
 * Class Card represents and encapsulates data
 * and functionality for a playing card
 */
class Card
{
    /**
     * The suit of the card
     * @var string
     */
    protected $suit;

    /**
     * The rank of the card
     * @var string
     */
    protected $rank;

    /**
     * The color of the card
     * @var string
     */
    protected $color;

    //todo add html entity property

    /**
     * A list of allowed suits
     * @var array
     */
    protected $allowedSuits = array('heart', 'diamond', 'spade', 'club');

    /**
     * A list of HTML entities
     * @var array
     */
    protected $allowedEntities = array('&hearts;', '&diams;','&spades;', '&clubs;');

    /**
     * Construct the function
     * @param $suit 'spades', 'hearts', 'clubs', 'diamonds'
     * @param int $rank 1 - 13
     */
    public function __construct($suit, $rank)
    {
        $suit = strtolower($suit);

        $this->suit = $suit;
        $this->rank = $rank;

        //Check suit
        $this->checkSuit();

        //Colorize the card
        $this->colorCard();

        //Create HTML entity
        $this->createIcon();


    }

    /**
     * Check to see if the suit is valid
     * @throw Exception
     */
    protected function checkSuit()
    {
        if (!in_array($this->suit, $this->allowedSuits)) {
            throw new Exception(
                $this->suit . ' is not allowed! you can pass: ' .
                implode(', ', $this->allowedSuits)
            );
        }
    }

    /**
     * Sets the card color
     * @return void
     */
    protected function colorCard()
    {

        if ($this->suit == 'spades' || $this->suit == 'clubs') {

            $this->color = 'black';

        } elseif ($this->suit == 'hearts' || $this->suit == 'Diamonds') {

            $this->color = 'red';

        }
    }

    /**
     * Create a HTML icon for this card
     * @return void
     */
    protected function createIcon()
    {

    }

    /**
     * Render a card for the browser
     * @return string
     */
    public function render()
    {

    }
}