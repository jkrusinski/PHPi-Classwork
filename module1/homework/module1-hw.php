<html>
<head>
    <!-- needed to properly output string -->
    <meta charset="utf-8"/>
</head>
<?php

######################################################################
############################# HOMEWORK 1 #############################
######################################################################
/*
 * We will be creating a simple program, that can be executed in the CLI or in the browser.
 *
 * Count the number of words, booleans and numbers in the provided input string.
 *
 * The input string contains formatted numbers, and numbers with other formatting characters like exclamation marks.
 *
 * Words like "true" and "false" are considered to be boolean. The sample code lays out the foundation for you to start work.
 *
 * If you are not happy with the layout of the sample code, feel free to extract the parts you are happy with and do it your way.
 *
 * Know that there are multiple ways to solve any given problem, and no two people will solve a problem in exactly the same way.
 */

// Create an input string using heredoc syntax
$inputString
    = <<<MYSTR
Can you feel the pulse in your wrist? For humans the normal pulse is 70 heartbeats per minute.
Elephants have a slower pulse of 27 and for a canary it is 1000!
If all the blood vessels in your body were laid end to end, they would reach about 60,000 miles.
In one day your heart beats 100,000 times.
Half your body’s red blood cells are replaced every seven days.
By the time you are 70.5 you will have easily drunk over 12,000 gallons of water.
Coughing can cause air to move through your windpipe faster than the speed of sound – over a thousand feet
per second, this is a true statement!
Germs only cause disease, right? But a common bacterium, E. Coli, found in the intestine helps us digest
green vegetables and beans (also making gases – pew!). These same bacteria also make vitamin K, which
causes blood to clot. If we didn’t have these germs we would bleed to death whenever we got a small cut!
It takes more muscles to frown than it does to smile, this is not false and a fact.
That dust on rugs and your furniture is not only dirt. It’s mostly made of dead skin cells.
Everybody loses millions of skin cells every day which fall on the floor and get kicked up to
land on all the surfaces in a room. You could say, “That’s me all over.”
It takes food 7.64 seconds to go from the mouth to the stomach via the esophagus.
MYSTR;

/** @var array $wordArray - Array of every word in the input string */
//make sure that new lines are treated as spaces using strtr()
$wordArray = explode(' ', strtr($inputString, "\n", ' '));
//todo - add illegal characters

/**
 * @param array $arr - Input array of exploded string.
 * @return array $countArray - An array containing the counts num_bool, num_numeric, and num_string.
 */
function varCount($arr)
{
    //todo: use is_numeric(), not this messy grossness
    $numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $countArray = ['num_numeric' => 0, 'num_string' => 0, 'num_bool' => 0];
    foreach ($arr as $item) {
        $isNumber = false;
        foreach ($numbers as $n) {
            if (substr_count($item, $n)) {
                $isNumber = true;
            }
        }

        if (strtolower($item) == 'true' || strtolower($item) == 'false') {
            $countArray['num_bool']++;
        } else if ($isNumber) {
            $countArray['num_numeric']++;
        } else {
            $countArray['num_string']++;
        }
    }
    return $countArray;
}


echo '<h1>Homework 1</h1>';

echo '<h3>String Count</h3>';

echo '<pre>';
print_r(varCount($wordArray));
echo '</pre>';

echo '<h3>Word Array</h3>';

echo '<pre>';
print_r($wordArray);
echo '</pre>';


?>
</html>
