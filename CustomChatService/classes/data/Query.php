<?php

	include 'Connect.php';

	class Query {

		//private $connection;
		var $queryResult;

		function __construct(){
			
		}

		function executeQuery($sql){

			echo $sql;

			$result = "";
			
			$conn = Connect::sharedInstance();
			$connection = $conn->getConnection();

			if($connection){
				$this->queryResult = mysqli_query($connection, $sql);
				//echo $queryResult;
			}else{
				echo 'bad connection<br>';
			}

			
			if(!mysqli_errno($connection) && $this->queryResult){
				$result = mysqli_fetch_array($this->queryResult);
			}else{

				echo 'query failed<br>'.mysqli_error($connection);
				$result = mysqli_error($connection);
			}

			echo 'Query: '.$result;

			return $result;
		}

	}

	/*$query = new Query();
	$query->executeQuery("insert into User values('Mario Martinez',
					'mario_man@test.com',
					'123456',
					'available',
					'online',
					'none',
					'');");*/

?>
