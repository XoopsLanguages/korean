<?php
/**
 * Two-factor management strings.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             core
 * @since               2.7.4
 */

define('_US_2FAM_TITLE', '2단계 인증');
define('_US_2FAM_PASSWORD', '현재 비밀번호');
define('_US_2FAM_ENABLE', '인증 앱 설정');
define('_US_2FAM_CONFIRM', '인증 앱 확인');
define('_US_2FAM_CHOOSE', '2단계를 받는 방법을 선택하세요: 인증 앱 또는 이메일로 받는 코드.');
define('_US_2FAM_ENABLE_EMAIL', '이메일 코드 사용');
define('_US_2FAM_EMAIL_HELP', '이메일 코드: 로그인할 때마다 %s(으)로 6자리 코드가 전송됩니다. 이메일을 읽을 수 있는 사람은 누구나 이 단계를 통과할 수 있으므로 인증 앱보다 보안성이 낮습니다.');
define('_US_2FAM_EMAIL_STEP', '%s(으)로 6자리 코드를 보냈습니다. 확인을 위해 아래에 입력하세요. 10분간 유효합니다.');
define('_US_2FAM_CONFIRM_EMAIL', '이메일 코드 확인');
define('_US_2FAM_CODE_HELP_EMAIL', '방금 보내드린 이메일에 있는 6자리 코드입니다.');
define('_US_2FAM_ENABLED_EMAIL', '이메일 코드가 등록되어 있습니다. 변경하려면 현재 비밀번호와 이메일로 전송된 코드 또는 복구 코드를 입력하세요. 코드를 요청하려면 아래 버튼을 사용하세요.');
define('_US_2FAM_SEND', '코드 보내기');
define('_US_2FAM_MANUAL', '수동 설정 키');
define('_US_2FAM_SCAN', '인증 앱용 QR 코드');
define('_US_2FAM_STEP_APP', '인증 앱이 필요합니다. 시간 기반 일회용 코드(TOTP)를 생성하는 앱이나 비밀번호 관리자라면 휴대폰이나 컴퓨터 어디에서든 사용할 수 있습니다. 아직 없다면 원하는 것(예: Google Authenticator, Microsoft Authenticator, Aegis, FreeOTP)을 먼저 설치하세요.');
define('_US_2FAM_STEP_ADD', '앱에서 계정을 추가하세요: 이 QR 코드를 스캔하거나 수동 입력을 선택하여 아래에 표시된 설정 키를 입력하세요.');
define('_US_2FAM_STEP_CODE', '이제 앱에 30초마다 바뀌는 6자리 코드가 표시됩니다. 현재 표시된 코드를 아래 필드에 입력하고 확인하세요.');
define('_US_2FAM_CODE_HELP', '인증 앱에 현재 표시된 6자리 코드입니다.');
define('_US_2FAM_HTTP', '이 연결은 암호화되지 않은 HTTP를 사용합니다. 비밀번호, 세션, 인증 앱 설정 키, 복구 코드가 가로채질 수 있습니다. 가능하면 항상 HTTPS를 사용하세요.');
define('_US_2FAM_CODES', '지금 이 복구 코드를 저장하세요');
define('_US_2FAM_CODES_HELP', '각 코드는 한 번만 사용할 수 있습니다. 이 코드는 다시 표시되지 않습니다. 이 계정과 별도로 안전한 곳에 보관하세요.');
define('_US_2FAM_DISABLE', '2단계 인증 비활성화');
define('_US_2FAM_REGENERATE', '복구 코드 교체');
define('_US_2FAM_ENABLED', '인증 앱이 등록되어 있습니다. 변경하려면 현재 비밀번호와 인증 코드 또는 복구 코드를 입력하세요.');
define('_US_2FAM_DISABLED', '2단계 인증이 비활성화되어 있습니다.');
define('_US_2FAM_PAUSED', '사이트가 2단계 인증 확인을 일시 중지했습니다. 인증 요소는 유지되며, 등록된 계정에는 "로그인 정보 기억"이 계속 사용할 수 없습니다.');
define('_US_2FAM_UNAVAILABLE', '2단계 인증 설정 또는 관리를 사용할 수 없습니다. 사이트 관리자에게 문의하세요.');
define('_US_2FAM_STARTAGAIN', '설정이 만료되었거나 계정이 변경되었습니다. 설정을 다시 시작하려면 비밀번호를 입력하세요.');
define('_US_2FAM_BADPASSWORD', '현재 비밀번호가 승인되지 않았습니다.');
define('_US_2FAM_RESET', '이 사용자의 2단계 인증 재설정');
define('_US_2FAM_STATUS_NONE', '등록되지 않음');
define('_US_2FAM_STATUS_TOTP', '인증 앱 등록됨');
define('_US_2FAM_STATUS_EMAIL', '이메일 코드 등록됨');
define('_US_2FAM_STATUS_UNAVAILABLE', '상태를 사용할 수 없음');
define('_US_2FAM_RESET_HELP', '이렇게 하면 등록된 방식과 관계없이 사용자의 2단계 인증 요소가 비활성화되고, 복구 코드와 "로그인 정보 기억" 쿠키가 취소됩니다. 기존에 로그인된 세션은 계속 활성 상태로 유지됩니다. 확인을 위해 본인의 관리자 비밀번호를 입력하세요.');
define('_US_2FAM_RESET_DONE', '사용자의 2단계 인증이 재설정되었습니다.');
define('_US_2FAM_BACK', '계정으로 돌아가기');
define('_US_2FAM_DONE', '2단계 인증이 활성화되었습니다.');
define('_US_2FAM_REPLACED', '이전 복구 코드가 취소되었습니다.');
define('_US_2FAM_NOTICE_SUBJECT', '%s: 2단계 인증이 변경되었습니다');
define('_US_2FAM_NOTICE_BODY', '%s의 계정에 대한 2단계 인증 또는 복구 코드가 %s에서 변경되었습니다. 본인이 아니라면 사이트 관리자에게 문의하세요.');
define('_US_2FAM_RESET_SUBJECT', '%s: 관리자가 귀하의 2단계 인증을 재설정했습니다');
define('_US_2FAM_RESET_BODY', '관리자가 %s에서 %s의 2단계 인증 요소를 비활성화하고 복구 코드를 취소했습니다. 기존에 로그인된 세션은 계속 활성 상태로 유지됩니다. 로그인하여 2단계 인증을 다시 설정하세요. 예상치 못한 일이라면 사이트 관리자에게 문의하세요.');
