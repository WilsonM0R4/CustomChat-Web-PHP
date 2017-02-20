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

			//echo 'register response: '.$response;

			if($response=='success'){
				header('location: ../view/success_register.php');
			}else{
				session_start();
				$_SESSION['register_message'] = $response;
				header('location: ../view/failed_register.php');
				die();
			}
		}

	}


	/*if(isset($_POST['back_button'])){
		header('location: ');
		die();
	}else*/ if(isset($_POST['reg_button'])){
		$user = $_POST['username_field'];
		$email = $_POST['email_field'];
		$pwd = $_POST['password_field'];
		$repwd = $_POST['verify_pass_field'];

		$register = new Register();

		if($pwd==$repwd){
			$register->register($user, $email, $pwd);
		}else{
			//echo 'passwords does not match';
			session_start();
			$_SESSION['register_message'] = 'passwords does not match';
			echo 'passed by here';
			header('location: ../view/failed_register.php');
			die();
		}

	}else {

		echo 'no data sended';

	}

	

?>