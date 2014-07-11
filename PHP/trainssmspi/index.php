<?php
// SMS Train Times
// By Robert Wiggins
// For use with smspi
// Donate something via paypal txt3rob@gmail.com

// functions Include
include ('functions.php');
include ('config.php');

// Post Data
$sender2 = $_REQUEST["from"];
$content2 = $_REQUEST["message"];


if (time()-filemtime('/tmp/trains.csv') > 1 * 3600) {
  emptytable();
  downloaddue();
  importdue();
  oldtrains();
  nexttrain();
  

  
} else {
   oldtrains();
   nexttrain();
   sms ($sender2,$message);
}


?>


