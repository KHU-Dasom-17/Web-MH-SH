<!doctype html>

<!-- LOGIN.PHP -->

<html lang="ko">
	
	<head>
		<meta charset="utf-8">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="./frame/css/common.css">

		<style>
			@import url(//fonts.googleapis.com/earlyaccess/hanna.css);
			h1 { font-family: 'Hanna', cursive; }
		</style>

		<title>LOGIN</title>

	</head>

	<body style="background-color:#000000">

	<form method="POST" action="./api/login_check.php">

		<div class="form-group main-form">

			<!-- WARNING -->
			<div class="alert alert-info" role="alert">
				<strong>Contact Us!</strong>  freckie@frec.kr
			</div>

			<!-- TITLE LABEL -->
			<div class="page-header">
				<center><h1>메이플스토리 메소생성기</h1></center>
			</div>

			<!-- ID TEXT -->
			<div class="input-group set-center">
				<input type="text" class="form-control" placeholder="ID" id="id-text" name="id-text">
			</div>

			<!-- PW TEXT -->
			<div class="input-group set-center">
				<input type="password" class="form-control" placeholder="PASSWORD" id="pw-text" name="pw-text">
			</div>

			<!-- LOGIN & JOIN BUTTON -->
			<div class="set-center-div">
				<button type="submit" class="btn btn-primary" id="login-button">로그인</button>
				<button type="button" class="btn btn-primary" id="join-button" onclick="location.href='./page/signUP.php'">회원가입</button>
			</div>
		</div>
	</form>

	</body>

</html>