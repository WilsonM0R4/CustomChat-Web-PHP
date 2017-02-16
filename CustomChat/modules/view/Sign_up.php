<!doctype html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Sign up</title>
	</head>
	<body>

		<form name="sign_in_form" action="../login/Register.php" method="post">
			<input type="text" name="username_field" placeholder="type your username" required=""/>
			<br>
			<input type="text" name="email_field" placeholder="type your email" required=""/>
			<br>
			<input type="password" name="password_field" placeholder="type your password"/>
			<br>
			<input type="password" name="verify_pass_field" placeholder="type your password again"/>
			<br>
			<input type="submit" name="reg_button" value="Sign in!"/>
		</form>

	</body>
</html>