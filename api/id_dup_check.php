<!-- ID_DUP_CHECK.PHP -->

<?php
	
	$get_id = $_GET['id'];

	include("../db/connect.php");

	$sql = "SELECT id FROM table1 WHERE id='$get_id'";
	$arr = mysqli_query($con, $sql);
	$count = mysqli_num_rows($arr);

	if($count == 0)
	{
		echo "<script>alert('$get_id 는 사용 가능한 ID 입니다!')</script>";
		
		echo "<script>window.close();</script>";
	}
	else
	{
		echo "<script>alert('이미 존재하는 ID 입니다!')</script>";
		echo "<script>window.close();</script>";
	}
?>