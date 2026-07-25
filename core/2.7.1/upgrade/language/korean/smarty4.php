<?php

// _LANGCODE: ko
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'XOOPS Smarty4 마이그레이션');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', '스캐너 결과');
define('_XOOPS_SMARTY4_SCANNER_RUN', '스캔 실행');
define('_XOOPS_SMARTY4_SCANNER_END', '스캐너 종료');
define('_XOOPS_SMARTY4_SCANNER_RULE', '규칙');
define('_XOOPS_SMARTY4_SCANNER_MATCH', '일치');
define('_XOOPS_SMARTY4_SCANNER_FILE', '파일');
define('_XOOPS_SMARTY4_SCANNER_FIXED', '수정 횟수');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', '직접 검토 필요');
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', '자동 수정 가능: foreach 항목 변수는 "_item"을 추가하여 이름이 변경됩니다(예: "foo"는 "foo_item"이 됨).');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', '쓸 수 없음');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', '재검색 옵션');

define('_XOOPS_SMARTY4_FIX_BUTTON', '아래의 "예" 확인란을 클릭한 다음 검색 실행 버튼을 클릭하여 발견된 문제를 자동으로 해결해 보세요.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', '마크 컴플리트');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', '템플릿 디렉터리(선택 사항)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', '템플릿 확장(선택 사항)');


define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.7.0에는 중요한 변경 사항이 도입되었습니다: Smarty 4</h3>

<p>불행하게도 이러한 변경으로 인해 일부 이전 테마가 중단될 가능성이 있습니다. 따라서 업그레이드를 진행하기 전에 다음 단계를 따르십시오.

<li>preflight.php를 실행하여 오래된 테마나 모듈 템플릿이 있는지 확인하십시오.</li>
<li>문제가 식별되면 업그레이드를 진행하기 전에 이 문서를 참조하여 필요한 수정 사항을 이해하십시오.</li>
<li>필요한 변경을 완료한 후 preflight.php를 다시 실행하십시오.</li>
<li>더 이상 문제가 없으면 업그레이드 프로세스를 시작할 수 있습니다.</li>
</p>
EOT,
);
