<?php

function areBracketsBalanced($str)
{
    $stack = [];

    $brackets = [
        '{' => '}',
        '[' => ']',
        '(' => ')'
    ];
    $str = str_split($str);
    foreach ($str as $char) {
        if (in_array($char, array_keys($brackets))) {
            $stack[] = $char;
        } elseif (in_array($char, array_values($brackets))) {
            if (empty($stack) || $char != $brackets[array_pop($stack)]) {
                return false;
            }
        }
    }

    return empty($stack);
}

$inputString1 = "{(a+b)*(c-d)}";
$inputString2 = "{(a+b)*[c-d})";
$inputString3 = "((a+b)*[c-d])";

// areBracketsBalanced($inputString1);

if (areBracketsBalanced($inputString1)) {
    echo "The brackets in '$inputString1' are balanced.";
} else {
    echo "The brackets in '$inputString1' are not balanced.";
}

echo "<br>";

if (areBracketsBalanced($inputString2)) {
    echo "The brackets in '$inputString2' are balanced.";
} else {
    echo "The brackets in '$inputString2' are not balanced.";
}

echo "<br>";

if (areBracketsBalanced($inputString3)) {
    echo "The brackets in '$inputString3' are balanced.";
} else {
    echo "The brackets in '$inputString3' are not balanced.";
}


?>