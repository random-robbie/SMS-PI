PHP SECTION
-----------


Webpage
-------

This is a scrip that allows you to offer free SMS to your users of your webpage

```
<?php 
$message = "";
$number = "";
$hash ="YOUR HASH"; 
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
```


smsip.php
----
Put this in a cron job and this will allow you to send a SMS with your IP when you reboot your pi
