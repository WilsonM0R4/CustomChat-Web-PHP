<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="../style/index.css"/>
		<title>Failure</title>
	</head>

<?php
	
	session_start();

	$message = '';
	$value = $_SESSION['register_message'];	

	if($value){
		//echo 'value is '.$value;
		$message = $value;
		$_SESSION['register_message'] = null;
	}else if(isset($_POST['back_button'])){

		header('location: Sign_up.php');
		die();
	}

	/*if(){

	}*/

?>

	<body>
		<div id="login_box">
		<form action="" method="post">
				<h3> Cannot register </h3>
				<h3>  <?php echo $message; ?>  </h3>
			<input type="submit" id="sign_in_button" class="button_class" name="back_button" value="retry"/>
		</form>
	</div>
	</body>
</html>


