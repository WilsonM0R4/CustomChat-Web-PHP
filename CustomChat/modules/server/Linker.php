<?php

	class Linker {

		var $serverWSDL;
		var $server;

		function __construct(){
			ini_set("soap.wsdl_cache_enabled", "0");
			try{
				$this->serverWSDL = 'http://localhost:8080/CustomChatService/CustomChat.wsdl';
				$this->server = new SoapClient($this->serverWSDL);	
			}catch(SoapFault $fault){
				echo $soapClient->__getLastResponse().'<br>';
				echo 'fault: '.$fault;
			}
			
		}	

		function makeRequest($methodName, $params, $haveResponse){


			$response = 'response';

			try{



				if($haveResponse==0){
					$response = $this->server->__soapCall($methodName, $params);
				}else{	
					$this->server->__soapCall($methodName, $params);
				}	

			}catch(SoapFault $exception){

				echo "fault: ".$exception;
			}	
			
			return $response;
		}




	}

?>