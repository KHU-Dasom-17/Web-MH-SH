<!doctype html>

<!-- ADMIN.PHP -->

<html lang="ko">

	<head>

		<meta charset="utf-8">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href=".././frame/css/common.css">

		<style>
			@import url(//fonts.googleapis.com/earlyaccess/hanna.css);
			h1 { font-family: 'Hanna', cursive; }
		</style>

		<title>Admin Page</title>

	</head>

	<body style="background-color:#000000">

	<form>

		<div class="form-group main-form">

			<!-- TITLE LABEL -->
			<div class="page-header">
				<center><h1>Admin Page</h1></center>
			</div>

			<!-- MEMBER TABLE -->
			<table class="table table-striped">

				<thead>
				<tr>
					<th>#</th>
					<th>ID</th>
					<th>이름</th>
					<th>학번</th>
					<th>전화번호</th>
					<th>이메일</th>
					<th>승인</th>
				</tr>

				<tbody>

				<!-- MAKE ROW -->
				<?php include("../api/admin_db.php"); ?>

				</tbody>

			</table> <!-- table end -->

		</div>

	</form>

	</body>

</html>