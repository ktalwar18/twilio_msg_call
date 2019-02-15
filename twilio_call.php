<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'ACc5b134d9147d4529b051ba58dc20578d';
$auth_token = '6a27adafdb67415a68572ac4674d2ba3';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

// A Twilio number you own with Voice capabilities
$twilio_number = "+14055518180";

// Where to make a voice call (your cell phone?)
$to_number = "+919888066581";

$client = new Client($account_sid, $auth_token);
$client->account->calls->create(  
    $to_number,
    $twilio_number,
    array(
        "url" => "http://demo.twilio.com/docs/voice.xml"
    )
);
