SMS-PI
======

Get Settings will return your incoming settings for sms

SMS Reply - reply with a message when some one texts your keyword
Email - Email's you the incoming SMS
Post URL - will return the url you have set so when an incoming sms comes it it's then sent to the url provided
Keyword - When you text back to SMSPI you need to put this keyword in so that the system knows the sms is for you.

All is returned in Json

API url : http://www.smspi.co.uk/api/get-settings/
```
Required Paramters: 
hash
```
POST or GET to the URL passing your SMS pi hash will return:

```
[{"mobile":null,"smsreply":"thisisa test","email":null,"posturl":"http:\/\/www.smspi.co.uk\/test\/","keyword":"ADSA2"}]
```
