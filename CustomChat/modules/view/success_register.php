<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="../style/index.css"/>
		<meta charset="UTF-8"/>
		<title>Success</title>
	</head>
	<body>

<?php 
	
	if(isset($_POST['goto_login_button'])){		
		header('location: /CustomChat/CustomChat/index.php');
		die();
	}
	
?>


		<div id="login_box">

			<form action="" method="POST">
				<div id="login_text_cont">				
					<h3> Success! <br> now you can start using CustomChat! </h3>
				</div>
				<br>
				<input type="submit" class="button_class" id="sign_in_button" name="goto_login_button" value="go to login"/>

			</form>
		</div>

	</body>
</html>