<!DOCTYPE html>
<html>

	<head>

		<meta charset="utf-8">

		<title>SIGNUP</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href=".././frame/css/common.css">

		<style>
			@import url(//fonts.googleapis.com/earlyaccess/hanna.css);
			h1 { font-family: 'Hanna', cursive; }
		</style>

		<script type="text/javascript">
			function checkID()
			{
				var input_id = document.getElementById("userID").value;
				document.signUp.id_dup.bool="false";
				var bool_c=document.signUp.id_dup.bool;
				var du=document.signUp;

				if(input_id == '')
				{
					alert('ID를 입력하십시오.');
					document.getElementById("userID").focus();
				}
				else
				{
					var popup_url = "../api/id_dup_check.php?id=" + input_id + "&bool_c="+bool_c;
					var popup_opt = "width=500, height=500, resizable=no, scrollbars=no, status=no;";
					window.open(popup_url, popup_opt);

					if(du.id_dup.bool=="true"&&du.pw_check.bool=="true")
					{
						du.sub.removeAttribute("disabled");
					}
				}
			}
			function checkPW(obj)
			{
				var du=document.signUp;
				var pw=du.PW.value;
				var pwCH=du.PWCheck.value;
				obj.bool="false";

				if(pw=="")
				{
					alert("비밀번호를 입력하세요!!!");
					du.PW.focus();
					return false;
				}

				if(pw==pwCH)
				{
					alert("비밀번호 확인 성공!!!!!");
					obj.bool="true";
					if(du.id_dup.bool=="true")
					{
						du.sub.removeAttribute("disabled");
					}
				}
				else
				{
					alert("비밀번호 확인 실패!!!!!\n다시 입력하세요");
					du.PWCheck.value="";
					du.PWCheck.focus();
				}
				
			}
		</script>

	</head>

	<body style="background-color:#000000">
	<form id="sign-up-form" name="signUp" action="../api/sign_up_to_db.php" method="POST">

		<div class="form-group main-form">

			<div class="page-header">
				<center><h1>SIGNUP</h1></center>
			</div>

			<div class="input-group set-center">
				<input type="text" name="userID" class="form-control" placeholder="ID" id="userID" required>
				<span class="input-group-btn">
					<button type="button" name="id_dup" bool="false" class="btn btn-default" onclick="checkID('sign-up-form')">중복 확인</button>
				</span>
			</div>

			<div class="input-group set-center">
				<input type="password" class="form-control" name="PW" placeholder="비밀번호는 10~20자리 영문자 및 숫자로 입력하세요." required>
			</div>

			<div class="input-group set-center">
				<input type="password" class="form-control" name="PWCheck" placeholder="비밀번호를 재입력하세요." required>
				<span class="input-group-btn">
 					<button type="button" name="pw_check" id="dup_button" bool="false" class="btn btn-default" onclick="checkPW(this)">비밀번호 확인</button>
 				</span>
 			</div>

			<div class="input-group set-center">
				<input type="text" class="form-control" name="NAME" placeholder="이름" required>
			</div>

			<div class="input-group set-center">
				<input type="text" class="form-control" name="STN" placeholder="학번" required>
			</div>

			<div class="input-group set-center">
				<input type="text" class="form-control" name="PN" placeholder="전화번호" required>
			</div>

			<div class="input-group set-center">
				<input type="text" class="form-control" name="e-mail" placeholder="e-mail" required>
			</div>

			<div class="set-center-div">
				<input type="submit" class="btn btn-success" name="sub" id="check-button" value="Sign UP" disabled="disabled">
			</div>
		</div>
		
	</form>
	</body>
</html>