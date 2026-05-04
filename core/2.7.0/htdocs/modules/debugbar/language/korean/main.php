<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: ko

define('_MD_DEBUGBAR_DEBUG', '디버그');
define('_MD_DEBUGBAR_INCLUDED_FILES', '포함된 파일');
define('_MD_DEBUGBAR_PHP_VERSION', 'PHP 버전');
define('_MD_DEBUGBAR_NONE', '없음');
define('_MD_DEBUGBAR_ERRORS', '오류');
define('_MD_DEBUGBAR_DEPRECATED', '사용 중단됨');
define('_MD_DEBUGBAR_QUERIES', '쿼리');
define('_MD_DEBUGBAR_BLOCKS', '블록');
define('_MD_DEBUGBAR_EXTRA', '추가');
define('_MD_DEBUGBAR_TIMERS', '타이머');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s 로드에 %s초가 걸렸습니다.');
define('_MD_DEBUGBAR_TOTAL', '합계');
define('_MD_DEBUGBAR_NOT_CACHED', '캐시 없음');
define('_MD_DEBUGBAR_CACHED', '캐시됨(%s초마다 재생성)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(빈 문자열)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'bool 참');
define('_MD_DEBUGBAR_BOOL_FALSE', 'bool 거짓');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', '데이터베이스 쿼리');
define('_MD_DEBUGBAR_MEMORY_USAGE', '메모리 사용량');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d 쿼리');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d 중복)');
define('_MD_DEBUGBAR_BYTES', '%s바이트');
define('_MD_DEBUGBAR_DB_VERSION', '%s 버전');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- 오류 번호: %s 오류 메시지: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- 오류 #%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', '예외');
define('_MD_DEBUGBAR_RAY_QUERY', '쿼리 #%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', '느림');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', '차단(캐시된 %ds)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', '차단(캐시되지 않음)');
define('_MD_DEBUGBAR_RAY_DUMP', '덤프');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', '템플릿 컨텍스트');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(템플릿 변수 없음)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d 변수)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', '"modules/debugbar/%s" 디렉터리가 생성되지 않았습니다.');
define('_MD_DEBUGBAR_ERR_DIR_COPY', '자산 복사 중에 "%s" 디렉터리를 생성하지 못했습니다.');
