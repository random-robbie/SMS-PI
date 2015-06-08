SMS-PI
======

Add Black-List will add a number to our blacklist so no user can send them a sms

All is returned in Json

API url : http://www.smspi.co.uk/api/add-blaclist/
```
Required Paramters: hash,number
```
POST or GET to the URL passing your SMS pi hash will return:

```
 [{"error":false,"message":"07731111111 has been added to the blacklist"}]
```
