<?php
	
	include_once './classes/data/Query.php';

	class ServerLogin {

		//var $Service;

		function __construct(){
			//empty constructor		}			
			//$this->service = new Service();
		}

		function executeLogin($usr, $pwd){

			/*$email = 'wilson@test.com';
			$password = '123456';*/

			$returnValue = 'failure';

			$query = new Query();
			$result = $query->executeQuery("select userPassword from User where email = '".$usr."'");

			//echo $result['0'];

			if($result['0']==$pwd){
				$returnValue = 'success';		
			}else{
				$returnValue = 'failure';
			}

			return $returnValue;
		}

	}

	/*$login = new ServerLogin();
	$login->executeLogin('wilson@test.com','123456');*/

?>