<?php

function anagram($str1, $str2)
{
    if (strlen($str1) != strlen($str2)) {
        return 'false';
    }


    $array1 = str_split($str1);
    $array2 = str_split($str2);

    $count1 = array_count_values($array1);
    $count2 = array_count_values($array2);

    foreach ($array1 as $char) {

        if (!in_array($char, $array2)) {
            // print_r($array2);
            return 'false';
        }

        if ($count1[$char] != $count2[$char]) {
            return 'false';
        }
    }

    return 'true';

}


// // echo anagram('silent', 'listen');
// echo anagram('dog', 'raw');



function areAnagram($str1, $str2)
{
    $sorted1 = sortString($str1);
    $sorted2 = sortString($str2);

    return $sorted1 === $sorted2;
}

function sortString($str)
{
    $char = str_split($str);
    sort($char);
    return implode('', $char);
}

$string1 = "listen";
$string2 = "silent";
if (areAnagram($string1, $string2)) {
    echo 'These are anagrams!';
} else {
    echo 'not anagrams';
}

?>