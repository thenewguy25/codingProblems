<?php
function isPrime($n)
{

    if ($n <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }

    return true;

}

$num1 = 17;
$num2 = 20;

if (isPrime($num1)) {
    echo $num1 . ' is a prime number';
} else {
    echo $num1 . ' is not a prime number';
}

if (isPrime($num2)) {
    echo $num2 . ' is a prime number';
} else {
    echo $num2 . ' is not a prime number';
}

?>