SMS-PI
======

Update posturl will tell the system you want to have your incoming sms sent to the following url.

Remember the system will send it as a post request and use the following

from - number it was from
message - the sms message

All is returned in Json

API url : http://www.smspi.co.uk/api/update-posturl/
```
Required Paramters: 
hash
posturl

```

URL needs to start http or https otherwise it will fail to update.


POST or GET to the URL passing your SMS pi hash will return:

```
[{"error":false,"message":"Post Url Address updated"}]
```
