<?php
/**
 * Second-factor challenge strings.
 *
 * A file of their own, apart from user.php: xoops_loadLanguage() falls back
 * to English for a missing file but never fills gaps in a present one, so
 * a language pack that predates the challenge renders it in English rather
 * than failing on an undefined constant.
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

// XOOPS 2.7.4: two-factor challenge
define('_US_2FA_TITLE', '2단계');
define('_US_2FA_PROMPT', '인증 앱에 표시된 코드를 입력하세요');
define('_US_2FA_CODE', '인증 코드');
define('_US_2FA_PROMPT_EMAIL', '%s(으)로 6자리 코드를 보냈습니다. 아래에 입력하세요.');
define('_US_2FA_CODE_EMAIL', '이메일로 받은 코드');
define('_US_2FA_SEND', '새 코드 보내기');
define('_US_2FA_SENT', '%s(으)로 새 코드를 보냈습니다. 10분간 유효합니다.');
define('_US_2FA_SEND_WAIT', '1분 이내에 코드를 보냈습니다. 다른 코드를 요청하기 전에 받은편지함과 스팸 폴더를 확인하세요.');
define('_US_2FA_SEND_FAILED', '지금은 코드를 보낼 수 없습니다. 잠시 후 다시 시도하거나 복구 코드를 사용하세요.');
define('_US_2FA_EMAIL_SUBJECT', '%s: 로그인 코드');
define('_US_2FA_EMAIL_BODY', '%s의 로그인 코드는 다음과 같습니다:

%s

이 코드는 %d분간 유효하며 한 번만 사용할 수 있습니다. 요청하지 않으셨다면 이 메시지를 무시하고 비밀번호 변경을 고려하세요.');
define('_US_2FA_RECOVERY', '대신 복구 코드 사용');
define('_US_2FA_RECOVERY_HINT', '각 복구 코드는 한 번만 사용할 수 있습니다. 사용하면 이메일이 발송됩니다.');
define('_US_2FA_SUBMIT', '계속');
define('_US_2FA_STARTAGAIN', '이 로그인이 만료되었거나 중단되었습니다. 다시 시작해 주세요.');
define('_US_2FA_BACKTOLOGIN', '로그인 양식으로 돌아가기');
define('_US_2FA_BADCODE', '해당 코드는 승인되지 않았습니다.');
define('_US_2FA_LOCKED', '시도 횟수가 너무 많습니다. 2단계가 15분간 잠깁니다. 복구 코드는 계속 사용할 수 있습니다.');
define('_US_2FA_UNAVAILABLE', '2단계를 현재 사용할 수 없습니다. 복구 코드는 계속 사용할 수 있으며, 또는 사이트 관리자에게 문의하세요.');
define('_US_2FA_REQUIRED', '이 계정은 2단계 인증이 활성화되어 있습니다. 사이트 로그인 페이지를 통해 로그인하세요.');
define('_US_2FA_HTTP_LOGIN', '비밀번호가 암호화되지 않은 상태로 전송되므로 이 팝업에서는 HTTP를 통한 2단계 로그인을 완료할 수 없습니다. 대신 사이트 로그인을 이용하거나, 관리자에게 사이트의 HTTPS 활성화를 요청하세요.');
define('_US_2FA_LOCKED_MAIL_SUBJECT', '%s: 2단계가 잠겼습니다');
define('_US_2FA_LOCKED_MAIL_BODY', '%s의 계정에 대해 %s에서 잘못된 2단계 코드가 다섯 번 입력되었습니다. 2단계가 15분간 잠깁니다. 본인이 아니라면 비밀번호를 변경하세요.');
define('_US_2FA_RECOVERY_MAIL_SUBJECT', '%s: 복구 코드가 사용되었습니다');
define('_US_2FA_RECOVERY_MAIL_BODY', '%s에서 귀하의 계정(%s)에 로그인하는 데 복구 코드가 사용되었습니다. 해당 코드는 더 이상 작동하지 않습니다. 본인이 아니라면 비밀번호를 변경하고 복구 코드를 재설정하세요.');
