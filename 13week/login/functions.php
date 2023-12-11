<?php 
session_start(); // 서버 측에 데이터를 저장하여 클라이언트와 상호 작용을 지원하는 데 사용하는 세션을 시작하도록 한다.

// 데이터베이스에 연결
$db = mysqli_connect('localhost', 'root', '', 'multi_login');

// 데이터베이스에 연결해 username, email 등의 사용자 정보를 받아오기 위한 변수와
// error를 처리하기 위한 errors 변수를 선언
$username = "";
$email    = "";
$errors   = array(); 

// register_btn이 클릭되면 register() 함수를 호출
if (isset($_POST['register_btn'])) {
        register();
}

// logout 버튼이 클릭되면 log된 user를 out시킨다
if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['user']);
        header("location: login.php");
}

// register_btn이 클릭되면 login() 함수를 호출
if (isset($_POST['login_btn'])) {
        login();
}

// 사용자 등록 
function register(){
        // 함수 내에서 사용하기 위해 이 함수들을 전역 변수로 불러온다
        global $db, $errors, $username, $email;

        // form으로 입력받은 데이터를 받아온다
        $username    =  e($_POST['username']);
        $email       =  e($_POST['email']);
        $password_1  =  e($_POST['password_1']);
        $password_2  =  e($_POST['password_2']);

        // 폼에 맞게 데이터가 입력되었는지 확인
        if (empty($username)) { 
                array_push($errors, "Username is required"); 
        }
        if (empty($email)) { 
                array_push($errors, "Email is required"); 
        }
        if (empty($password_1)) { 
                array_push($errors, "Password is required"); 
        }
        if ($password_1 != $password_2) {
                array_push($errors, "The two passwords do not match");
        }

        // 입력받은 데이터에 문제가 없다면
        if (count($errors) == 0) {
                $password = md5($password_1); //데이터베이스에 저장하기 전 비밀번호 암호화(md5로)

                if (isset($_POST['user_type'])) {
                        $user_type = e($_POST['user_type']);
                        $query = "INSERT INTO users (username, email, user_type, password) 
                                        VALUES('$username', '$email', '$user_type', '$password')";
                        mysqli_query($db, $query);
                        $_SESSION['success']  = "New user successfully created!!";
                        header('location: home.php');
                }else{
                        $query = "INSERT INTO users (username, email, user_type, password) 
                                        VALUES('$username', '$email', 'user', '$password')";
                        mysqli_query($db, $query);

                        // 생성된 사용자의 id를 받아와 저장
                        $logged_in_user_id = mysqli_insert_id($db);

                        $_SESSION['user'] = getUserById($logged_in_user_id); // 세션에 현재 로그인한 사용자 데이터를 저장
                        $_SESSION['success']  = "You are now logged in";
                        header('location: index.php');                          
                }
        }
}

// id를 이용하여 사용자 데이터를 데이터베이스로부터 추출
function getUserById($id){
        global $db;
        $query = "SELECT * FROM users WHERE id=" . $id;
        $result = mysqli_query($db, $query);

        $user = mysqli_fetch_assoc($result);
        return $user;
}

// escape 기능 수행
function e($val){
        global $db;
        return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
        global $errors;

        // 현재 errors에 저장된 데이터가 0개 이상이라면(즉 1개라도 error가 발생했다면)
        if (count($errors) > 0){
                // errors의 데이터를 출력할 <div>콘텐츠를 동적으로 생성하고 
                // 그 안에 errors에 저장된 데이터를 출력
                echo '<div class="error">';
                        foreach ($errors as $error){
                                echo $error .'<br>';
                        }
                echo '</div>';
        }
} 

function isLoggedIn() {
        // 현재 세션에 'user'라는 키로 저장된 데이터가 존재하는지 확인
        if (isset($_SESSION['user'])) {
                // 존재할 경우 true 반환
                return true;
        }else{
                // 존재하지 않는다면 false 반환
                return false;
        }
}

// 사용자 로그인
function login(){
        global $db, $username, $errors;

        // 로그인 폼으로 입력받은 값을 가져온다
        $username = e($_POST['username']);
        $password = e($_POST['password']);

        // 각 데이터가 올바르게 입력되었는지 검수
        if (empty($username)) {
                array_push($errors, "Username is required");
        }
        if (empty($password)) {
                array_push($errors, "Password is required");
        }

        // 입력된 데이터에 문제가 없다면 로그인 시도
        if (count($errors) == 0) {
                $password = md5($password);

                $query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
                $results = mysqli_query($db, $query);

                if (mysqli_num_rows($results) == 1) { // 반환된 데이터가 1개라면(사용자 데이터를 탐색하는데 성공했다면  )
                        // 반환된 데이터가 1개라면 해당 사용자 정보를 연관 배열로 추출
                        $logged_in_user = mysqli_fetch_assoc($results);

                        // 사용자가 Admin일 경우 세션을 그에 알맞게 변경
                        if ($logged_in_user['user_type'] == 'admin') {

                                $_SESSION['user'] = $logged_in_user;
                                $_SESSION['success']  = "You are now logged in";
                                header('location: admin/home.php');               
                        }else{
                                $_SESSION['user'] = $logged_in_user;
                                $_SESSION['success']  = "You are now logged in";

                                header('location: index.php');
                        }
                }else {
                        // 반환된 데이터가 1개가 아니라면 errors에 오류 메시지 추가
                        array_push($errors, "Wrong username/password combination");
                }
        }
}

function isAdmin()
{       
        // 현재 세션에 'user'라는 키로 저장된 데이터가 존재하는지,
        // 해당 데이터의 'user_type'이 'admin'인지 확인
        if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
                // 'admin'일 경우 true 반환
                return true;
        }else{
                // 아닐 경우 false 반환
                return false;
        }
}