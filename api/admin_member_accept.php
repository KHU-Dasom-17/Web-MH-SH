<!-- ADMIN_MEMBER_ACCEPT.PHP -->

<?php
	include("../db/connect.php");

	// ID 가져오기 
	$id = $_GET['id'];

	$sql = "UPDATE table1 SET isAccept = 1 WHERE id = '$id'";
	mysqli_query($con, $sql);
	echo "<script>alert(\"$id 승인 완료.\");</script>";

	// 링크 이동
	echo "<script>document.location.href='../page/admin.php';</script>";
?>