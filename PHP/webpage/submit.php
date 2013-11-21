<?php 
//If submit is hit if 
( isset ( $_POST['submit'] ) ) 
$message = $_POST['message']; 
$number = $_POST['number']; 
$hash ="9aba4cf9c622c789460e52f11901af74"; 
//set POST variables 
$url = 'http://www.smspi.co.uk/send/'; 
$fields = array('to' => ($number), 'message' => ($message), 'hash' => ($hash) ); 
//open connection 
$ch = curl_init(); 
//set the url, number of POST vars, POST data 
curl_setopt($ch,CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_REFERER, 'http://www.smspi.co.uk/send/'); 
curl_setopt($ch,CURLOPT_POST, count($fields)); 
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields); 
//execute post 
$result = curl_exec($ch); 
//close connection 
curl_close($ch); 
echo ('<center>'.$result.'</center>'); ?>