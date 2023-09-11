<?php
function binarySearch($array, $search)
{
    sort($array);
    $left = 0;
    $right = count($array) - 1;

    while ($left <= $right) {
        $mid = floor(($left + $right) / 2);
        // echo 'left is ' . $left . '<br>';
        // echo 'right is ' . $right . '<br>';
        // echo 'midpoint is ' . $mid . ' with value of' . $array[$mid] . '<br>';
        if ($array[$mid] == $search) {
            return $mid;
        } elseif ($array[$mid] < $search) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }


    }

    return 'nothing';

}

$array = [2, 5, 8, 12, 16, 23, 38, 56, 72, 91];
$search = 23;

$array = [2, 5, 8, 12, 16, 23, 38, 45, 56];
$search = 100;

echo 'the index is ' . binarySearch($array, $search);

?>