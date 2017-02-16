<?php

	include_once './classes/login/Serverlogin.php';
	include_once './classes/login/Register.php';
	include_once 'TestService.php';

	class Initializer {

		function __construct(){
			//empty constructor					
		}

		function testMessage($param){
			$test = new TestService();
			$response = $test->testMessage($param);
			return $response;
		}

		function executeLogin($usr, $pwd){
			$login = new ServerLogin();
			$response = $login->executeLogin($usr, $pwd);
			return $response;
		}

		function executeRegister($usr, $email, $pwd){
			$reg = new Register();
			$response = $reg -> executeRegister($usr, $email, $pwd);
			return $response;
		}
	}
	

?>