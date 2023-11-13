# 1. 동적 웹페이지와 정적 웹페이지의 차이를 설명하시오.
<br>정적 웹페이지는 사용자가 페이지를 요청할 때마다 항상 동일한 내용이 표시되며,
<br>콘텐츠의 업데이트가 필요한 경우에는 HTML파일을 수정하여 업데이트해야하는 반면,
<br>동적 웹페이지는 사용자의 요청에 따라 서버가 요청에 알맞는 동적 콘텐츠를 생성하여 전송하여
<br>HTML 파일의 내용 변경 없이 클라이언트의 요청을 처리하는 방식으로 구성됩니다.
<br>
# 2. PHP에 설치된 모듈(20개)은 어떤 것이 있는지 조사하시오.

# 3. PHP에서 사용되는 스크립트 엔진에 대해 기술하시오.
PHP를 실행하기 위해서는 PHP 코드를 해석하고 실행하여 동적 웹 페이지를 생성하는 역할을 하는 스크립트 엔진이 필요합니다.
<br>PHP에서 사용되는 스크립트 엔진에는 Zend Engine, HHVM(HipHop Virtual Machine), PHP-FPM 등이 있습니다.
<br><br>
<br>1) Zend Engine
<br>- PHP의 공식 스크립트 엔진(PHP 4 이후의 버전에서 사용 중)
<br>- PHP 스크립트를 파싱&컴파일하여 바이트코드로 변환 및 실행하여 웹 서버와 상호작용
<br><br>
<br>2) HHVM (HipHop Virtual Machine)
<br>- Facebook에서 개발한 스크립트 엔진, PHP와 Hack 언어 실행 가능
<br>- JIT(Just-In-Time) 컴파일러를 사용하여 PHP 코드를 기계어로 변환하고 실행(빠른 프로그램 실행)
<br>- 현재는 주로 Hack 언어 컴파일을 위해 사용
<br><br>
<br>3) PHP-FPM (FastCGI Process Manager)
<br>- PHP FastCGI 인터페이스를 통해 동작하는 PHP의 프로세스 관리자
<br>- 웹 서버와 PHP 사이에 인터페이스 역할을 하는데, 이를 통해 PHP-FPM은 여러 프로세스를 관리하고 PHP 스크립트를 처리합니다.
<br>주로 Nginx와 같은 웹 서버와 함께 사용되며, 성능 향상과 안정성을 제공합니다.
<br>
# 4. 웹 브라우저에서 http://www.abc.com/abc.php 페이지를 접속했을 때, 서버는 어떠한 일을 수행하는가?

# 5. call by value와 call by reference의 차이점에 대해 기술하시오.
