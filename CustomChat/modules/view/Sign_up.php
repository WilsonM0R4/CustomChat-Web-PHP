<!doctype html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="../style/index.css"/>
		<title>Sign up</title>
	</head>
	<body>

	<div id="login_box">

		<form name="sign_in_form" action="../login/Register.php" method="post">

		<h3> Pick an account, enjoy a new experience </h3>

		<div id="login_text_cont">
			<input type="text" class="reg_text_box" name="username_field" placeholder="type your username" required=""/>
			<br>
			<input type="text" class="reg_text_box" name="email_field" placeholder="type your email" required=""/>
			<br>
			<input type="password" class="reg_text_box" name="password_field" placeholder="type your password" required=""/>
			<br>
			<input type="password" class="reg_text_box" name="verify_pass_field" placeholder="type your password again" required=""/>
		</div>
			<br>

		<div id="reg_button_container">
			<input type="submit" class="button_class" id="reg_button" name="reg_button" value="Sign in!"/>
			<input type="submit" class="button_class" id="back_button" name="back_button" value="back to login"/>
		</form>

	</div>

	</body>
</html>