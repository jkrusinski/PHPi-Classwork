<?php

/**
 * Return an array that represents a deck of cards
 *
 * e.g. array(
 *  0 => '1D', // Ace of diamonds
 *  1 => '2D', // 2 of diamonds
 *  ...
 *  11 => '11C' // Jack of clubs
 * )
 *
 * @return array
 */
function getDeck()
{
    $result = [];
    $entity = ["&diams;", "&hearts;", "&spades;", "&clubs;"];
    for ($j = 0; $j < 4; $j++) {
        for ($i = 1; $i < 14; $i++) {

            switch ($i) {
                case 1:
                    $result[] = "A$entity[$j]";
                    break;
                case 11:
                    $result[] = "J$entity[$j]";
                    break;
                case 12:
                    $result[] = "Q$entity[$j]";
                    break;
                case 13:
                    $result[] = "K$entity[$j]";
                    break;
                default:
                    $result[] = "$i$entity[$j]";
                    break;
            }
        }
    }
    return $result;
}


/**
 * Shuffle the deck of cards
 *
 * @param array $deck Full deck of cards (passed by ref)
 *
 * @return void
 */
function shuffleDeck(&$deck)
{
    $lastIndex = count($deck) - 1;
    //Fisher-Yates Shuffle
    for ($i = $lastIndex; $i > 0; $i--) {
        $j = rand(0, $i);
        //exchange $deck[$j] with $deck[$i]
        $deck_j = $deck[$j];
        $deck_i = $deck[$i];
        $deck[$j] = $deck_i;
        $deck[$i] = $deck_j;
    }
}


/**
 * @param array $players An array of player names
 * @param int $numCards How many cards to give each player
 * @param array $shuffledDeck A shuffled deck of cards
 *
 * @return array
 */
function deal($players, $numCards, &$shuffledDeck)
{
    $result = [];
    foreach ($players as $player) {
        //Create an associative array with the player names as keys, and the values as their hands
        $result[$player] = [];
        //Loop through $numCards
        for ($i = 0; $i < $numCards; $i++) {
            //Build the players hand by setting the next index equal to the first inde of the deck
            $result[$player][$i] = $shuffledDeck[0];
            //Unset the card that was dealt from the deck
            unset($shuffledDeck[0]);
            //Reset the indices of the deck
            $shuffledDeck = array_values($shuffledDeck);
        }
    }
    return $result;
}


// ----------- USAGE -----------------

// Crack open a brand new deck of cards
$deck = getDeck();

// Shuffle the deck
shuffleDeck($deck);

echo 'Deck after shuffling, but before dealing: <br/>';
echo '<pre>';
print_r($deck);
echo '</pre>';

$players = array('Joe', 'Mary', 'Zim');
$numCards = 3;

$playerHands = deal($players, $numCards, $deck);

echo 'Hands each player has: <br/>';
echo '<pre>';
print_r($playerHands);
echo '</pre>';

echo 'Deck after dealing: <br/>';
echo '<pre>';
print_r($deck);
echo '</pre>';