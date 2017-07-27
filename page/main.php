<!doctype html>

<!-- MAIN.PHP -->

<html>

	<head>
		<meta charset="utf-8">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href=".././frame/css/common.css">

		<title>실시간 검색어 순위</title>

		<style>
			@import url(//fonts.googleapis.com/earlyaccess/hanna.css);
			h1 { font-family: 'Hanna', cursive; }
		</style>

	</head>

	<body style="background-color:#000000">

	<form>

		<div class="form-group main-form">

			<!-- WARNING -->
			<div class="alert alert-info" role="alert">
				<strong>Contact Us!</strong>  freckie@frec.kr
			</div>

			<!-- TITLE LABEL -->
			<div class="page-header">
				<center><h1>실시간 검색어 순위</h1></center>
			</div>

			<!-- TABLE -->
			<table class="table table-striped">

				<thead>
				<tr>
					<th>순위</th>
					<th>내용</th>
				</tr>

				<tbody>

				<!-- MAKE ROW -->
				<?php include("../api/main_search.php"); ?>

				</tbody>

			</table> <!-- table end -->

		</div>
	</form>

	</body>
</html>