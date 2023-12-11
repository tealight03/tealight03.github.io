# PHP를 이용한 로그인 폼 구현하기
<img width="556" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/da546c32-09b3-4e44-b8a7-5b4f223727d0">
<br><b>[제작 시 참고 사이트]</b> https://codewithawa.com/posts/admin-and-user-login-in-php-and-mysql-database<br>

# 일반 사용자 계정 생성
<b>[동작 방식]</b><br>
<img width="559" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/5b8e3c81-97c4-4aed-87df-47d716f535d6">
<br><b>1. 현재 등록된 사용자 계정이 없으므로 계정 생성을 위해 [Sign up] 버튼을 클릭한다.</b><br><br>
<img width="571" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/5dc03158-77ca-4734-a03b-0af3d51816dc">
<br>※ login.php의 일부분 캡쳐<br>
<b>위 코드에서 보이듯이, [Sign up] 버튼을 클릭하면 register.php로 이동하도록 설정되어 있으므로,<br>
코드를 따라 register.php가 실행된다.</b><br><br>
<img width="552" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/98ed90b2-5728-45d4-9bcb-e19ebf563290">
<br><b>2. 위 이미지와 같이 로그인 폼에 맞춰 요구하는 데이터를 순서대로 삽입한 후 [Register] 버튼을 클릭한다.</b><br><br>
<img width="561" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/0dbc09ad-13cd-4f7b-bab1-f9d451f6f080"><br>
<img width="382" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/6fdfd357-22cc-4019-b494-2c0d3b211bad"><br>
<img width="586" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/1f94f91f-2a34-48fb-8a63-f11a74f17d32"><br>
<b>register.php에서 include한 functions.php 파일에서 위와 같이 [Register] 버튼이 클릭되었을 때,<br>
register() 함수가 실행되도록 정의하고 있으므로 이에 따라 register() 함수가 실행된다.<br>
로그인 폼에 맞추어 올바른 데이터가 입력되고 SQL문이 정상적으로 실행되었다면<br>
해당 유저의 데이터가 세션에 기록되고, index.php가 실행된다.</b><br>
<br><b>3. DB에 등록된 사용자 데이터를 바탕으로 정상적으로 로그인과정을 거친 후 아래와 같은 화면을 확인할 수 있다.</b><br><br>
<img width="551" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/19e88a9e-8f47-480f-982b-405df3cffdb1">

# 관리자 계정 생성
<b>1. 웹서버를 동작시킨 후 아래와 같이 localhost/login/admin/create_user.php의 경로로 접속한다.</b><br>
<img width="209" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/ff6c69c9-9e0c-4804-bef5-25c8a4ed8f56"><br>
<br><img width="549" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/a90952ef-dc2d-4eb6-b10e-1f2765e45621">
<br><b>2. 아래 이미지와 같이 로그인 폼에 맞춰 요구하는 데이터를 순서대로 삽입한 후 [+Create user] 버튼을 클릭한다.</b><br><br>
<img width="544" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/7e52966a-6ced-4175-8c36-99426c17e05f"><br>
<img width="382" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/6fdfd357-22cc-4019-b494-2c0d3b211bad"><br>
<img width="587" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/b237faf8-745a-44fe-8b4e-76c700559f36">
<br><b>create_user.php에서 include한 functions.php 파일에서 위와 같이 [+Create user] 버튼이 클릭되었을 때,<br>
register() 함수가 실행되도록 정의하고 있으므로 이에 따라 register() 함수가 실행된다.<br>
로그인 폼에 맞추어 올바른 데이터가 입력되고 SQL문이 정상적으로 실행되었다면<br>
해당 유저의 데이터가 세션에 기록되고, login.php가 실행된다.</b><br>
<br><b>3. 등록한 사용자 계정을 입력한다.</b><br><br>
<img width="546" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/77e4c41a-50a2-411e-83b5-693197d37084"><br>
<br><b>4. 정상적으로 로그인과정을 거친 후 아래와 같은 화면을 확인할 수 있다.</b><br><br>
<img width="549" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/546a22fa-be09-4cc7-8890-b28914a7e9fe"><br>
<br><b>+) +add user를 클릭하면 새로운 사용자 계정을 생성할 수 있다.</b><br><br>
<img width="553" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/f9b26239-d4d3-4cec-910b-85506cf30775">

<hr><b>[참고사항]</b><br>
<b>비밀번호는 register() 함수 내에 DB에 비밀번호를 저장할 때 md5형식으로 암호화하여 저장하도록 한다.</b>
<img width="649" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/846e79f4-fa3c-422e-8274-311e3387155c"><br>
<img width="396" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/c6b5e269-f528-45bd-89ad-65773aa2b239"><br>
<b>※ 이와 같이 암호화하여 저장된 비밀번호를 확인할 수 있다.</b>
<hr><b>[세팅 시 주의사항]</b><br>
<ol>
  <li>
    database에서 table 생성 시 id에 auto increment 속성을 부여해야한다.(SQL문 혹은 세팅 버튼을 이용)<br>
    ※ 참고<br> https://velog.io/@ejayjeon/MYSQL-autoincrement-%EC%83%9D%EC%84%B1-%EC%B6%94%EA%B0%80-%EC%82%AC%EC%9A%A9-%EB%93%B1-%EC%A0%95%EB%A6%AC<br>
  </li>
  <li>파일명 혹은 폴더 위치를 헷갈리지 않도록 잘 배치해야한다.(파일을 불러올 때 오류 발생할 수 있음)</li>
</ol>

# functions.php의 동작
<b>[기능을 수행하는 함수들]</b><br>
<ul>
  <li>
    <b>session_start()</b><br>
    <img width="392" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/dff54378-a773-41cf-9b1b-0d78cae84898">
    <br>서버 측에 데이터를 저장하여 클라이언트와 상호 작용을 지원하는 데 사용하는 세션을 시작하도록 한다.
    <br>또한 데이터베이스에 연결해 username, email 등의 사용자 정보를 받아오기 위한 변수와
    <br>error를 처리하기 위한 errors 변수를 생성한다.
  </li>
  <li>
    <b>register()</b><br>
    <img width="583" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/3cfdd0ac-f2a5-40ed-b5a0-da4ff60571cf">
    <br>회원가입 버튼 클릭 시 호출되는 함수이다.
    <br>사용자에게 폼에 맞춰 데이터를 입력하도록 하여 해당 데이터를 받아오고,
    <br>모든 데이터들이 각 폼의 요구사항에 맞게 입력되었는지 확인한 후 errors에 저장한다.
    <br>error를 이용해 오류 사항이 없는지 확인하고,
    <br>오류가 없는 경우 비밀번호를 md5 형식으로 암호화하여
    <br>user type에 따라 데이터베이스에 사용자 데이터를 저장한다.
  </li>
  <li>
    <b>getUserbyId()</b><br>
    <img width="355" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/8be54f8c-7dad-4eb3-a1f6-5a7adfcd18d3">
    <br>데이터베이스에서 id라는 변수에 저장된 데이터와 사용자 id가 동일한 사용자 계정 데이터를 모두 추출하는 SQL 쿼리를 작성한다.
    <br>mysqli_query() 함수로 해당 SQL 쿼리문을 실행하고, 그 결과를 result 변수에 저장한다.
    <br>result에서 첫 번째 행의 데이터를 연관배열 형태로 추출하고 그 값을 반환한다.
  </li>
  <li>
    <b>display_error()</b><br>
    <img width="339" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/aa0b673d-f18a-413a-828c-c40461ff26d3">
    <br>현재 errors에 저장된 데이터가 0개 이상이라면(즉 1개라도 error가 발생했다면)
    <br>errors의 데이터를 출력할 <div>콘텐츠를 동적으로 생성하고 그 안에 errors에 저장된 데이터를 출력하도록 한다.
  </li>
  <li>
    <b>isLoggedIn()</b><br>
    <img width="254" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/2317c566-128e-4f7a-abda-c1dfb680fd98">
    <br>현재 세션에 'user'라는 키로 저장된 데이터가 존재하는지 확인하여
    <br>존재할 경우 true를, 존재하지 않는다면 false를 반환한다.
  </li>
  <li>
    <b>login()</b><br>
    <img width="689" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/09773d96-a5b8-42f1-a686-746520c67c7c">
    <br>로그인 폼으로 입력받은 값을 가져와 각 데이터가 올바르게 입력되었는지 검수한다.
    <br>입력된 데이터에 문제가 없다면 이 데이터를 가지고 로그인을 시도한다.
    <br>먼저, 비밀번호를 md5 형식으로 암호화하여 id와 함께 현재 연동된 데이터베이스에서 데이터를 탐색한다.
    <br>탐색 결과, 반환된 데이터가 1개라면 해당 사용자 정보를 연관 배열로 추출한다.
    <br>사용자가 Admin일 경우 세션을 그에 알맞게 변경해준다.
    <br>만약 반환된 데이터가 1개가 아니라면 errors에 오류 메시지를 추가해준다.
    <br>※ "Wrong username/password combination"
  </li>
  <li>
    <b>isAdmin()</b><br>
    <img width="545" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/a90f060b-f1d6-41c9-a06a-acf7ea8e06ff">
    <br>현재 세션에 'user'라는 키로 저장된 데이터가 존재하는지, 
    <br>해당 데이터의 'user_type'이 'admin'인지 확인하여
    <br>'admin'일 경우 true를, 아닐 경우 false를 반환한다.
  </li>
</ul>
