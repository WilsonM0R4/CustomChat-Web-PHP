<?php

	class Connect {

		private static $instance;
		var $connect;


		private function __construct(){
			$DBName = 'CustomChatDB';
			$host = 'localhost';
			$user = 'root';
			$password = '';

			$conn = mysqli_connect($host,$user,$password, $DBName);

			if($conn){
				if(!mysqli_errno($conn)){
					$this->connect = $conn;
					echo '<br>successful connection<br>';
				}else{
					echo 'Connection error: '.mysqli_error($conn).'<br>';
				}
			}else{
				echo 'cannot connect<br>';
			}

			/*if($this->connection){
				echo 'verified, successful connection<br>';
			}*/
		}

		/***** SINGLETON FUNCTION *****/
		public static function sharedInstance(){
			if(!isset(self::$instance)){
				$theClass = __CLASS__;
				self::$instance = new $theClass;
			}

			return self::$instance;
		}

		function getConnection(){
			return $this->connect;
		}
	}

	//$connection = new Connection();
	//$connection->getConnection();
	
?>