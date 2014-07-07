PHP SECTION
-----------


Webpage
-------

This is a scrip that allows you to offer free SMS to your users of your webpage

Please edit submit.php and put your hash in there from smspi

```
// Your SMSPI.co.uk HASH
$hash = "Your Hash";
```


smsip.php
----

edit smsip.php and change the following

```
// Change the Port to either wlan0 or eth0 to suit your needs
$port = "eth0";
// Number you wish to text when you want this to send a SMS
$number = "077123456789";
// Your SMSPI.co.uk HASH
$hash = "Your Hash";

```

Put this in a cron job and this will allow you to send a SMS with your IP when you reboot your pi


incomingsms.php
---
Change the following

```
$message2 = $_REQUEST['message'];
// Your SMSPI Keyword 
$keyword = "Enter Your SMSPI Keyword";
```

Keyword can be found on the features page and don't forget to put the URL in the webpage section so smspi knows where to send the data to.


callback.php
---

Edit this and fill in the below

```
// Number you wish to text when you want this to send a SMS
$number = "077777777";
// Your SMSPI.co.uk HASH
$hash = "YOURSMSPIHASH";
//Website URL
$webpage = "example.com"
```


Everything should work fine but any issues please contact me on twitter @smspiuk or info@smspi.co.uk

Donations via PayPal are welcome to txt3rob@gmail.com
