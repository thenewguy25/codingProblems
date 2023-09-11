<?php
function fizzbuzz($n)
{
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo 'fizzbuzz' . '<br>';
        } else if ($i % 5 == 0) {
            echo 'buzz' . '<br>';
        } else if ($i % 3 == 0) {
            echo 'fizz' . '<br>';
        } else {
            echo $i . '<br>';
        }
    }
}
fizzbuzz(44)

    ?>