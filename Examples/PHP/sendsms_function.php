Below is a basic function to show how to send a sms via the API.

$to = ""; // mobile to
$message = ""; // your message 160 chars tops
$hash = ""; // Your smspi api hash
$flash = "";  // yes or no 



function sendsms($to,$message,$hash,$flash)
{

// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://www.smspi.co.uk/api/send/',
    CURLOPT_USERAGENT => 'Your Site Name',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => array(
		'hash' => $hash,
        'to' => $to,
		'message' => $message,
		'flash' => $flash,

    )
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);

$decode = json_decode($resp);
if ($decode[0]->error == false)
{
	echo $decode[0]->info;
} else
{
	echo $decode[0]->message;
}
}

 sendsms($to,$message,$hash,$flash);

