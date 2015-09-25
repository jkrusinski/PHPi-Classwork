<?php

function addOne($lgNumStr)
{
    $lgNumArr = str_split($lgNumStr);
    $lastIndex = count($lgNumArr) - 1;

    if ($lgNumArr[$lastIndex] < 9) {
        $lgNumArr[$lastIndex]++;
        $lgNumArr[$lastIndex] = (string)$lgNumArr[$lastIndex];

        $added = implode('', $lgNumArr);
        return $added;
    } else {
        $indexFirstNonNine = getFirstNonNineIndex($lastIndex, $lgNumArr);
        $lgNumArr[$indexFirstNonNine]++;
        $lgNumArr[$indexFirstNonNine] = (string)$lgNumArr[$indexFirstNonNine];
        for ($i = $indexFirstNonNine + 1; $i <= $lastIndex; $i++) {
            $lgNumArr[$i] = '0';
        }

        $added = implode('', $lgNumArr);
        return $added;
    }

}

function getFirstNonNineIndex($indexFirstNine, $numArr)
{
    $firstNonNine = $indexFirstNine;
    do {
        $firstNonNine--;
    } while ($numArr[$firstNonNine] == '9');

    return $firstNonNine;
}

echo addOne('123456') . '<br />';
echo addOne('987230495872039475203948572304985748590009999999') . '<br />';
echo addOne('832930230839994') . '<br />';

echo 5 / 2;
/*
 * Homework: IsPalindrome($string){***}
 */

function isPalindrome($str)
{
    $len = strlen($str);
    $lastIndex = $len - 1;
    $result = true;

    if ($len % 2 == 0) {    //if even
        $halfLen = $len / 2;

        for ($i = 0; $i < $halfLen; $i++) {
            if ($str[$i] == $str[$lastIndex - $i]) {
                $result = $result && true;
            } else {
                $result = $result && false;
            }
        }
        return $result;

    } else {                //if odd
        $halfLen = floor($len / 2);

        for ($i = 0; $i < $halfLen; $i++) {
            if ($str[$i] == $str[$lastIndex - $i]) {
                $result = $result && true;
            } else {
                $result = $result && false;
            }
        }
        return $result;
    }
}

var_dump(isPalindrome('mom'));

var_dump(isPalindrome('hannah'));

var_dump(isPalindrome('not a palindrome'));

var_dump(isPalindrome('really not a palindrome'));


