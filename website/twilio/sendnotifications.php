<?php
	/* Send an SMS using Twilio. You can run this file 3 different ways:
	 *
	 * - Save it as sendnotifications.php and at the command line, run 
	 *        php sendnotifications.php
	 *
	 * - Upload it to a web host and load mywebhost.com/sendnotifications.php 
	 *   in a web browser.
	 * - Download a local server like WAMP, MAMP or XAMPP. Point the web root 
	 *   directory to the folder containing this file, and load 
	 *   localhost:8888/sendnotifications.php in a web browser.
	 */
	// Include the PHP Twilio library. You need to download the library from 
	// twilio.com/docs/libraries, and move it into the folder containing this 
	// file.
	require "Services/Twilio.php";
	
	// Set our AccountSid and AuthToken from twilio.com/user/account
	$AccountSid = "ACd2925e44ceaeaee2b8cf50dda7e720a8";
	$AuthToken = "9baaaf5b7a961d5fb64bef5836188f6b";

	// Instantiate a new Twilio Rest Client
	$client = new Services_Twilio($AccountSid, $AuthToken);

	/* Your Twilio Number or Outgoing Caller ID */
	$from = '(415) 749-9139';

	// make an associative array of server admins. Feel free to change/add your 
	// own phone number and name here.
	$phonenumber= $_POST["phonenumber"];	
	$people = array(
		"$phonenumber" => "recipient",

	);

	$quoterecieved= $_POST["quoterecieved"];
		
	// Iterate over all admins in the $people array. $to is the phone number, 
	// $name is the user's name
	foreach ($people as $to => $name){ 
	
		

		// Send a new outgoing SMS */
		$body = "$quoterecieved";
		$client->account->sms_messages->create($from, $to, $body);
		echo "Sent message to $name ";
		echo "<br> Redirecting back in 5 seconds";
		echo "<meta http-equiv=refresh content=5;URL=http://test.biteair.com>";
	

	}	

	
	unset($people);
?>
