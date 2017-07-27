<?php
	
	// ID 가져오기
	$userID=$_POST['userID'];
	$PW=$_POST['PW'];
	$NAME=$_POST['NAME'];
	$STN=$_POST['STN'];
	$PN=$_POST['PN'];
	$email=$_POST['e-mail'];

	$sql="INSERT INTO table1 VALUES ('$userID', '$PW', '$NAME', '$STN', '$PN', '$email', 0, 0);";
	mysqli_query($con, $sql);
	echo "<script>alert('가입 완료.\n ID : $userID');</script>";
	mysqli_close($con);
	echo "<script>document.location.href='../index.php';</script>";
?>