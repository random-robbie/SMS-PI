<?php
// Chnage the ID on the end to your city
$json = file_get_contents('http://api.openweathermap.org/data/2.5/weather?id=2634375');
$obj = json_decode($json);
$description = $obj->weather[0]->description;
$city =  $obj->name;
$temp =  $obj->main->temp;
$current_temp = $temp - 273.15;
$newtemp = (round($current_temp));
$message = "The current weather for ".$city." is ".$description." and the current temp is ".$newtemp."c";

// Number you wish to text when you want this to send a SMS
$number = "YOURMOBILE";
// Your SMSPI.co.uk HASH
$hash = "YOURHASH";


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
curl_setopt($ch,CURLOPT_USERAGENT,'SMSPI PHP WEATHER');
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields);
//execute post
$result = curl_exec($ch);
//close connection
curl_close($ch);
// uncomment the line below if your are not getting the SMS.
//echo $result;
echo "Your Message has been sent to ".$number."";



?>
