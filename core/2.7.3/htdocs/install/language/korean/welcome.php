<?php
//
// _LANGCODE: ko
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr>는 PHP로 작성된
    오픈 소스 객체 지향 웹 게시 시스템입니다. 소규모에서 대규모의 동적 커뮤니티 웹사이트,
    사내 포털, 기업 포털, 웹로그 등을 개발하는 데 적합한 도구입니다.
</p>
<p>
    XOOPS는 다음 조건에 따라 배포됩니다.
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU 일반 공중 라이선스(GPL)</a>
    버전 2 이상이며, 자유롭게 사용하고 수정할 수 있습니다.
    GPL의 배포 조건을 준수하는 한 자유롭게 재배포할 수 있습니다.
</p>
<h3>요구사항</h3>
<ul>
    <li>WWW 서버(<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS 등)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 8.2 이상, 8.4+ 권장</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.7.8 이상, 8.4.5+ 권장 </li>
</ul>
<h3>설치 전 준비</h3>
<ol>
    <li>WWW 서버, PHP 및 데이터베이스 서버를 올바르게 설정하십시오.</li>
    <li>XOOPS 사이트에 대한 데이터베이스를 준비하십시오.</li>
    <li>사용자 계정을 준비하고 사용자에게 데이터베이스에 대한 액세스 권한을 부여합니다.</li>
    <li>다음 디렉토리와 파일을 쓰기 가능하게 만드세요: %s</li>
    <li>보안을 고려하여 아래 두 디렉터리를 다른 곳으로 옮기는 것이 좋습니다. <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">문서 루트</a> 폴더 이름을 변경합니다: %s</li>
    <li>(아직 존재하지 않는 경우) 다음 디렉토리를 작성하고 쓰기 가능하게 만듭니다: %s</li>
    <li>브라우저의 쿠키와 JavaScript를 켜십시오.</li>
</ol>
<h3>특별 참고 사항</h3>
<ol>
    <li>일부 특정 시스템 소프트웨어 조합에서는 XOOPS가 정상적으로 작동하려면
    추가 구성이 필요할 수 있습니다. 해당 항목이 환경에 적용된다면 전체
    <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS
    설치 매뉴얼</a>을 참조하십시오.<br><br>

    <li><strong>SELinux</strong> 지원되는 시스템(예: <strong>CentOS</strong>  그리고 <strong>RHEL</strong>) 보안 컨텍스트를 변경해야 할 수도 있습니다.
    XOOPS 디렉토리에 대해 일반 파일 권한 외에 디렉토리를 쓰기 가능하게 만듭니다.
    시스템 문서 및/또는 시스템 관리자에게 문의하십시오.
</ol>
';

return $content;
