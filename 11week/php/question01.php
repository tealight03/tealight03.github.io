<?php
    /*
    1. for문을 이용하여 다음과 같은 출력을 하는 프로그램을 작성하시오.
        A
        A B
        A B C
        A B C D
        A B C D E 
        A B C D
        A B C
        A B
        A
    */

    // 상단 삼각형 출력
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo chr(64 + $j) . " ";
        }
        echo "\n";
    }

    // 하단 삼각형 출력
    for ($i = 4; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo chr(64 + $j) . " ";
        }
        echo "\n";
    }
?>