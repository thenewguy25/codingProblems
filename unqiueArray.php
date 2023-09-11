<?php
function removeDups($array)
{
    $holder = $array[0];
    $uniqueArray = [$array[0]];

    for ($i = 1; $i < count($array); $i++) {
        if ($holder != $array[$i]) {
            $uniqueArray[] = $array[$i];
            $holder = $array[$i];
        }
    }

    return $uniqueArray;
}

$array = [1, 1, 2, 2, 3, 3, 3, 4, 4, 5];
print_r(removeDups($array));
?>