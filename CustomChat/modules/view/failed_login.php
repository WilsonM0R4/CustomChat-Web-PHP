<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../style/index.css"/>
	<title> Failure </title>
</head>
<body>

<?php
	if(isset($_POST['back_button'])){

		$completePath = $_SERVER['DOCUMENT_ROOT'];		
		//echo $completePath.'/CustomChat/CustomChat/index.php';
		header('location:/CustomChat/CustomChat/index.php');
		die();
	}
?>

	<div id="login_box">
		<form action="" method="post">
				<h3> Cannot login, review your data and try again </h3>
			<input type="submit" id="sign_in_button" class="button_class" name="back_button" value="back"/>
		</form>
	</div>

</body>
</html>