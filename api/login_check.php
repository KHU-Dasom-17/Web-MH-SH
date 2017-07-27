<!-- LOGIN_CHECK.PHP -->

<?php

	// ID, PW 가져오기 
	$id = $_POST['id-text'];
	$pw = $_POST['pw-text'];

	// DB 연결
	include("../db/connect.php"); 

	// ID 검색
	$sql = "select * from table1 where id='" . $id . "';";

	// PW 가져오기
	$getcol = mysqli_query($con, $sql);
	$getarray = mysqli_fetch_row($getcol);
	$getpw = $getarray[1]; //PW
	$isAdmin = $getarray[6]; //isAdmin
	$isAccept = $getarray[7]; //isAccept


	// 로그인 체크
	if($getpw == $pw)
	{
		// 승인 체크
		if($isAccept == 0)
		{
			// 오류 메시지
			$msg = "승인 받지 못한 계정입니다. 관리자에게 문의하십시오.";
			echo "<script>alert(\"" . $msg . "\");</script>";
			// 링크 이동
			echo "<script>document.location.href='../index.php';</script>";
		}

		// Admin 체크
		if($isAdmin == 1)
		{
			// 환영 메시지
			$msg = "관리자 로그인하였습니다.";
			echo "<script>alert(\"" . $msg."\");</script>";
			// 링크 이동
			echo "<script>document.location.href='../page/admin.php';</script>";
		}

		// 환영 메시지
		$msg = $id . "님, 환영합니다.";
		echo "<script>alert(\"" . $msg . "\");</script>";
		// 링크 이동
		echo "<script>document.location.href='../page/main.php';</script>";
	}
	else
	{
		// 오류 메시지
		echo "<script>alert(\"ID 혹은 PW가 잘못되었습니다.\")</script>";
		// 링크 이동
		echo "<script>document.location.href='../index.php';</script>";
	}
?>