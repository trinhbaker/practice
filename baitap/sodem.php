<?php
for ($i = 0; $i <= 100; $i++) {
    if (
        $i % 3 == 0 && $i % 5 == 0
    ) {
        echo "Fizzbuzz";
    } elseif (
        $i % 3 == 0
    ) {
        echo "Buzz";
    } elseif (
        $i % 5 == 0
    ) {
        echo "Fizz";
    } else {
        echo $i;
    }
    echo "<br/>";
}
