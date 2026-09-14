xoopseditor는 XOOPS용 편집자 집단을 제공합니다.

사용자 가이드:

1 /xoopseditor/ 아래의 xoops_version.php 파일을 확인하여 현재 파일보다 최신인지 확인하세요.

2 /xoopseditor/를 /XOOPS/class/에 업로드 => /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/클래스/xoopseditor/fckeditor
  XOOPS/class/xoopseditor/koivi
  XOOPS/class/xoopseditor/textarea
  XOOPS/class/xoopseditor/tinymce

3 해당되는 경우 기본 설정을 구성합니다.
3.1 ./dhtmlext(모든 편집자)/언어/: english.php를 기반으로 로컬 언어 파일을 만듭니다.
3.3 ./dhtmlext(모든 편집기)/editor_registry.php: 편집기 구성 설정: order - 편집기 선택이 사용되는 경우 표시 순서, 비활성화된 경우 0; nohtml - HTML이 아닌 구문에서 작동합니다.
3.3 ./FCKeditor/module/: 모듈별 업로드 권한, 저장 및 편집기 옵션이 필요한 경우 모듈 폴더에 파일을 복사합니다.
3.3.1 ./FCKeditor/module/fckeditor.config.js: 편집기 옵션의 경우 일반적으로 변경할 필요가 없습니다.
3.3.2 ./FCKeditor/module/fckeditor.connector.php: 파일 탐색(및 저장 업로드)을 위한 폴더를 지정하려면 => XOOPS/uploads/XOOPS_FCK_FOLDER/, 폴더를 수동으로 생성해야 합니다.
3.3.3 ./FCKeditor/module/fckeditor.upload.php: 업로드 권한 및 업로드 저장 공간 지정
3.4 XOOPS/uploads/fckeditor/: FCKeditor가 활성화된 경우 폴더를 생성하며, 업로드 폴더가 지정되지 않은 곳에서 업로드하는 데 사용됩니다.
3.5 ./tinymce/tinymce/jscripts/: download your local language files from http://tinymce.moxiecode.com/language.php

4 파일 이름 확인: 파일 이름 대소문자 구분 시스템의 경우 파일 이름이 문자 그대로 올바른지 확인하십시오. 즉, "FCKeditor"는 "fckeditor"와 동일하지 않습니다.

5 개발 가이드는 /xoopseditor/sampleform.inc.php를 확인하세요.
