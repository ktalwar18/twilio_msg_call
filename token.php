<?php
header('Content-Type: application/json');
include "vendor/autoload.php";
use Twilio\Jwt\ClientToken;
$identity = 'joey';
// put your Twilio API credentials here
$accountSid = 'ACc5b134d9147d4529b051ba58dc20578d';
$authToken  = '6a27adafdb67415a68572ac4674d2ba3';
$appSid = 'APa5137ae0ce1de7c931be963014687bc9';
$capability = new ClientToken($accountSid, $authToken);
$capability->allowClientOutgoing($appSid);
$capability->allowClientIncoming($appSid);
// $capability->allowClientIncoming($identity);
$token = $capability->generateToken();
$response = ['token' => $token, 'identity' => $identity];
echo json_encode($response);

?>