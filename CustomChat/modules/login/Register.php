<?php

	include '../server/Linker.php';

	class Register {

		function __construct(){
			//empty constructor
		}

		function register($user, $email, $pwd){

			$regUsername = $user;
			$regEmail = $email;
			$regPassword = $pwd;


			$linker = new Linker();
			$response = $linker->makeRequest('executeRegister',
				array('registerUsername'=>$regUsername, 'registerEmail'=>$regEmail, 'registerPassword'=>$regPassword),
				0);

			echo 'register response: '.$response;
		}

	}



	if(isset($_POST['reg_button'])){
		$user = $_POST['username_field'];
		$email = $_POST['email_field'];
		$pwd = $_POST['password_field'];
		$repwd = $_POST['verify_pass_field'];

		$register = new Register();

		if($pwd==$repwd){
			$register->register($user, $email, $pwd);
		}else{
			echo 'passwords does not match';
		}

	}else{

		echo 'no data sended';

	}

	

?>