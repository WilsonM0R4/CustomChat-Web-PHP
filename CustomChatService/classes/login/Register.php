<?php

	include_once './classes/data/Query.php';

	class Register {

		function __construct(){
			
		}

		function executeRegister($username, $email, $pwd){
			
			$state = 'available';
			$availability = 'online';
			$profileImagePath = 'none';

			$query;
			$response;

			if($username && $email && $pwd){
				$query = new Query();

				$response = $query->executeQuery("insert into User values('".$username."',
					'".$email."',
					'".$pwd."',
					'".$state."',
					'".$availability."',
					'".$profileImagePath."',
					'');");

				if(!$response){
					$response = 'success';
				}

			}



			return $response;

		}

	}

?>
