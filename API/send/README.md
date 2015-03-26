SMS-PI
======

Send - This is the API point to return the results in json.

if you do not wish for json results please use the following url http://www.smspi.co.uk/api/

All is returned in Json

API url : http://www.smspi.co.uk/api/send/
Required Paramters: 
hash
to
message

Optional Parameters:
flash

POST or GET to the URL passing your SMS pi hash will return:

if no flash is set

```
[{"error":false,"to":"447771741041","Message ID":"447771741041234233","Message Type":"Normal","info":"Sent"}]
```


if flash is set


```
[{"error":false,"to":"447771741041","Message ID":"447771741041234233","Message Type":"Flash","info":"Sent"}]
```