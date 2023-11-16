<?php
    /*
    3. 'exam.txt' 라는 파일을 열어 
    그 파일의 줄 수, 단어 수, 글자 수를 계산하는 프로그램을 작성하시오.
    */
    // 파일 경로
    $filePath = 'exam.txt';

    // 파일이 존재하는지 확인
    if (file_exists($filePath)) {
        // 파일 읽기 모드로 열기
        $file = fopen($filePath, 'r');

        // 초기화
        $lineCount = 0;
        $wordCount = 0;
        $charCount = 0;

        // 파일의 각 줄을 읽어서 처리
        while (!feof($file)) {
            $line = fgets($file);
            $lineCount++;

            // 단어 수 및 글자 수 계산
            $wordCount += str_word_count($line);
            $charCount += strlen($line);
        }

        // 파일 닫기
        fclose($file);

        // 결과 출력
        echo "파일 경로: $filePath\n";
        echo "줄 수: $lineCount\n";
        echo "단어 수: $wordCount\n";
        echo "글자 수: $charCount\n";
    } else {
        echo "파일이 존재하지 않습니다.";
    }
?>
