<?php
// php 실행 중 모든 에러를 화면에 표시하라는 코드
error_reporting(E_ALL);
ini_set("display_errors", 1);

define('URL', 'https://msg.yeon.me/');

/** TODO 이하 DB 설정 추가 */
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'saisai');
define('DB_USER', 'hamster');
define('DB_PASS', 'hamster');
