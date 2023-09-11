<?php
function findMissingnum($array)
{
    for ($i = 1; $i <= count($array); $i++) {
        if ($array[$i] - $array[$i - 1] != 1) {
            return $array[$i - 1] + 1;
        }
    }
}

$array = [1, 2, 3, 5, 6, 7, 8];
echo findMissingnum($array);

?>