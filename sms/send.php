<?php


// Usage

require __DIR__ . '/vendor/autoload.php';

use Swagger\Client\ShoutoutClient;

$apiKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiJmNDg3OGM2MC01ZTYzLTExZWMtOWE5Yy0xYjVjNGRjYTA4ZTciLCJzdWIiOiJTSE9VVE9VVF9BUElfVVNFUiIsImlhdCI6MTYzOTY1NDM5MywiZXhwIjoxOTU1MTg3MTkzLCJzY29wZXMiOnsiYWN0aXZpdGllcyI6WyJyZWFkIiwid3JpdGUiXSwibWVzc2FnZXMiOlsicmVhZCIsIndyaXRlIl0sImNvbnRhY3RzIjpbInJlYWQiLCJ3cml0ZSJdfSwic29fdXNlcl9pZCI6IjYzMjI4Iiwic29fdXNlcl9yb2xlIjoidXNlciIsInNvX3Byb2ZpbGUiOiJhbGwiLCJzb191c2VyX25hbWUiOiIiLCJzb19hcGlrZXkiOiJub25lIn0.t0gLwdgDvkXpMQUsuGMK9qhBZBwT3yn6qg9NbkCxE7M';

$client = new ShoutoutClient($apiKey,true,false);//(apikey,debug mode,ssl)



$message = array(
 'source' => 'ShoutDEMO',
  'destinations' => [$number],
 'content' => array(
  'sms' => $msg
 ),
 'transports' => ['SMS']
);

try {
 $result = $client->sendMessage($message);
 print_r($result);
} catch (Exception $e) {
 echo 'Exception when sending message: ', $e->getMessage(), PHP_EOL;
}

?>