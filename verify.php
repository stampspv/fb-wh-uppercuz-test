<?php

// require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

// $fb = new \Facebook\Facebook([
//   'app_id' => '{app-id}',
//   'app_secret' => '{app-secret}',
//   'default_graph_version' => 'v2.10',
//   //'default_access_token' => '{access-token}', // optional
// ]);

echo "version 1.1";

$challenge = $_REQUEST['hub_challenge'];
$verify_token = $_REQUEST['hub_verify_token'];

if ($verify_token === 'stamplnwza555') {
  echo $challenge;
}

$input = json_decode(file_get_contents('php://input'), true);
error_log(print_r($input, true));



 ?>