<!DOCTYPE html>
<html>
<head>
	<title> CustomChat! </title>
	<link rel="stylesheet" href="style/index.css"/>
</head>

<body>
	<!--h3>press the button</h3>
	</br>
	<input type="submit" name="go_button" value ="test service" onclick="window.location='Client.php'"/>
	<br>
	<br-->

	<div id="login_box" >
		
		<h2>Welcome to CustonmChat!</h2>

		<form name="login_form" id="login_form" action="modules/login/LoginHandler.php" method="POST">

			<div class="login_text_cont">
				<input type="text" class="login_text_box" name="email_field" placeholder="email"/>
				<br>
				<input type="password" class="login_text_box" name="password_field" placeholder="password">
				<br>
			</div>
				
			<input type="submit" id="sign_in_button" class="button_class" name="login_button" value="login" /><!--onclick="window.location='modules/login/LoginHandler.php'"/-->			
			<br>
		
		</form>
		<form name="register" id="reg_form" action="modules/view/Sign_up.php" method="POST">	
			<div id="reg_text"> have you an account? </div>
			<input type="submit" id="sign_up_button" class="button_class" name="register_button" value="register"/>
		</form>

	</div>
	
</body>

</html>


<?php

	

?>