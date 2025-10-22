#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');
require('dbRequestClient.php');
function doLogin($username,$password)
{
    // lookup username in databas
	// check password
    echo("running dbRequest");
    return sendRabbitDb('login',$username,$password);
    
    //return false if not valid
}
function doRegister($username,$password){
return sendRabbitDb('register',$username,$password);

}

function requestProcessor($request)
{
  
  
  echo "received request".PHP_EOL;
  var_dump($request);
  if(!isset($request['type']))
  {
    return "ERROR: unsupported message type";
  }
  switch ($request['type'])
  {
  case "login":	  
      return doLogin($request['username'],$request['password']);
    case "validate_session":
	    return doValidate($request['sessionId']);
    case "register":
      return doRegister($request['username'],$request['password']);
  }
  //return array("returnCode" => '0', 'message'=>"Server received request and processed");
}

$server = new rabbitMQServer("webserverRequest.ini","testServer");

echo "wsResquestHandler BEGIN".PHP_EOL;
$server->process_requests('requestProcessor');
echo "dbRequestHandler  END".PHP_EOL;
exit();
?>

