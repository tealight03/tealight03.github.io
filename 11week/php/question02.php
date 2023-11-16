<?php
    /*
    2. 배열을 내림차순으로 정렬하고 싶다. 
    sort() 함수를 이용하여 revsort() 함수를 설계하고 테스트하시오.
    (hint : sort와 array_reverse함수 사용)
    */
    function revsort(&$array) {
        sort($array, SORT_DESC);
    }

    // 테스트 코드
    $numbers = array(5, 2, 8, 4, 1);

    echo "원래 배열: ";
    print_r($numbers);

    revsort($numbers);

    echo "내림차순 정렬된 배열: ";
    print_r($numbers);
?>