<?php
include ('config.php');
$number = $_REQUEST['from'];

function insert2db ($url)
{
GLOBAL $pdo;
$stmt = $pdo->prepare("INSERT INTO `cats` (`url`) VALUES (:url)");
$stmt->bindValue(':url', $url);
$stmt->execute();

}
function removecat ($url)
{
GLOBAL $pdo;
//remove from DB
$del = $pdo->prepare('DELETE FROM `cats` WHERE `url` = :url');
$del->bindValue(':url', $url);
$del->execute();
}

function results ()
{
GLOBAL $tags;
GLOBAL $apikey;
GLOBAL $sort;
GLOBAL $extras;
GLOBAL $format;
GLOBAL $perpage;
//set POST variables 
$url = 'https://api.flickr.com/services/rest/'; 
$fields = array('format' => ($format), 'sort' => ($sort), 'method' => ('flickr.photos.search'), 'tags' => ($tags), 'tag_mode' => ('all'), 'api_key' => ($apikey), 'nojsoncallback' => ('1'), 'per_page' => ($perpage), 'extras' => ($extras) ); 
//open connection 
$ch = curl_init(); 
//set the url, number of POST vars, POST data 
curl_setopt($ch,CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch,CURLOPT_POST, count($fields)); 
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields); 
//execute post 
$result = curl_exec($ch); 
//close connection 
curl_close($ch); 
//$data = json_decode($result);
//$furl = $newphoto->photos->photo[0]->url_m;
return $result;
}


function shortURL($link) {
	
	$format = "json";
	GLOBAL $login;
	GLOBAL $apiKey;
	
 
	$bitly = 'https://api-ssl.bitly.com/v3/shorten?login='.$login.'&access_token='.$apiKey.'&longUrl='.urldecode($link).'&format='.$format;
	
	
	$ch = curl_init($bitly);
	$timeout = 50;
	curl_setopt($ch,CURLOPT_URL,$bitly);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
	$data = curl_exec($ch);
	curl_close($ch);
	
	$json = json_decode($data, TRUE);
	$newurl = $json['data']['url'];
	return $newurl;
}
function sendsms ($number,$message)
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
curl_setopt($ch,CURLOPT_USERAGENT,'SMSPI CATS');
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields);

//execute post
$result = curl_exec($ch);




//close connection
curl_close($ch);

// uncomment the line below if your are not getting the SMS.
echo $result;
}


$sel = $pdo->prepare('SELECT * FROM `cats`');
$sel->execute();
$count = $sel->rowCount();

//Restock DB if only one result letft.
if ($count == "0")
{
$me  = results();
$flickr = json_decode($me, TRUE);
foreach ($flickr['photos']['photo'] as $photo) {
 $cat = $photo['url_m'];
 insert2db ($cat);
}	
}

//Select Flickr url
$getcat = $pdo->prepare('SELECT * FROM  `cats` LIMIT 0 , 1');
$getcat->execute();
$result = $getcat->fetch(PDO::FETCH_ASSOC);
$caturl = $result['url'];
//Convert to biy.ly
$newurl = shortURL($caturl);
//Send SMS
$message = "Hello Cat Lady - here is today's Cat Picture ".$newurl."";
echo $message;
if ($number != "test")
{
sendsms ($number,$message);
}
//Remove flickr url
removecat ($caturl);


?>



