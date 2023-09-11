<?php

function checkLongestPrefix($stringArr)
{
    if (empty($stringArr)) {
        return "";
    }

    $commonPrefix = $stringArr[0];

    foreach ($stringArr as $currentString) {
        $len = min(strlen($commonPrefix), strlen($currentString));

        $i = 0;

        while ($i < $len && $commonPrefix[$i] == $currentString[$i]) {
            $i++;
        }

        $commonPrefix = substr($commonPrefix, 0, $i);
    }

    return $commonPrefix;
}

$strings = array("apple", "appetite", "aplesauce");
$longestPrefix = checkLongestPrefix($strings);
echo "Longest common prefix: " . $longestPrefix;

?>