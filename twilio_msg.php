

<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require_once __DIR__ . '/vendor/autoload.php'; 
 
use Twilio\Rest\Client; 
 
	$sid    = "ACc5b134d9147d4529b051ba58dc20578d"; 
	$token  = "6a27adafdb67415a68572ac4674d2ba3"; 
if(isset($_POST['sbmt'])){
	$twilio = new Client($sid, $token); 
	$phone=$_POST['phone'];
	$msg=$_POST['msg'];
	$message = $twilio->messages 
                  ->create('+91'.$phone, // to 
                           array( 
                               "from" => "+14055518180",       
                               "body" => $msg 
                           ) 
                  ); 
 
    print($message->sid);

}

?>


<html>
<head>
	<title>Send Messages</title>
</head>
<body>
	<form action="" method="post">
		Enter Recipient's Number <input type="number" name="phone"><br><br>
		Enter your message       <input type="text" name="msg"><br><br>
		<input type="submit" name="sbmt" value="Send Message"><br><br>
	</form>
</body>
</html>