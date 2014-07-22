
<?php
// configuration
$dbtype = "mysql";
$dbhost = "localhost";
$dbname = "cats";
$dbtable = "cats";
$dbuser  = "";
$dbpass  = "";

//SMSPI HASH
$hash = "";

//BIT.LY
$login = "";
$apiKey = "";

// database connection
$pdo = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

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
//results per page
$perpage = "20";

?>