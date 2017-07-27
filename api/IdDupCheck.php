<?php
	
	// ID 가져오기
	$userID=$_POST['userID'];
	$PW=$_POST['PW'];
	$NAME=$_POST['NAME'];
	$STN=$_POST['STN'];
	$PN=$_POST['PN'];
	$email=$_POST['e-mail'];
	
	// DB 연결
	include("../db/connect.php");

	// DB에서 ID 받아와 체크하기
	$sql = "select * from table1 where id='$userID';";
	$result=mysqli_query($con, $sql);
	$count =mysqli_num_rows($result);

	if($count==0)
	{
		$msg="사용 가능";
		echo "<script>alert('$msg');</script>";
		$sql="INSERT INTO table1 VALUES ('$userID', '$PW', '$NAME', '$STN', '$PN', '$email', 0, 0);";
		mysqli_query($con, $sql);
		echo "<script>alert('$userID 가입 완료.');</script>";
		mysqli_close($con);
		echo "<script>document.location.href='../index.php';</script>";
	}
	else
	{
		$msg="중복된 아이디입니다!!!\n다시 입력하세요!!!";
		echo "<script>alert('$msg');</script>";
		echo "<script>document.location.href='.././page/signUP.php';</script>";
	}
?>