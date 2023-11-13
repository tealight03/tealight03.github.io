<?php
    function Factorial($n) {
        $result = 1;
        $i = 1;

        while ($i <= $n) {
            $result *= $i;
            $i++;
        }

        return $result;
    }

    $number = 5;

    echo "Factorial of {$number} is: " . Factorial($number);
?>