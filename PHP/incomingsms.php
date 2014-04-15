<?php
#################################
# Incoming SMS Script			#
#	By Robert Wigggins			#
#								#
#################################
//The Mobile Number It was From i.e 07
$from = $_REQUEST['from'];
// The Message This will have your keyword in
$message2 = $_REQUEST['message'];
// Your SMSPI Keyword 
$keyword = "Enter Your SMSPI Keyword";
// Strip the Keyword from the message
$message = str_replace($keyword, "", $message2);


// Below is just an example of the incoming sms to file.

//Write Incoming SMS to file
$file = 'sms.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= "".$from."\r\n";
$current .= "".$message."\r\n";
// Write the contents back to the file
file_put_contents($file, $current);




?>

