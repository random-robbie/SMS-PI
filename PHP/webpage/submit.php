<?php 
//If submit is hit if 
( isset ( $_POST['submit'] ) ) 

$message = $_POST['message']; 
$number = $_POST['number'];
$flash = $_POST['flash'];
$hash ="YOUR HASH";

if (!isset($flash) || empty($flash))
{
    $flash = "no";
}
//set POST variables 
$url = 'http://www.smspi.co.uk/send/'; 
$fields = array('to' => ($number), 'message' => ($message), 'hash' => ($hash), 'flash' => ($flash) ); 
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
