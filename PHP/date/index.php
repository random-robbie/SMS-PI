<?php
if (empty($_REQUEST['message'])) {
    exit();
}
if (empty($_REQUEST['from'])) {
    exit();
}
// Post Values
$number = $_REQUEST['from'];
$messagein = $_REQUEST['message'];

$message = strtoupper($messagein);

//Incoming SMS keyword
$smskeyword = "DATE";

//SMS Pi Hash
$hash = "YOURSMSPIHASH";

//Function to send the SMS
function sms ($number,$message)
{
GLOBAL $hash;
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
curl_setopt($ch,CURLOPT_USERAGENT,'SMSPI PHP DATES');
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields);

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);

// uncomment the line below if your are not getting the SMS.
echo $result;
//echo "".$message." has been sent to ".$number."";
}

//remove keyword
$message2 = str_replace($smskeyword, '', $message);
// remove first char space
$newmessage = substr($message2, 1);

//split the names
$pieces = explode(" ", $newmessage);
$name1 = $pieces[0]; // Name 1
$name2 = $pieces[1]; // Name 2



//generate random %
$percent = rand(5,98);

if (($percent >= 3 && $percent <= 10)){ 
  $message2 = "".$name1." is ".$percent."% compatible with ".$name2.". ".$name2." is a gobshite and already cheated on you!";
  echo $message2;
  exit();
}

if (($percent >= 11 && $percent <= 20)){
$message2 = "".$name1." is ".$percent."% compatible with ".$name2." it's not great but it may work.... actually jib ".$name2." off they aint worth it!";
echo $message2;
sms ($number,$message2);
exit();
}
if (($percent >= 21 && $percent <= 30)){
$message2 = "".$name1." is ".$percent."% compatible with ".$name2." given time this could be great but ".$name2." will prob end up a gobshite ";
echo $message2;
sms ($number,$message2);
exit();
}
if (($percent >= 31 && $percent <= 40)){
$message2 = "".$name1." is ".$percent."% compatible with ".$name2.". There is work to be done but it will work out! aslong as ".$name2." obeys you!";
echo $message2;
sms ($number,$message2);
exit();
}
if (($percent >= 41 && $percent <= 50)){
$message2 = "".$name1." is ".$percent."% compatible with ".$name2.". A relationship is very well possible, if the two of you really want it to, and are prepared to make some sacrifices for it ";
echo $message2;
sms ($number,$message2);
exit();
}
if (($percent >= 51 && $percent <= 60)){
$message2 = "".$name1." is ".$percent."% compatible with ".$name2.". work hard and this will be something great!";
echo $message2;
sms ($number,$message2);
exit();
}
if (($percent >= 61 && $percent <= 70)){
$message2 = "".$name1." is ".$percent."% compatible with ".$name2.". Both of you are suited for each other enjoy your time together";
echo $message2;
sms ($number,$message2);
exit();
}
if (($percent >= 71 && $percent <= 80)){
$message2 = "".$name1." is ".$percent."% compatible with ".$name2.". You have a great chance of of happiness enjoy each other!";
echo $message2;
sms ($number,$message2);
exit();
}
if (($percent >= 81 && $percent <= 90)){
echo $message2;
$message2 = "".$name1." is ".$percent."% compatible with ".$name2.". ".$name1." & ".$name2." are very much made for each other";
sms ($number,$message2);
exit();
}
if (($percent >= 91 && $percent <= 100)){
echo $message2;
$message2 = "".$name1." is ".$percent."% compatible with ".$name2." so it has to be love!!";
sms ($number,$message2);
exit();
} else {
$message2 = "Error: ".$percent."";
echo $message2;
sms ($number,$message2);
}



?>