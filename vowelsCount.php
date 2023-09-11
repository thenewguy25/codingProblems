<?php
function vowelCount($string)
{
    $vowels = ['a', 'i', 'e', 'o', 'u'];
    $str = strtolower($string);
    $str = str_split($str);
    $vowelCount = 0;
    $constCount = 0;

    foreach ($str as $char) {
        if (in_array($char, $vowels)) {
            $vowelCount++;
        } else {
            $constCount++;
        }
    }

    echo "{$string} has " . $vowelCount . " vowels" . '<br>';
    echo "{$string} has " . $constCount . " consoants" . '<br>';

}

vowelCount('Yoda');
vowelCount('cheesebugers');
vowelCount('Spud');

?>