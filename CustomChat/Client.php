<?php

	/*ini_set("soap.wsdl_cache_enabled", "0");

	try{
		$soapClient = new SoapClient('http://localhost:8080/CustomChatService/CustomChat.wsdl');
	}catch(SoapFault $fault){
		echo $soapClient->__getLastResponse().'<br>';
		echo 'fault: '.$fault;
	}*/
	

	
	//$soapClient->testMessage('0');
	//$result = $soapClient -> __soapCall('testMessage', array('messageInput'=>'0'));

	//echo $result;


	//$soapClient ->__getLastRequest();	

	include_once 'modules/server/Linker.php';

	$newLink = new Linker();	
	echo $newLink -> makeRequest('testMessage', array('messageInput'=>'0'), 0);


?>