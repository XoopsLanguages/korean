<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','액세스권한');
define('_MD_A_MYMENU_MYPREFERENCES','일반설정');
// index.php
define('_AM_TH_DATETIME', '일시');
define('_AM_TH_USER', '사용자');
define('_AM_TH_IP', 'IP');
define('_AM_TH_에이전트', 'AGENT');
define('_AM_TH_TYPE', '종류');
define('_AM_TH_DESCRIPTION', '상세정보');
define('_AM_TH_BADIPS','잘못된 IP<br><br><span style="font-weight:normal;">각 IP을 한 줄에 기록합니다<br>공백은 모든 IP가 허용됨을 의미합니다</span>');
define('_AM_TH_GROUP1IPS','그룹에 허용되는 IP=1<br><br><span style="font-weight:normal;">각 IP을 한 줄에 씁니다.<br>192.168. 192.168.*<br>blank는 모든 IP가 허용됨을 의미합니다</span>');
define('_AM_LABEL_COMPACTLOG', '로그를 컴팩트화');
define('_AM_BUTTON_COMPACTLOG', '컴팩트화 실행');
define('_AM_JS_COMPACTLOGCONFIRM', '중복된(IP,Type) 레코드를 삭제처리합니다.');
define('_AM_LABEL_REMOVEALL', '모든 레코드를 삭제:');
define('_AM_BUTTON_REMOVEALL', '모두삭제 실행');
define('_AM_JS_REMOVEALLCONFIRM', '모든 로그를 삭제처리합니다. 계속 하시겠습니까?');
define('_AM_LABEL_REMOVE', '체크한 레코드를 삭제함:');
define('_AM_BUTTON_REMOVE', '삭제실행');
define('_AM_JS_REMOVECONFIRM', '정말로 삭제하실 건가요?');
define('_AM_MSG_IPFILESUPDATED', 'IP 리스트파일을 갱신하였습니다.');
define('_AM_MSG_BADIPSCANTOPEN', '잘못된 IP 파일을 열 수 없습니다');
define('_AM_MSG_GROUP1IPSCANTOPEN', '관리자용IP 리스트파일을 열수가 없습니다.');
define('_AM_MSG_REMOVED', '삭제하였습니다.');
define('_AM_MSG_DELFAILED', '기록 삭제 실패');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'configs 디렉토리를 쓰기가능으로 설정해 주세요!: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', '접두어(Prefix) 관리자');
define('_AM_MSG_DBUPDATED', '데이타베이스가 성공적으로 갱신되었습니다.');
define('_AM_CONFIRM_DELETE', '모든 테이블이 삭제됩니다. 계속하시겠습니까?');
define('_AM_TXT_HOWTOCHANGEDB',"접두사를 변경하려면 <br> %s/data/secure.php를 수동으로 편집하세요.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'Insecure');
define('_AM_ADV_TRUSTPATHPUBLIC', '이미지가 보이거나 -NG- 링크가 일반 페이지로 돌아가면 XOOPS_TRUST_PATH가 제대로 배치되지 않은 것입니다. XOOPS_TRUST_PATH에 가장 적합한 위치는 DocumentRoot 외부입니다. 그렇게 할 수 없다면 두 번째로 좋은 방법으로 XOOPS_TRUST_PATH 바로 아래에 .htaccess(DENY FROM ALL)를 넣어야 합니다.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'TRUST_PATH 내의 PHP 파일이 읽기 전용으로 설정되어 있는지 확인하세요(404,403 또는 500 오류여야 함).');
define('_AM_ADV_REGISTERGLOBALS',"'ON'인 경우 이 설정은 다양한 주입 공격을 유도합니다. 가능하다면 php.ini에서 'register_globals off'를 설정하세요. 가능하지 않다면 XOOPS 디렉터리에서 .htaccess를 생성하거나 편집하세요:");
define('_AM_ADV_ALLOWURLFOPEN',"'ON'인 경우 이 설정은 공격자가 원격 서버에서 임의의 스크립트를 실행할 수 있도록 허용합니다.<br>관리자만 이 옵션을 변경할 수 있습니다.<br>관리자인 경우 php.ini 또는 httpd.conf를 편집하십시오.<br><b>httpd.conf 샘플:<br> &nbsp; php_admin_flag &nbsp; allowed_url_fopen &nbsp; off</b><br>그렇지 않으면 관리자에게 요청하세요.");
define('_AM_ADV_USETRANSSID',"'ON'인 경우 세션 ID가 앵커 태그 등에 표시됩니다.<br>세션 하이재킹을 방지하려면 XOOPS_ROOT_PATH의 .htaccess에 한 줄을 추가하세요.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"이 설정은 'SQL 주입'을 초대합니다.<br>이 모듈의 기본 설정에서 '강제 삭제 *'를 켜는 것을 잊지 마세요.");
define('_AM_ADV_LINK_TO_PREFIXMAN', '접두어(prefix) 관리자로');
define('_AM_ADV_MAINUNPATCHED', 'Xoops Protector가 제기능을 다하기 위해선 mainfile.php을 변경할 필요가 있습니다. <br />README를 숙독하신 후 mainfile.php 관련 변경을 해 주시기 바랍니다.');
define('_AM_ADV_DBFACTORYPATCHED', '귀하의 데이터베이스 팩토리는 DBLayer Trapping anti-SQL-Injection을 위한 준비가 되어 있습니다.');
define('_AM_ADV_DBFACTORYUNPATCHED', '귀하의 데이터베이스 팩토리는 DBLayer Trapping anti-SQL-Injection을 위한 준비가 되어 있지 않습니다. 일부 패치가 필요합니다.');
define('_AM_ADV_SUBTITLECHECK', 'Protector 작동 체크');
define('_AM_ADV_CHECKCONTAMI', '오염');
define('_AM_ADV_CHECKISOCOM', '고립 코멘트');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', '아래 줄을 입력하세요.');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', '접두사');
define('_AM_PROTECTOR_TABLES', '테이블');
define('_AM_PROTECTOR_UPDATED', '업데이트됨');
define('_AM_PROTECTOR_COPY', '복사');
define('_AM_PROTECTOR_ACTIONS', '작업');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', '확인된 기록의 IP를 금지합니다.');
define('_AM_BUTTON_BAN_BY_IP', 'IP 금지!');
define('_AM_JS_BANCONFIRM', 'IP 차단 괜찮으세요?');
define('_AM_MSG_BANNEDIP', 'IP가 차단되었습니다');
define('_AM_ADMINSTATS_TITLE', 'Protector 로그 요약');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', '지난달');
define('_AM_ADMINSTATS_LAST_WEEK', '지난주');
define('_AM_ADMINSTATS_LAST_DAY', '어제');
define('_AM_ADMINSTATS_LAST_HOUR', '지난 한 시간');

//2.7.1 backfilled translations
define('_AM_TH_AGENT', 'AGENT');
