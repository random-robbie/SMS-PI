<?php

if (empty($_GET)) {
    echo "Please All Details In To the Form.";
}
$name = $_REQUEST['name'];
$number = $_REQUEST['number'];

// Number you wish to text when you want this to send a SMS
$number = "077777777";
// Your SMSPI.co.uk HASH
$hash = "YOURSMSPIHASH";
//Website URL
$webpage = "example.com"

//Message
$message = "Please call ".$name." Back On ".$number." Sent Via ".$webpage."";


//set POST variables
$url = 'http://www.smspi.co.uk/send/';
$fields = array(
						'to' => $number,
						'message' => $message,
						'hash' =>  $hash

				);

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_USERAGENT,'SMSPI CallBack');
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);

// uncomment the line below if your are not getting the SMS.
//echo $result;
echo "A Call Back Notification has been Sent.";
?>