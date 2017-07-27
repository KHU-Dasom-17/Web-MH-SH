<!-- ADMIN_DB.PHP -->

<!-- page/admin.php 에게 DB의 데이터 전달 -->

<?php

	// DB 연결
	include("../db/connect.php");

	$sql = "SELECT * FROM table1";
	$result = mysqli_query($con, $sql);

	$count = 1;

	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			$get_id = $row["id"];
			//pw는 보안상 삭제.
			$get_name = $row["name"];
			$get_stunum = $row["stunum"];
			$get_phonum = $row["phonum"];
			$get_email = $row["email"];
			$get_isAdmin = $row["isAdmin"];
			$get_isAccept = $row["isAccept"];

			$echo_str = "<th scope=\"row\">" . $count . "</th>"
						. "<td>" . $get_id . "</td>"
						. "<td>" . $get_name . "</td>"
						. "<td>" . $get_stunum . "</td>"
						. "<td>" . $get_phonum . "</td>"
						. "<td>" . $get_email . "</td>";

			// 승인 여부 체크 후 버튼 생성
			if($get_isAccept == 1)
			{
				$btn_str = "<button type = \"button\" class=\"btn btn-xs btn-success accept-button\" disabled=\"disabled\">승인됨</button>";
				$echo_str = $echo_str . "<td>" . $btn_str . "</td>";
			}
			else
			{
				$btn_str1 = "<a button type = \"button\" class=\"btn btn-xs btn-success accept-button\" onclick=\"location.href='../api/admin_member_accept.php?id=$get_id'\">승인</button>";
				$btn_str2 = "<a button type = \"button\" class=\"btn btn-xs btn-warning accept-button\" onclick=\"location.href='../api/admin_member_deny.php?id=$get_id'\">보류</button>";
				$echo_str = $echo_str . "<td>" . $btn_str1 . " " . $btn_str2 . "</td>";
			}

			echo "<tr>$echo_str</tr>";
			$count++;
		}
	}
	else
	{
		echo "<script>alert(\"No DB Datas.\");</script>";
	}
?>