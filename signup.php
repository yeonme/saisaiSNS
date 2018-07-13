<h1>회원가입 테스트...</h1>
<form action="signup.php" method="POST">
<input type="submit" value="누르셈" name="dbcon"/>
</form>
<p>결과<span id="insert_result"></span></p>
<?php
	// require -> 파일 로드 중 오류 발생 시 fatal error 발생시키고 멈춤
	// include -> 파일 로드 중 오류 발생 시 warning 띄우고 속행
    // __DIR__ -> 현재 디렉토리를 불러옴
	require 'inc/cls_db.php';	// 경로는 php가 실행되는 경로 기준으로 상대 경로를 써야한다. 현재 Php 기준 상대위치가 아님에 유의

	if($_SERVER['dbcon'] == "POST" and isset($_POST['dbcon']))
    {
        $db_call = SaisaiDB::getInstance();

		echo $db_call->hello();
    }

?>