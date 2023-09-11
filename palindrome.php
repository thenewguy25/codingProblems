<?php
function palindrome($string)
{
    $string = preg_replace("/[^A-Za-z0-9]/", '', strtolower($string));
    if ($string == strrev($string)) {
        return "true";
    } else {
        return "false";
    }
}

echo palindrome("cat") . '<br>';
echo palindrome("civic") . '<br>';
echo palindrome("dog") . '<br>';
echo palindrome("rotor") . '<br>';

?>