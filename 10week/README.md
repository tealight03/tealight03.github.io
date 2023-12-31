# PHP 무료 웹 호스팅 사이트 url
<img width="865" alt="image" src="https://github.com/tealight03/tealight03.github.io/assets/138011998/96539d5e-d132-4199-bd45-a5526e4a5ff1">

http://davin0706.dothome.co.kr/ <b><- click here!</b>

# 1. 동적 웹페이지와 정적 웹페이지의 차이를 설명하시오.
<br>정적 웹페이지는 사용자가 페이지를 요청할 때마다 항상 동일한 내용이 표시되며,
<br>콘텐츠의 업데이트가 필요한 경우에는 HTML파일을 수정하여 업데이트해야하는 반면,
<br>동적 웹페이지는 사용자의 요청에 따라 서버가 요청에 알맞는 동적 콘텐츠를 생성하여 전송하여
<br>HTML 파일의 내용 변경 없이 클라이언트의 요청을 처리하는 방식으로 구성됩니다.
<br>

# 2. PHP에 설치된 모듈(20개)은 어떤 것이 있는지 조사하시오.
laragon을 다운로드한 폴더 하위의 bin 폴더 내부에서 확인할 수 있습니다.
<br>CMD를 실행하여 C:\laragon\bin\php\php-8.1.10-Win32-vs16-x64의 경로로 이동하고
<br>php -m 명령어를 입력하면 아래와 같이 현재 php에 설치된 모듈이 무엇인지 확인할 수 있습니다.
<br>
<br><b>[실행결과]</b>
<br>
![image](https://github.com/tealight03/tealight03.github.io/assets/138011998/a9feb40b-1ac3-4215-883e-833ad0a38664)


# 3. PHP에서 사용되는 스크립트 엔진에 대해 기술하시오.
PHP를 실행하기 위해서는 PHP 코드를 해석하고 실행하여 동적 웹 페이지를 생성하는 역할을 하는 스크립트 엔진이 필요합니다.
<br>PHP에서 사용되는 스크립트 엔진에는 <b>Zend Engine, HHVM(HipHop Virtual Machine), PHP-FPM</b> 등이 있습니다.
<br>
<br>1) Zend Engine
<br>- PHP의 공식 스크립트 엔진(PHP 4 이후의 버전에서 사용 중)
<br>- PHP 스크립트를 파싱&컴파일하여 바이트코드로 변환 및 실행하여 웹 서버와 상호작용
<br>
<br>2) HHVM (HipHop Virtual Machine)
<br>- Facebook에서 개발한 스크립트 엔진, PHP와 Hack 언어 실행 가능
<br>- JIT(Just-In-Time) 컴파일러를 사용하여 PHP 코드를 기계어로 변환하고 실행(빠른 프로그램 실행)
<br>- 현재는 주로 Hack 언어 컴파일을 위해 사용
<br>
<br>3) PHP-FPM (FastCGI Process Manager)
<br>- PHP FastCGI 인터페이스를 통해 동작하는 PHP의 프로세스 관리자
<br>- 웹 서버와 PHP 사이에 인터페이스 역할을 하는데, 이를 통해 PHP-FPM은 여러 프로세스를 관리하고 PHP 스크립트를 처리합니다.
<br>주로 Nginx와 같은 웹 서버와 함께 사용되며, 성능 향상과 안정성을 제공합니다.
<br>

# 4. 웹 브라우저에서 http://www.abc.com/abc.php 페이지를 접속했을 때, 서버는 어떠한 일을 수행하는가?
웹 브라우저에서 `http://www.abc.com/abc.php` 페이지에 접속하면
<br>웹 브라우저 측에서 www.abc.com 이라는 이름의 서버에
<br>해당 서버에 저장된 abc.php라는 PHP 파일을 실행하라는 HTTP request를 보냅니다.
<br>그러면 www.abc.com 서버는 이 요청을 받아 해당하는 PHP 파일인 "abc.php"를 찾아 실행하고,
<br>파일을 실행하여 생성된 콘텐츠를 HTTP response의 형태로 웹 브라우저에 전달하는 역할을 수행하게 됩니다.
<br>

# 5. call by value와 call by reference의 차이점에 대해 기술하시오.
"call by value"와 "call by reference"는 <b>함수 호출 시 인수를 전달하는 방식</b>과 관련된 용어입니다.
<br>call by value는 함수의 매개변수로 전달된 값의 복사본을 받아 함수를 실행하는 방식으로
<br>함수 내에서 매개변수의 값을 변경하더라도 전달된 원본 변수의 값에는 영향을 주지 않는 방식입니다.
<br>반면 call by reference는 함수에 매개변수로 전달하려는 변수의 참조값(변수의 메모리 주소)을 전달하여
<br>매개변수의 값을 변경할 때 전달된 원본 변수의 값에도 똑같은 영향을 미치는 방식입니다.
<br>함수로 전달받은 값을 변경하였을 때 원본 변수에 저장된 값에 영향을 미치는지 여부에 따라 구분된다고 볼 수 있습니다.
