<?php
include ('config.php');


function sms ($sender2,$message)
{
GLOBAL $hash;

                //set POST variables
$url = 'http://www.smspi.co.uk/api/';
$fields = array(
						'to' => $sender2,
						'message' => $message,
						'hash' =>  $hash
						
				);

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_USERAGENT,'SMSPI PHP Trains');
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields);
echo "<br><br>";
//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);



}

function debug ($message)
{
                        $fp = fopen("error.txt","a");
                        fwrite($fp,$message);
                        fclose($fp);
                        }
						
						
function downloaddue()
{					GLOBAL $url;
					GLOBAL $tmpcsv;
 
					$download = curl_init($url);
					curl_setopt($download, CURLOPT_RETURNTRANSFER, true);
 
					$data = curl_exec($download);
 
					curl_close($download);
 
					file_put_contents($tmpcsv, $data);
						
					}
					
					
function emptytable() 
{
				GLOBAL $dbh;
				GLOBAL $dbtable;
				$empty = $dbh->prepare('TRUNCATE TABLE  ".$dbtable."');
				$empty->execute();
				}
				
function importdue()
{
				GLOBAL $dbh;
				GLOBAL $dbtable;
				GLOBAL $tmpcsv;
				$importduetimes = $dbh->prepare("LOAD DATA INFILE '".$tmpcsv."' INTO TABLE `".$dbtable."` FIELDS TERMINATED BY ',' IGNORE 1 LINES;");
				$importduetimes->execute();
 
    		

}
				
function oldtrains()
{
		GLOBAL $dbh;
        $oldtrains = $dbh->prepare('DELETE  FROM ".$dbtable." WHERE `due` < CURRENT_TIME');
		$oldtrains->execute();
						}
						
						
function nexttrain()
{
		GLOBAL $dbh;
		GLOBAL $station;
		GLOBAL $dbtable;
        $nexttrain = $dbh->prepare("SELECT * FROM `".$dbtable."` WHERE `due` > CURRENT_TIME ORDER BY `Due` ASC LIMIT 0 , 1 ");
		$nexttrain->execute();
		$result = $nexttrain->fetch(PDO::FETCH_ASSOC);
		$iflate = $result['Status'];
		if ($iflate == "On time")
		{
		$status = "On Time";
		} else {
		$status = "Is expected at ".$result['Status']."";
		}
		$due = substr($result['Due'], 0, 5);
		$now = date('h:i');
		$d = (strtotime($now) - strtotime($due))/60;
		GLOBAL $message;
		$message = ("The next train to depart from ".$station." is ".$due." and is currently ".$status."");
		echo $message;
		
						}
						

?>
