<?php
    /*
    5. 고객 정보가 들어있는 파일 client.txt가 있다. 
    이 파일에 저장된 자료의 구조는 다음과 같이 ASCII 형식으로 저장되어 있다고 가정하자.

    이름 [TAB] 나이 [TAB] 성별 [TAB] 이메일

    이 파일을 읽어 나이가 30세 이상의 고객을 출력하는 프로그램을 작성하시오.
     */
    // 파일 경로
    $filePath = 'client.txt';

    // 파일이 존재하는지 확인
    if (file_exists($filePath)) {
        // 파일 읽기 모드로 열기
        $file = fopen($filePath, 'r');

        // 파일의 각 줄을 읽어서 처리
        while (!feof($file)) {
            $line = fgets($file);

            // 각 줄을 탭으로 분리하여 배열로 저장
            $data = explode("\t", $line);

            // 배열의 요소가 적절한지 확인하고 나이가 30세 이상인 경우 출력
            if (isset($data[1]) && is_numeric($data[1]) && $data[1] >= 30) {
                echo "이름: $data[0], 나이: $data[1], 성별: $data[2], 이메일: $data[3]\n";
            }
        }

        // 파일 닫기
        fclose($file);
    } else {
        echo "파일이 존재하지 않습니다.";
    }
?>
