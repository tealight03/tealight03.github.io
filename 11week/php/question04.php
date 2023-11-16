<?php
    /*
    4. 다음은 각각의 사람들이 현재까지 생활하였던 도시의 이름을 나타내었다.

    Kim   Seoul
    Lee    Pusan, Daegu
    Choi   Inchon
    Park   Suwon, Daejon
    Jung   Kwangju, Chunchon, Wonju

    위의 값들을 연상 배열로 선언한 후 Choi 항목을 삭제한 뒤 연상 배열의 내용을 출력하는 PHP 프로그램을 작성하시오 
    (단, vardump() 함수는 사용하지 않음).
    */
    // 각 사람들이 생활한 도시 정보를 연관 배열로 선언
    $cities = array(
        'Kim' => 'Seoul',
        'Lee' => 'Pusan, Daegu',
        'Choi' => 'Inchon',
        'Park' => 'Suwon, Daejon',
        'Jung' => 'Kwangju, Chunchon, Wonju'
    );

    // Choi 항목 삭제
    unset($cities['Choi']);

    // 결과 출력
    foreach ($cities as $person => $city) {
        echo "$person: $city\n";
    }
?>