# PHP를 이용한 로그인 폼 구현하기
<img width="556" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/da546c32-09b3-4e44-b8a7-5b4f223727d0">
<br><b>[제작 시 참고 사이트]</b> https://codewithawa.com/posts/admin-and-user-login-in-php-and-mysql-database<br>
<hr><b>[동작 방식]</b><br>
<img width="559" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/5b8e3c81-97c4-4aed-87df-47d716f535d6">
<br><b>1. 현재 등록된 사용자 계정이 없으므로 계정 생성을 위해 [Sign up] 버튼을 클릭한다.</b><br><br>
<img width="571" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/5dc03158-77ca-4734-a03b-0af3d51816dc">
<br>※ login.php의 일부분 캡쳐<br>
<b>위 코드에서 보이듯이, [Sign up] 버튼을 클릭하면 register.php로 이동하도록 설정되어 있으므로,<br>
코드를 따라 regitster.php가 실행된다.</b><br><br>
<img width="552" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/98ed90b2-5728-45d4-9bcb-e19ebf563290">
<br><b>2. 위 이미지와 같이 로그인 폼에 맞춰 요구하는 데이터를 순서대로 삽입한 후 [Register] 버튼을 클릭한다.</b><br><br>
<img width="561" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/0dbc09ad-13cd-4f7b-bab1-f9d451f6f080"><br>
<img width="382" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/6fdfd357-22cc-4019-b494-2c0d3b211bad"><br>
<img width="586" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/1f94f91f-2a34-48fb-8a63-f11a74f17d32"><br>
<b>register.php에서 include한 functions.php 파일에서 위와 같이 [Register] 버튼이 클릭되었을 때,<br>
register() 함수가 실행되도록 정의하고 있으므로 이에 따라 register() 함수가 실행된다.<br>
로그인 폼에 맞추어 올바른 데이터가 입력되고 SQL문이 정상적으로 실행되었다면<br>
해당 유저의 데이터가 세션에 기록되고, index.php가 실행된다.</b><br>


<hr><b>[참고사항]</b><br>
<hr><b>[세팅 시 주의사항]</b><br>
<ol>
  <li>
    database에서 table 생성 시 id에 auto increment 속성을 부여해야한다.(SQL문 혹은 세팅 버튼을 이용)<br>
    ※ 참고<br> https://velog.io/@ejayjeon/MYSQL-autoincrement-%EC%83%9D%EC%84%B1-%EC%B6%94%EA%B0%80-%EC%82%AC%EC%9A%A9-%EB%93%B1-%EC%A0%95%EB%A6%AC<br>
  </li>
  <li>파일명 혹은 폴더 위치를 헷갈리지 않도록 잘 배치해야한다.(파일을 불러올 때 오류 발생할 수 있음)</li>
</ol>
