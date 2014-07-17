<?php
#################################


$number = $_REQUEST['from'];

//Tag you are looking for
$tags = "#kitten,#cute kitten,#cats,#kitty";
//Flickr API Key
$apikey = "0e2b6aaf8a6901c264acb91f151a3350";
//Data sorted by options are  date-posted-asc, date-posted-desc, date-taken-asc, date-taken-desc, interestingness-desc, interestingness-asc, and relevance
$sort = "interestingness-desc";
//url_sq, url_t, url_s, url_q, url_m, url_n, url_z, url_c, url_l, url_o
$extras = "url_m";
// Format
$format = "json";

function results ()
{
GLOBAL $tags;
GLOBAL $apikey;
GLOBAL $sort;
GLOBAL $extras;
GLOBAL $format;
//set POST variables 
$url = 'https://api.flickr.com/services/rest/'; 
$fields = array('format' => ($format), 'sort' => ($sort), 'method' => ('flickr.photos.search'), 'tags' => ($tags), 'tag_mode' => ('all'), 'api_key' => ($apikey), 'nojsoncallback' => ('1'), 'per_page' => ('1'), 'extras' => ($extras) ); 
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
	$login = "@smspiuk";
	$apiKey = "YOU BIT.LT ACCESS TOKEN";
	
 
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
$hash = "YOUR SMSPI HASH";




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
curl_setopt($ch,CURLOPT_USERAGENT,'SMSPI PHP IP');
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields);

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);

// uncomment the line below if your are not getting the SMS.
echo $result;
}

if ($number == "test")
{
$me  = results();
$flickr = json_decode($me, TRUE);
foreach ($flickr['photos']['photo'] as $photo) {
$cat = $photo['url_m'];
echo "<br><br>";
echo $cat;
exit();
}
}


$me  = results();
$flickr = json_decode($me, TRUE);
foreach ($flickr['photos']['photo'] as $photo) {
 $cat = $photo['url_m'];
$link = shortURL ($cat);
echo "<br><br>";
$message = "Hello Cat Lady - here is today's Cat Picture ".$link."";
echo $message;
echo "<br><br>";
sendsms ($number,$message);
echo "<br><br>";
}	



?>



