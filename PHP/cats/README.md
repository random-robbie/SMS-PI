SMS a Photo of a cat 

This will search flickr for the keywords and then send a sms back with a bit.ly link to a picture of a cat.

ideal for the cat ladys out there!


config.php
----
Edit the below for the mysql settings

```
$dbname = "cats";
$dbtable = "cats";
$dbuser  = "";
$dbpass  = "";
```
Get your hash from http://www.smspi.co.uk
```
//SMSPI HASH
$hash = "";
```
Get your bit.ly key from http://www.bit.ly
```
//BIT.LY
$login = "";
$apiKey = "";
````

Information
----

Import cats.sql to your mysql database via phpmyadmin

then just go to http://www.smspi.co.uk/features.php

set the post URL to the link to your page where this script is hosted.

and every time you send a SMS with your keyword in this script will reply with a new picture of a cat for you.


