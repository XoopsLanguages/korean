<?php
// _LANGCODE: ko
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'XOOPS 물리적 경로');
define('LEGEND_DATABASE', '데이터베이스 문자 집합');

define('XOOPS_LIB_PATH_LABEL', 'XOOPS 라이브러리 디렉토리');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS 데이터 파일 디렉터리');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS datafiles (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');

define('DB_COLLATION_LABEL', '데이터베이스 문자 집합 및 데이터 정렬');
define('DB_COLLATION_HELP', "4.12부터 MySQL은 사용자 정의 문자 집합과 데이터 정렬을 지원합니다. 그러나 예상보다 복잡하므로 선택에 확신이 없다면 변경하지 마세요.");
define('DB_COLLATION_NOCHANGE', '변경하지 않음');

define('XOOPS_PATH_FOUND', '경로를 찾았습니다.');
define('ERR_COULD_NOT_ACCESS', '지정된 폴더에 액세스할 수 없습니다. 해당 파일이 존재하고 서버에서 읽을 수 있는지 확인하세요.');
define('CHECKING_PERMISSIONS', '파일 및 디렉터리 권한을 확인하는 중...');
define('ERR_NEED_WRITE_ACCESS', '서버에는 다음 파일 및 폴더<br>(예: UNIX/LINUX 서버의 <em>chmod 777 Directory_name</em>)에 대한 쓰기 액세스 권한이 부여되어야 합니다.');
define('IS_NOT_WRITABLE', '%s은(는) 쓸 수 없습니다.');
define('IS_WRITABLE', '%s은(는) 쓰기 가능합니다.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'mainfile.php에 콘텐츠를 쓰는 중 오류가 발생했습니다. 콘텐츠를 mainfile.php에 수동으로 쓰세요.');
