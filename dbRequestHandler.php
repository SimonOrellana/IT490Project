#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

function doLogin($username,$password)
{
    // lookup username in databas
    // check password
	include('verify.php');
	echo "login test";
	return true;
    //return false if not valid
}
function doRegister($username,$password){
	//tell db to create user with username and password
	return true;
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
    case "register":
	  return doRegister($request['username'],$request['password']);  
    case "login": 
      return doLogin($request['username'],$request['password']);
    case "validate_session":
      return doValidate($request['sessionId']);
  }
  return array("returnCode" => '0', 'message'=>"Server received request and processed");
}

$server = new rabbitMQServer("dbRequest.ini","testServer");

echo "dbResquestHandler BEGIN".PHP_EOL;
$server->process_requests('requestProcessor');
echo "dbRequestHandler  END".PHP_EOL;
exit();
?>

