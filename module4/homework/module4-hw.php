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
     * The rank represented as a string, includes A, J, Q, K
     * @var string
     */
    protected $face;

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

        //add face string
        $this->addFace();

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
     * Adds string containing A, J, Q, K, or rank number to $face
     * @return void
     */
    protected function addFace()
    {
        switch ($this->rank) {

            case 1:
                //Ace
                $this->face = 'A';
                break;

            case 11:
                //Jack
                $this->face = 'J';
                break;

            case 12:
                //Queen
                $this->face = 'Q';
                break;

            case 13:
                //King
                $this->face = 'K';
                break;

            default:
                //Rank as string
                $this->face = (string)$this->rank;
                break;
        }
    }

    /**
     * Render a card for the browser
     * Must link to card CSS stylesheet
     * @return string
     */
    public function render()
    {
        //outer border
        echo "<div class='card $this->color'>";

        //top left rank and suit
        echo "<div class='top-left'>$this->face$this->htmlEntity</div>";
        //centered suit
        echo "<div class='center'>$this->htmlEntity</div>";
        //bottom right rank and suit
        echo "<div class='bottom-right'>$this->face$this->htmlEntity</div>";

        echo "</div>";
    }

    /**
     * Prints variables and constants
     * @return void
     */
    public function testFunction()
    {
        echo '<pre>';

        echo '<h4>$suit</h4>';
        var_dump($this->suit);
        echo '<h4>$rank</h4>';
        var_dump($this->rank);
        echo '<h4>$face</h4>';
        var_dump($this->face);
        echo '<h4>$color</h4>';
        var_dump($this->color);
        echo '<h4>$htmlEntity</h4>';
        var_dump($this->htmlEntity);
        echo '<h4>$allowedSuits</h4>';
        var_dump($this->allowedSuits);
        echo '<h5>$allowedEntities</h5>';
        var_dump($this->allowedEntities);

        echo '</pre>';
    }
}

/**
 * Class Deck represents a deck of cards and some common operations around a deck
 */
class Deck
{
    /**
     * Array of shuffled cards
     * @var Card[]
     */
    protected $cards = array();

    /**
     * Create a deck and shuffle it
     */
    public function __construct()
    {
        // Create all cards in this deck
        $this->createCards();

        // Shuffle all the cards to begin with
        $this->shuffle();
    }

    /**
     * Create all the necessary cards
     * @return void
     */
    protected function createCards()
    {
        $suits = array('diamonds', 'hearts', 'clubs', 'spades');
        $ranks = range(1, 13);

        //loop through suits
        foreach ($suits as $suit) {
            //loop through ranks
            foreach ($ranks as $rank) {

                //create new Card
                $this->cards[] = new Card($suit, $rank);
            }
        }
    }

    /**
     * Shuffle all cards in the deck
     * @return void
     */
    public function shuffle()
    {
        $lastIndex = count($this->cards) - 1;
        //Fisher-Yates Shuffle
        for ($i = $lastIndex; $i > 0; $i--) {
            $j = rand(0, $i);
            //exchange $cards[$j] with $cards[$i]
            $card_j = $this->cards[$j];
            $card_i = $this->cards[$i];
            $this->cards[$j] = $card_i;
            $this->cards[$i] = $card_j;
        }
    }

    /**
     * Get a random card from the deck, make sure that the card you get is not in the deck anymore
     * @return Card
     */
    public function getCard()
    {
        return array_shift($this->cards);
    }

    /**
     * How many cards are in this deck?
     * @return int
     */
    public function getNumCards()
    {
        return count($this->cards);
    }

    /**
     * Prints the deck as-is
     * @return void
     */
    public function testFunction()
    {
        foreach ($this->cards as $card) {
            $card->render();
        }
    }
}

/**
 * Class Player represents one player playing a game
 */
class Player
{
    /**
     * Player name
     * @var string
     */
    protected $name;

    /**
     * Cards this player has been dealt
     * @var Card[]
     */
    protected $Cards = array();

    /**
     * @param string $name Player's full name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Give this player a card
     * @param Card $Card
     */
    public function giveCard(Card $Card)
    {
        $this->Cards[] = $Card;
    }

    /**
     * Render this player's cards for the browser
     * @throws Exception
     * @return void
     */
    public function render()
    {

        if (empty($this->Cards)) {

            throw new Exception('There are now cards to show in this player\'s hand');

        } else {

            foreach ($this->Cards as $Card) {

                $Card->render();
            }
        }
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <link href="module4-hw-style.css" rel="stylesheet">
</head>

<body>
<?php
try {

// Create a deck and shuffle it
    $Deck = new Deck();
    $Deck->shuffle();

// Create two new players
    $PlayerBob = new Player('Bob');
    $PlayerSue = new Player('Sue');

// Give bob 3 cards
    $PlayerBob->giveCard($Deck->getCard());
    $PlayerBob->giveCard($Deck->getCard());
    $PlayerBob->giveCard($Deck->getCard());

// Give sue 3 cards
    $PlayerSue->giveCard($Deck->getCard());
    $PlayerSue->giveCard($Deck->getCard());
    $PlayerSue->giveCard($Deck->getCard());

// Show all the cards each player has been dealt
    echo '<h3>' . $PlayerBob->getName() . '</h3>';
    $PlayerBob->render();
    echo '<br/>';
    echo '<h3>' . $PlayerSue->getName() . '</h3>';
    $PlayerSue->render();
    echo '<br/>';
    echo 'Number of cards remaining in the deck: ' . $Deck->getNumCards();

} catch (Exception $e) {

    echo $e->getMessage();

}
?>
</body>

</html>
