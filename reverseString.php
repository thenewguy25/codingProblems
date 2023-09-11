<?php
function reverseString($string)
{
    $length = strlen($string);
    $reversed = '';
    for ($i = ($length - 1); $i >= 0; $i--) {
        $reversed .= $string[$i];
    }
    echo $reversed;
}

reverseString("cat");
?>