<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // 폼으로부터 데이터 받아오기
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);

        // 받아온 데이터 출력
        echo "<h2>사용자 정보</h2><hr>";
        echo "<p><b>[이름]</b> $name</p>";
        echo "<p><b>[이메일]</b> $email</p>";
    } else {
        echo "<p>폼이 제출되지 않았습니다.</p>";
    }
?>