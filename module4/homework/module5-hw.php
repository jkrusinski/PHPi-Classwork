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

    /**
     * The html entity for the suit
     * @var string
     */
    protected $htmlEntity;

    /**
     * A list of allowed suits
     * @var array
     */
    protected $allowedSuits = array(
        'hearts',
        'diamonds',
        'spades',
        'clubs'
    );

    /**
     * A list of HTML entities
     * @var array
     */
    protected $allowedEntities = array(
        'hearts' => '&hearts;',
        'diamonds' => '&diams;',
        'spades' => '&spades;',
        'clubs' => '&clubs;'
    );

    /**
     * Construct the function
     * @param string $suit 'spades', 'hearts', 'clubs', 'diamonds'
     * @param int $rank 1 - 13
     */
    public function __construct($suit, $rank)
    {
        //make case insensitive
        $suit = strtolower($suit);

        //add constructor variables to Card
        $this->suit = $suit;
        $this->rank = $rank;

        //check suit
        $this->checkSuit();

        //colorize the card
        $this->colorCard();

        //create HTML entity
        $this->createIcon();

    }

    /**
     * Check to see if the suit is valid
     * @throws Exception
     */
    protected function checkSuit()
    {
        //if $suit property not an allowed suit, throw Exception
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

            //if spades or clubs, color is black
            $this->color = 'black';

        } elseif ($this->suit == 'hearts' || $this->suit == 'diamonds') {

            //if hearts or diamonds, color is red
            $this->color = 'red';

        }
    }

    /**
     * Create a HTML icon for this card
     * @throws Exception
     * @return void
     */
    protected function createIcon()
    {
        switch ($this->suit) {

            case 'spades':
                //add suit entity to card
                $this->htmlEntity = $this->allowedEntities['spades'];
                break;

            case 'clubs':
                //add suit entity to card
                $this->htmlEntity = $this->allowedEntities['clubs'];
                break;

            case 'hearts':
                //add suit entity to card
                $this->htmlEntity = $this->allowedEntities['hearts'];
                break;

            case 'diamonds':
                //add suit entity to card
                $this->htmlEntity = $this->allowedEntities['diamonds'];
                break;

            default:
                throw new Exception('Error in createIcon method');
                break;
        }
    }

    /**
     * Render a card for the browser
     * @return string
     */
    public function render()
    {

    }

    /**
     * Prints variables and constants
     * @return void
     */
    public function testFunction()
    {
        echo '<pre>';

        echo '<h4>$suit</h4>';
        print_r($this->suit);
        echo '<h4>$rank</h4>';
        print_r($this->rank);
        echo '<h4>$color</h4>';
        print_r($this->color);
        echo '<h4>$htmlEntity</h4>';
        print_r($this->htmlEntity);
        echo '<h4>$allowedSuits</h4>';
        print_r($this->allowedSuits);
        echo '<h5>$allowedEntities</h5>';
        print_r($this->allowedEntities);

        echo '</pre>';
    }
}