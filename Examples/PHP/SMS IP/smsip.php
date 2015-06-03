<?php
// SMS your IP using SMSPI
// By Robert Wiggins

// Change the Port to either wlan0 or eth0 to suit your needs
$port = "eth0";
// Number you wish to text when you want this to send a SMS
$number = "077123456789";
// Your SMSPI.co.uk HASH
$hash = "Your Hash";
// Grab IP
$ip = shell_exec ("sudo /sbin/ifconfig ".$port." | grep 'inet addr:' | cut -d: -f2 | awk '{ print $1}'");
//Message
$message = "Your Raspberry Pi IP for port ".$port." is ".$ip."";


//set POST variables
$url = 'http://www.smspi.co.uk/api/';
$fields = array(
						'to' => $number,
						'message' => $message,
						'hash' =>  $hash
						
				);

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_USERAGENT,'SMSPI PHP IP');
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields);

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);

// uncomment the line below if your are not getting the SMS.
//echo $result;
echo "".$message." has been sent to ".$number."";

?>
