<?php

	//include_once 'TestService.php';
	include_once './classes/initializer/Initializer.php';
	//include_once './classes/register/Register.php';

	class Service {

		var $url = "";
		var $server;

		function __construct(){
			
			if(!extension_loaded("soap")){
				dl("php_soap.dll");
			}

			ini_set("soap.wsdl_cache_enabled","0"); 

			$this->url = "http://localhost:8080/CustomChat/CustomChatService/CustomChat.wsdl";
			$this->server = new SoapServer($this->url);

			$this->server->setClass('Initializer');
			//$this->server->setClass('Register');
			//$this->server->setClass('ServerLogin');	
			$this->server->handle();			
		}

		/*function startService(){
			$this->server = new SoapServer($this->url);
			$this->setClasses();
		}

		function setClasses(){
			$this->server->setClass('TestService');
			$this->server->handle();
		}*/



	}

	$service = new Service();
	//$service -> startService();
	//$test = new TestService();
	//$test->testMessage();

?>