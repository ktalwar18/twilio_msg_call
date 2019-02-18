<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;


$account_sid = 'ACc5b134d9147d4529b051ba58dc20578d';
$auth_token = '6a27adafdb67415a68572ac4674d2ba3';

    

if(isset($_POST['sbmt'])){
	$phone=$_POST['phone'];

    $client = new Client($account_sid, $auth_token);
    $twilio_number = "+14055518180";
    $to_number = '+91'.$phone;
    $client->account->calls->create(  
    $to_number,
    $twilio_number,
    array(
        "url" => "http://demo.twilio.com/docs/voice.xml"
    )
);
}
?>

<html>
<head>
	<title>Make call</title>
</head>
<body>
	<form action="" method="post">
		Enter Recipient's Number <input type="number" name="phone"><br><br>
		<input type="submit" name="sbmt" value="Call"><br><br>
	</form>
</body>
</html>