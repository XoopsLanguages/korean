<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: ko
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', '도움말 표시/숨기기');
// License
//define('LICENSE_NOT_WRITEABLE', '라이센스 파일 "%s"에 쓸 수 없습니다!');
//define('LICENSE_IS_WRITEABLE', '%s 라이센스를 쓸 수 있습니다.');
// Configuration check page
define('SERVER_API', '서버 API');
define('PHP_EXTENSION', '%s 내선');
define('CHAR_ENCODING', '문자 인코딩');
define('XML_PARSING', 'XML 파싱');
define('REQUIREMENTS', '필수요구사양');
define('_PHP_VERSION', 'PHP 버전');
define('RECOMMENDED_SETTINGS', '권장 설정');
define('RECOMMENDED_EXTENSIONS', '권장 Extension');
define('SETTING_NAME', '설정명');
define('RECOMMENDED', '권장');
define('CURRENT', '현행');
define('RECOMMENDED_EXTENSIONS_MSG', '이러한 확장은 일반적인 사용에는 필요하지 않지만 
 일부 특정 기능(예: 다중 언어 또는 RSS 지원)을 탐색하는 데 필요할 수 있습니다. 따라서 설치하는 것이 좋습니다.');
define('NONE', '없음');
define('SUCCESS', '성공');
define('WARNING', '주의');
define('FAILED', '실패');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'XOOPS 설치 마법사');
define('LANGUAGE_SELECTION', '설치 언어 선택');
define('LANGUAGE_SELECTION_TITLE', '언어를 선택하세요');        // L128
define('INTRODUCTION', '소개');
define('INTRODUCTION_TITLE', 'XOOPS 설치 마법사에 오신 것을 환영합니다');        // L0
define('CONFIGURATION_CHECK', '환경설정 체크');
define('CONFIGURATION_CHECK_TITLE', '서버 환경설정을 체크');
define('PATHS_SETTINGS', '디렉토리의 경로');
define('PATHS_SETTINGS_TITLE', '디렉토리의 경로');
define('DATABASE_CONNECTION', '데이타베이스 접속');
define('DATABASE_CONNECTION_TITLE', '데이타베이스 접속');
define('DATABASE_CONFIG', '데이타베이스 설정');
define('DATABASE_CONFIG_TITLE', '데이타베이스 설정');
define('CONFIG_SAVE', '구성 저장');
define('CONFIG_SAVE_TITLE', '시스템 환경설정을 저장');
define('TABLES_CREATION', '테이블 생성');
define('TABLES_CREATION_TITLE', '데이타베이스 테이블 생성');
define('INITIAL_SETTINGS', '초기 설정');
define('INITIAL_SETTINGS_TITLE', '초기 설정을 입력해 주세요!');
define('DATA_INSERTION', '데이타 삽입');
define('DATA_INSERTION_TITLE', '설정을 데이타베이스에 저장');
define('WELCOME', '환영합니다.');
define('WELCOME_TITLE', 'XOOPS의 세계에 오신 것을 환영합니다.');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'XOOPS의 경로(Physical Path)');
define('XOOPS_URLS', 'XOOPS의 URL(Web locations)');
define('XOOPS_ROOT_PATH_LABEL', 'XOOPS 루트의 경로(Physical Path)');
define('XOOPS_ROOT_PATH_HELP', 'XOOPS가 저장되어있는 디렉토리의 전체경로(Full Path)를 입력해 주세요! 끝에 [ / ]를 붙이지 마시기 바랍니다.');
define('XOOPS_LIB_PATH_LABEL', 'XOOPS 라이브리 디렉토리');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS 데이터 파일 디렉터리');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS data files (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_URL_LABEL', '웹사이트 위치(URL)'); // L56
define('XOOPS_URL_HELP', 'XOOPS에 접속하기 위한 URL을 입력해 주세요! 끝에 [ / ] 를 붙이지 마시기 바랍니다.'); // L58
define('LEGEND_CONNECTION', '서버 접속');
define('LEGEND_DATABASE', '데이타베이스서버'); // L51
define('DB_HOST_LABEL', '데이타베이스 서버 호스트명');    // L27
define('DB_HOST_HELP', '사용하는 데이타베이스 서버의 호스트명을 입력해 주세요. <br />잘 모르실 경우는 localhost 로 설정하시면 대부분 문제없이 작동합니다.'); // L67
define('DB_USER_LABEL', '데이타베이스 사용자계정명');    // L28
define('DB_USER_HELP', '사용하는 데이타베이스 서버에서의 사용자계정명을 입력해 주세요'); // L65
define('DB_PASS_LABEL', '데이타베이스 패스워드');    // L52
define('DB_PASS_HELP', '위에서 입력한 데이타베이스 사용자 계정명의 패스워드를 입력해 주세요'); // L68
define('DB_NAME_LABEL', '데이타베이스명');    // L29
define('DB_NAME_HELP', '사용할 데이타베이스명을 입력해 주세요!<br />존재하지 않을 경우엔 이 데이타베이스명으로 신규작성을 시도하게 됩니다.'); // L64
define('DB_CHARSET_LABEL', '데이타베이스 character set');
define('DB_CHARSET_HELP', 'MySQL에는 다양한 문자 집합을 사용하여 데이터를 저장하고 다양한 데이터 정렬에 따라 비교를 수행할 수 있는 문자 집합 지원이 포함되어 있습니다.');
define('DB_COLLATION_LABEL', '데이타베이스 collation');
define('DB_COLLATION_HELP', '데이터 정렬은 문자 집합의 문자를 비교하기 위한 규칙 집합입니다.');
define('DB_PREFIX_LABEL', '테이블 접두어');    // L30
define('DB_PREFIX_HELP', '각 테이블명에 이 접두어를 붙임으로써 기존의 테이블과 이름이 중복되는 것을 방지하게 됩니다. <br />잘 모르실 경우는 기본값을 사용해 주세요.'); // L63
define('DB_PCONNECT_LABEL', '데이타베이스에의 영구접속(persistent connection)');    // L54
define('DB_PCONNECT_HELP', "기본값은 '아니요'입니다. 확실하지 않은 경우 공백으로 두세요."); // L69
define('DB_DATABASE_LABEL', '데이타베이스');
define('LEGEND_ADMIN_ACCOUNT', '관리자 계정');
define('ADMIN_LOGIN_LABEL', '관리자 아이디'); // L37
define('ADMIN_EMAIL_LABEL', '관리자 메일주소'); // L38
define('ADMIN_PASS_LABEL', '관리자 패스워드'); // L39
define('ADMIN_CONFIRMPASS_LABEL', '관리자 패스워드(재입력)'); // L74
// Buttons
define('BUTTON_PREVIOUS', '이전'); // L42
define('BUTTON_NEXT', '계속'); // L47
// Messages
define('XOOPS_FOUND', '%s 을 찾았습니다.');
define('CHECKING_PERMISSIONS', '파일과 디렉토리의 권한(퍼미션) 체크'); // L82
define('IS_NOT_WRITABLE', '파일 %s 은(는) 쓰기불가 상태입니다. 쓰기가능으로 설정해주세요!(chmod 666)'); // L83
define('IS_WRITABLE', '파일 %s 은(는) 쓰기가능 상태입니다.'); // L84
define('XOOPS_PATH_FOUND', '패스(Path)를 찾았습니다.');
//define('READY_CREATE_TABLES', 'XOOPS 테이블이 감지되지 않았습니다.<br>이제 설치 프로그램이 XOOPS 시스템 테이블을 생성할 준비가 되었습니다.');
define('XOOPS_TABLES_FOUND', 'XOOPS 시스템 테이블이 데이터베이스에 이미 존재합니다.'); // L131
define('XOOPS_TABLES_CREATED', 'XOOPS 시스템 테이블이 생성되었습니다.');
//define('READY_INSERT_DATA', '지금부터 설치마법사가 데이타베이스에 초기 데이타를 삽입하게 될 것입니다.');
//define('READY_SAVE_MAINFILE', '이제 설치 프로그램이 지정된 설정을 <em>mainfile.php</em>에 저장할 준비가 되었습니다.');
define('SAVED_MAINFILE', '설정이 저장되었습니다');
define('SAVED_MAINFILE_MSG', '설치 프로그램이 지정된 설정을 <em>mainfile.php</em> 및 <em>secure.php</em>에 저장했습니다.');
define('DATA_ALREADY_INSERTED', 'XOOPS 데이터가 데이터베이스에서 발견되었습니다.');
define('DATA_INSERTED', '초기 데이터가 데이터베이스에 삽입되었습니다.');
// %s is database name
define('DATABASE_CREATED', '데이타베이스 %s 을 작성하였습니다.'); // L43
// %s is table name
define('TABLE_NOT_CREATED', '데이타베이스 %s의 작성에 실패하였습니다.'); // L118
define('TABLE_CREATED', '%s 테이블을 작성하였습니다.'); // L45
define('ROWS_INSERTED', '%d 개의 데이타가 데이타베이스 %s에 삽입되었습니다.'); // L119
define('ROWS_FAILED', '%d 개의 데이타가 데이타베이스 %s에 삽입되는데 실패하였습니다.'); // L120
define('TABLE_ALTERED', '테이블 %s 를 업그레이드했습니다.'); // L133
define('TABLE_NOT_ALTERED', '테이블 %s 의 업그레이드에 실패하였습니다.'); // L134
define('TABLE_DROPPED', '테이블 %s 를 삭제하였습니다.'); // L163
define('TABLE_NOT_DROPPED', '테이블 %s 의 삭제에 실패하였습니다.'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', '지정된 디렉토리에 액세스할수가 없습니다. 디렉토리가 존재하는지 혹은 읽기권한이 있는지 확인해 보시기 바랍니다.');
define('ERR_NO_XOOPS_FOUND', '지정된 디렉토리에서 XOOPS를 찾을 수가 없습니다.');
define('ERR_INVALID_EMAIL', '올바르지 않은 메일주소입니다.'); // L73
define('ERR_REQUIRED', '필요한 정보를 모두 입력해 주시기 바랍니다.'); // L41
define('ERR_PASSWORD_MATCH', '두 패스워드가 일치하지 않습니다.');
define('ERR_NEED_WRITE_ACCESS', '서버에는 다음 파일 및 폴더에 대한 쓰기 권한이 부여되어야 합니다<br>(예: UNIX/LINUX 서버의 <em>chmod 775 디렉토리_이름</em>)<br>사용할 수 없거나 올바르게 생성되지 않은 경우 수동으로 생성하고 적절한 권한을 설정하십시오.');
define('ERR_NO_DATABASE', '데이타베이스의 작성에 실패하였습니다. 설정값이 올바른지 확인한 후 다시 처음부터 다시시도하시거나 관리자에게 해당사항을 문의해 보시기 바랍니다.'); // L31
define('ERR_NO_DBCONNECTION', '데이타베이스 서버에 접속하는데 실패하였습니다.'); // L106
define('ERR_WRITING_CONSTANT', '상수 %s 의 기록에 실패하였습니다.'); // L122
define('ERR_COPY_MAINFILE', '배포 파일을 %s에 복사할 수 없습니다.');
define('ERR_WRITE_MAINFILE', '%s에 쓸 수 없습니다. 파일 권한을 확인하고 다시 시도해 주세요.');
define('ERR_READ_MAINFILE', '읽기 위해 %s을(를) 열 수 없습니다.');
define('ERR_INVALID_DBCHARSET', "character set '%s' 은 지원되지 않습니다.");
define('ERR_INVALID_DBCOLLATION', "collation '%s' 은 지원되지 않습니다.");
define('ERR_CHARSET_NOT_SET', 'XOOPS 데이타베이스의 Default character set이 지정되어 있지 않습니다.');
define('_INSTALL_CHARSET', 'EUC-KR');
define('SUPPORT', '지원');
define('LOGIN', '인증');
define('LOGIN_TITLE', '인증');
define('USER_LOGIN', '관리자 로그인');
define('USERNAME', '사용자 이름:');
define('PASSWORD', '비밀번호 :');
define('ICONV_CONVERSION', '문자 집합 변환');
define('ZLIB_COMPRESSION', 'Zlib 압축');
define('IMAGE_FUNCTIONS', '이미지 함수');
define('IMAGE_METAS', '이미지 메타데이터(exif)');
define('FILTER_FUNCTIONS', '필터 함수');
define('ADMIN_EXIST', '관리자 계정이 이미 존재합니다.');
define('CONFIG_SITE', '사이트 구성');
define('CONFIG_SITE_TITLE', '사이트 구성');
define('MODULES', '모듈 설치');
define('MODULES_TITLE', '모듈 설치');
define('THEME', '테마 선택');
define('THEME_TITLE', '기본 테마 선택');
define('INSTALLED_MODULES', '다음 모듈이 설치되었습니다.');
define('NO_MODULES_FOUND', '모듈을 찾을 수 없습니다.');
define('NO_INSTALLED_MODULES', '설치된 모듈이 없습니다.');
define('THEME_NO_SCREENSHOT', '스크린샷을 찾을 수 없습니다');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', '비밀번호 강도');
define('PASSWORD_DESC', '비밀번호가 입력되지 않았습니다');
define('PASSWORD_GENERATOR', '비밀번호 생성기');
define('PASSWORD_GENERATE', '생성');
define('PASSWORD_COPY', '복사');
define('PASSWORD_VERY_WEAK', '매우 약함');
define('PASSWORD_WEAK', '약함');
define('PASSWORD_BETTER', '더 나음');
define('PASSWORD_MEDIUM', '보통');
define('PASSWORD_STRONG', '강함');
define('PASSWORD_STRONGEST', '가장 강함');
//2.5.7
define('WRITTEN_LICENSE', 'XOOPS %s 작성 라이센스 키: <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', '다시 시도');
define('CHMOD_CHGRP_IGNORE', '어차피 사용');
define('CHMOD_CHGRP_ERROR', '설치 프로그램이 구성 파일 %1$s을 쓸 수 없습니다.<p>PHP는 사용자 %2$s 및 그룹 %3$s.<p>에서 파일을 쓰고 있습니다. 디렉터리 %4$s/에는 사용자 %5$s 및 그룹 %6$s이 있습니다.');
//2.5.9
define("CURL_HTTP", "클라이언트 URL 라이브러리(cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', '웹사이트용 쿠키 도메인');
define('XOOPS_COOKIE_DOMAIN_HELP', '쿠키를 설정할 도메인입니다. 비어 있을 수 있습니다. URL(www.example.com)의 전체 호스트 또는 하위 도메인(www.example.com 및 blog.example.com) 간에 공유할 하위 도메인이 없는 등록된 도메인(example.com)입니다.');
define('INTL_SUPPORT', '국제화 함수');
define('XOOPS_SOURCE_CODE', "XOOPS");
define('XOOPS_INSTALLING', '설치 중');
define('XOOPS_ERROR_ENCOUNTERED', '오류');
define('XOOPS_ERROR_SEE_BELOW', '메시지는 아래를 참조하세요.');
define('MODULES_AVAILABLE', '사용 가능한 모듈');
define('INSTALL_THIS_MODULE', '%s 추가');
//2.5.11
define('ERR_COPY_CONFIG_FILE', '구성 파일 %s을(를) 복사할 수 없습니다.');
//2.7.0
// website name and slogan
define('_WEBSITE_NAME', 'XOOPS 사이트');
define('_WEBSITE_SLOGAN', '그냥 써보세요!');
define('_WEBSITE_META_KEYWORDS', 'xoops, 웹 애플리케이션 프레임워크, CMS, 콘텐츠 관리 시스템');
define('_WEBSITE_FOOTER', "XOOPS 제공 © 2001-{X_YEAR} <a href='https://xoops.org' rel='external' title='The XOOPS Project'>XOOPS 프로젝트</a>");
define('_WEBSITE_COPYRIGHT', '저작권 © 2001-{X_YEAR}');
define('_WEBSITE_DESCRIPTION', 'XOOPS은 PHP로 작성된 동적 객체 지향 기반 오픈 소스 포털 스크립트입니다.');
define('_WEBSITE_CENSOR_REPLACE', '이런');
// 2.7.1
define('MISSING_REQUIRED_EXTENSIONS', 'Required PHP extensions are missing');
define('MISSING_REQUIRED_EXTENSIONS_MSG', 'XOOPS cannot be installed because the following mandatory PHP extension(s) are not available: %s. Enable them in your PHP configuration (php.ini) and restart your web server, then reload this page.');
