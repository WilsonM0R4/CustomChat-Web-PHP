<?php
	
	//echo 'i am login handler';

	include '../server/Linker.php';

	class LoginHandler {

		private $successURL = '../view/home/Home.php';

		function __construct(){

		}

		function signIn($user, $password){

			$linker = new Linker();
			$response = $linker->makeRequest('executeLogin',array('loginUsername'=>$user, 'loginPassword'=>$password), 0);			

			if($response == 'success'){
				header('location: '.$this->successURL);
			}else{
				//echo "<script> alert('cannot login: ".$response." '); </script>";
				//echo "<script> window.confirm('cannot login: ".$response." '); <script>";
				header('location: http://localhost:8080/CustomChat/CustomChat/modules/view/failed_login.php');
				//die();
			}

			//echo "<script> alert('response is: ".$response." '); </script>" ; 

			//echo $response;

			//echo 'user: '.$user.' password: '.$password;
		}

	}


	if(isset($_POST['login_button'])){

		$usr = $_POST['email_field'];
		$pwd = $_POST['password_field'];		

		$loginHandler = new LoginHandler();
		$loginHandler->signIn($usr, $pwd);

		//$response = 'success';


		
	}else{
		echo 'no data sended';
	}

?>