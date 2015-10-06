<link href="module4-hw-style.css" rel="stylesheet" />

<?php
include_once('module4-hw.php');

try {
    //Test Deck
    $deck = new Deck;
    $deck->getCard()->render();
    $deck->getCard()->render();
    $deck->getCard()->render();
    $deck->getCard()->render();
    $deck->getCard()->render();

    echo $deck->getNumCards();

    echo '<hr />';
    $deck->testFunction();

    echo '<hr />';

    //instantiate cards
    $ten = new Card('hearts', 10);
    $ace = new Card('spades', 1);
    $jack = new Card('diamonds', 11);
    $queen = new Card('clubs', 12);
    $king = new Card('hearts', 13);

    //render cards
    $ten->render();
    $ace->render();
    $jack->render();
    $queen->render();
    $king->render();

    //var_dump protected properties
    echo '<h2>10 of Hearts</h2>';
    $ten->testFunction();

    echo '<h2>Ace of Spades</h2>';
    $ace->testFunction();

    echo '<h2>Jack of Diamonds</h2>';
    $jack->testFunction();

    echo '<h2>Queen of Clubs</h2>';
    $queen->testFunction();

    echo '<h2>King of Hearts</h2>';
    $king->testFunction();


} catch (Exception $e) {

    //Print the exception message
    echo $e->getMessage();

}
