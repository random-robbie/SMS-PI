SMS-PI
======

Update keyword so if you want to text in to the system and start it with this 5 digit keyword then it knows to assign the incoming sms to your account.

It has to be 5 digits can be number and letters only and it will error if longer or some one already uses that keyword.


All is returned in Json

API url : http://www.smspi.co.uk/api/update-keyword/
```
Required Paramters: 
hash
keyword
```
URL needs to start http or https otherwise it will fail to update.


POST or GET to the URL passing your SMS pi hash will return:

```
[{"error":false,"message":"Keyword Updated"}]
```
