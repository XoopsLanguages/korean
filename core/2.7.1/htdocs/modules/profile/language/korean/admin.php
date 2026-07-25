<?php
//
// _LANGCODE: ko
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('_PROFILE_AM_FIELD', '필드');
define('_PROFILE_AM_FIELDS', '필드');
define('_PROFILE_AM_CATEGORY', '카테고리');
define('_PROFILE_AM_STEP', '단계');
define('_PROFILE_AM_SAVEDSUCCESS', '%s 이/가 성공적으로 저장되어졌습니다.');
define('_PROFILE_AM_DELETEDSUCCESS', '%s 이/가 성공적으로 삭제되어졌습니다.');
define('_PROFILE_AM_RUSUREDEL', '%s 을/를 정말로 삭제하시겠습니까?');
define('_PROFILE_AM_FIELDNOTCONFIGURABLE', '필드를 구성할 수 없습니다.');
define('_PROFILE_AM_ADD', '추가 %s');
define('_PROFILE_AM_EDIT', '편집 %s');
define('_PROFILE_AM_TYPE', '필드 종류');
define('_PROFILE_AM_VALUETYPE', '필드값 종류');
define('_PROFILE_AM_NAME', '이름');
define('_PROFILE_AM_TITLE', '타이틀');
define('_PROFILE_AM_DESCRIPTION', '설명');
define('_PROFILE_AM_REQUIRED', '필수?');
define('_PROFILE_AM_MAXLENGTH', '최대길이');
define('_PROFILE_AM_WEIGHT', '표시순');
define('_PROFILE_AM_DEFAULT', '디폴트');
define('_PROFILE_AM_NOTNULL', '널값 아님(Not Null)?');
define('_PROFILE_AM_ARRAY', 'Array(배열)');
define('_PROFILE_AM_EMAIL', '메일주소');
define('_PROFILE_AM_INT', 'Integer(정수)');
define('_PROFILE_AM_TXTAREA', 'Text Area(글 영역)');
define('_PROFILE_AM_TXTBOX', 'Text field(글 줄)');
define('_PROFILE_AM_URL', 'URL');
define('_PROFILE_AM_OTHER', '그 외');
define('_PROFILE_AM_FLOAT', '부동 소수점');
define('_PROFILE_AM_DECIMAL', '소수');
define('_PROFILE_AM_UNICODE_ARRAY', '유니코드 배열');
define('_PROFILE_AM_UNICODE_EMAIL', '유니코드 이메일');
define('_PROFILE_AM_UNICODE_TXTAREA', '유니코드 텍스트 영역');
define('_PROFILE_AM_UNICODE_TXTBOX', '유니코드 텍스트 필드');
define('_PROFILE_AM_UNICODE_URL', '유니코드 URL');
define('_PROFILE_AM_PROF_VISIBLE_ON', "이 그룹(들)의 프로필에 필드 표시");
define('_PROFILE_AM_PROF_VISIBLE_FOR', '이 그룹(들)을 위한 프로필에 필드 표시');
define('_PROFILE_AM_PROF_VISIBLE', '가시성');
define('_PROFILE_AM_PROF_EDITABLE', '프로필로부터 편집가능한 필드');
define('_PROFILE_AM_PROF_REGISTER', '회원등록 폼에 표시');
define('_PROFILE_AM_PROF_SEARCH', '이 그룹(들)에 의한 검색허용');
define('_PROFILE_AM_PROF_ACCESS', '이 그룹에서 프로필 접근 가능');
define('_PROFILE_AM_PROF_ACCESS_DESC', '<ul>' . "<li>Admin groups: If a user belongs to admin groups, the current user has access if and only if one of the current user's groups is allowed to access admin group; else</li>" . "<li>Non basic groups: If a user belongs to one or more non-basic groups (NOT admin, user, anonymous), the current user has access if and only if one of the current user's groups is allowed to access any of the non basic groups; else</li>" . '<li>User group: If a user belongs to User group only, the current user has access if and only if one of their groups is allowed to access User group</li>' . '</ul>');
define('_PROFILE_AM_FIELDVISIBLE', '필드 ');
define('_PROFILE_AM_FIELDVISIBLEFOR', ' 에 대해 표시됩니다 ');
define('_PROFILE_AM_FIELDVISIBLEON', ' 의 프로필 보기 ');
define('_PROFILE_AM_FIELDVISIBLETOALL', '- 모든 사람');
define('_PROFILE_AM_FIELDNOTVISIBLE', '표시되지 않음');
define('_PROFILE_AM_CHECKBOX', '체크박스');
define('_PROFILE_AM_GROUP', '그룹선택');
define('_PROFILE_AM_GROUPMULTI', '그룹 복수선택');
define('_PROFILE_AM_LANGUAGE', '언어선택');
define('_PROFILE_AM_RADIO', '라디오 버튼');
define('_PROFILE_AM_SELECT', '선택');
define('_PROFILE_AM_SELECTMULTI', '복수선택');
define('_PROFILE_AM_TEXTAREA', 'Text Area(글 영역)');
define('_PROFILE_AM_DHTMLTEXTAREA', 'DHTML Text Area(DHTML글 영역)');
define('_PROFILE_AM_TEXTBOX', 'Text Field(글 줄)');
define('_PROFILE_AM_TIMEZONE', '시간대');
define('_PROFILE_AM_YESNO', '라디오버튼 예/아니요');
define('_PROFILE_AM_DATE', '날짜');
define('_PROFILE_AM_AUTOTEXT', '자동 텍스트');
define('_PROFILE_AM_DATETIME', '날짜와 시간(Date and Time)');
define('_PROFILE_AM_LONGDATE', '긴 날짜');
define('_PROFILE_AM_ADDOPTION', '옵션 추가');
define('_PROFILE_AM_REMOVEOPTIONS', '옵션 제거');
define('_PROFILE_AM_KEY', 'Ű');
define('_PROFILE_AM_VALUE', '값');
// User management
define('_PROFILE_AM_EDITUSER', '등록회원 편집');
define('_PROFILE_AM_SELECTUSER', '등록회원 선택');
define('_PROFILE_AM_ADDUSER', '신규 계정 작성');
define('_PROFILE_AM_THEME', '테마');
define('_PROFILE_AM_RANK', '등급');
define('_PROFILE_AM_USERDONEXIT', "조건에 맞는 등록회원은 존재하지 않습니다!");
define('_PROFILE_MA_USERLEVEL', '등록회원 레벨');
define('_PROFILE_MA_ACTIVE', '활성화');
define('_PROFILE_MA_INACTIVE', '비활성화');
define('_PROFILE_AM_USERCREATED', '회원 계정이 생성되어졌습니다.');
define('_PROFILE_AM_CANNOTDELETESELF', '자기 계정의 삭제는 허용되지 않습니다. - 자기 계정삭제를 원하시면 회원정보페이지를 이용하세요!');
define('_PROFILE_AM_CANNOTDELETEADMIN', '관리자 계정의 삭제는 허용되지 않습니다.');
define('_PROFILE_AM_NOSELECTION', '사용자가 선택되지 않았습니다');
define('_PROFILE_AM_USER_ACTIVATED', '사용자가 활성화되었습니다.');
define('_PROFILE_AM_USER_DEACTIVATED', '사용자가 비활성화되었습니다.');
define('_PROFILE_AM_USER_NOT_ACTIVATED', '에러: 사용자가 활성화처리되지 않았습니다.');
define('_PROFILE_AM_USER_NOT_DEACTIVATED', '에러: 사용자가 비활성화처리되지 않았습니다.');
define('_PROFILE_AM_STEPNAME', '단계명');
define('_PROFILE_AM_STEPORDER', '단계 순서');
define('_PROFILE_AM_STEPSAVE', '단계 완료후 저장');
define('_PROFILE_AM_STEPINTRO', '단계 설명');
//1.62
define('_PROFILE_AM_ACTION', '작업');
//1.63
define('_PROFILE_AM_REQUIRED_TOGGLE', '필수 필드 전환');
define('_PROFILE_AM_REQUIRED_TOGGLE_SUCCESS', '필수 필드 변경 성공 ');
define('_PROFILE_AM_REQUIRED_TOGGLE_FAILED', '필수 필드 변경 실패');
define('_PROFILE_AM_SAVESTEP_TOGGLE', '저장 전환');
define('_PROFILE_AM_SAVESTEP_TOGGLE_SUCCESS', '단계 후 저장 변경 성공');
define('_PROFILE_AM_SAVESTEP_TOGGLE_FAILED', "'단계 후 저장' 변경 실패");
//XOOPS 2.5.9
define('_PROFILE_AM_CANNOTDEACTIVATEWEBMASTERS', 'Webmaster 계정은 비활성화할 수 없습니다');
//XOOPS 2.5.11
define('_PROFILE_AM_EDIT_OPTION_STRINGS', '옵션 문자열 편집');
