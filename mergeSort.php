<?php

function mergeSort($array1, $array2)
{
    $mergeArrays = array_merge($array1, $array2);
    sort($mergeArrays);
    return $mergeArrays;
}

function mergeSortRegular($array1, $array2)
{
    $mergeArrays = [];
    $i = 0;
    $j = 0;

    while ($i < count($array1) && $j < count($array2)) {
        if ($array1[$i] < $array2[$j]) {
            $mergeArrays[] = $array1[$i];
            $i++;
        } else {
            $mergeArrays[] = $array2[$j];
            $j++;
        }
    }

    while ($i < count($array1)) {
        $mergeArrays[] = $array1[$i];
        $i++;
    }

    while ($j < count($array2)) {
        $mergeArrays[] = $array2[$j];
        $j++;
    }

    return $mergeArrays;
}


$array1 = [1, 5, 10];
$array2 = [6, 9, 11];

$array3 = mergeSort($array1, $array2);
print_r($array3);

$array3 = mergeSortRegular($array1, $array2);
print_r($array3);


?>