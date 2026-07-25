<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: ko

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'PHP DebugBar를 사용한 오류 보고 및 성능 분석');

define('_MI_DEBUGBAR_ENABLE', 'DebugBar 표시');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Smarty Debug 활성화');
define('_MI_DEBUGBAR_FILESDEBUG', '포함된 파일 탭 활성화');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', '요청 중에 로드된 모든 PHP 파일 표시');
define('_MI_DEBUGBAR_SLOWQUERY', '느린 쿼리 기준값(초)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', '이것보다 느린 쿼리는 빨간색으로 강조 표시됩니다(예: 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      '쿼리 로깅');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  '모든 쿼리 또는 느린 쿼리 및 오류만');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  '모든 쿼리');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', '느린 것과 오류만');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Ray 통합 활성화');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Ray 데스크톱 앱에 디버그 데이터 전송');

define('_MI_DEBUGBAR_ADMENU1', '홈');
define('_MI_DEBUGBAR_MENU_ABOUT', '정보');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', '관리로 돌아가기 ');
\define('_MI_DEBUGBAR_OVERVIEW', '개요');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', '면책 조항');
\define('_MI_DEBUGBAR_LICENSE', '라이선스');
\define('_MI_DEBUGBAR_SUPPORT', '지원');
