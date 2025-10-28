

<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');
//$usern = $_POST['uname'];
//$passw = $_POST['pword'];

//sendRabbitWeb("login",$usern,$passw);
//sendRabbitWeb('login','joe','password');
function sendRabbitWeb($type,$username,$password){

$client = new rabbitMQClient("webserverRequest.ini","testServer");
/*
if (isset($argv[1]) )
{
  $msg = $argv[1];
}
else
{
  $msg = "test message";
}
 */
$msg = "test message";
$request = array();
$request['type'] = 'testType';
$request['username'] = 'testuser';
$request['password'] = 'testPassword';
$request['message'] = 'msg';
$response = $client->send_request($request);
//$response = $client->publish($request);

echo "client received response: ".PHP_EOL;
print_r($response);

return $response;
echo "\n\n";

//echo $argv[0]." END".PHP_EOL;
}


?>
