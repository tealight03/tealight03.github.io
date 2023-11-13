<?php
    function printNextNumber($a) {
        if ($a % 2 == 1) {
            $nextNumber = $a + 1;
            echo "입력한 숫자 {$a}는 홀수이며, 다음 짝수는 {$nextNumber}입니다.";
        } 
        else {
            echo "입력한 숫자 {$a}는 짝수입니다.";
        }
    }
    
    $a = 7; 
    printNextNumber($a);
?>