SMS-PI
======

Update smsreply will tell the system you want to have your incoming sms replyed with the sms reply you are providing.


All is returned in Json

API url : http://www.smspi.co.uk/api/update-smsreply/
```
Required Paramters: 
hash
smsreply
```
URL needs to start http or https otherwise it will fail to update.


POST or GET to the URL passing your SMS pi hash will return:

```
[{"error":false,"message":"sms reply updated"}]
```
