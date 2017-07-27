<!DOCTYPE html>

<!-- MAIN_SEARCH.PHP -->

<!-- PAGE/MAIN.PHP 에 정보 전달 -->

<?php

	// DB 연결
	include("../db/connect.php");

	$sql = "SELECT * FROM table2";
	$result = mysqli_query($con, $sql);

	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			$get_idx = $row["idx"];
			$get_content = $row["content"];

			$echo_str = "<th scope=\"row\">" . $get_idx . "</th>"
						. "<td>" . $get_content . "</td>";

			echo "<tr>$echo_str</tr>";
		}
	}
	else
	{
		echo "<script>alert(\"No DB Datas.\");</script>";
	}
?>