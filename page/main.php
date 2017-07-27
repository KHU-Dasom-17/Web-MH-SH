<!doctype html>

<!-- MAIN.PHP -->

<html>

	<head>
		<meta charset="utf-8">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href=".././frame/css/common.css">

		<title>메이플스토리 메소생성기</title>

		<style>
			@import url(//fonts.googleapis.com/earlyaccess/hanna.css);
			h1 { font-family: 'Hanna', cursive; }
		</style>

		<script>
			function genMeso()
			{
				alert("그걸 낚이냐 급식아..");
			}
		</script>

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
				<center><h1>메이플스토리 메소생성기</h1></center>
			</div>

			<!-- GENERATE BUTTON -->
			<div>
				<center><button type="button" class="btn btn-primary" id="gen-button" onclick='genMeso()'>메소 생성</button></center>
			</div>
		</div>
	</form>

	</body>
</html>