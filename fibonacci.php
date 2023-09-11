<?php
function fibonacci($n)
{
    if ($n == 0) {
        return 0;
    }

    if ($n == 1) {
        return 1;
    }

    return fibonacci($n - 1) + fibonacci($n - 2);
}

echo fibonacci(0) . '<br>';
echo fibonacci(1) . '<br>';
echo fibonacci(10) . '<br>';
?>