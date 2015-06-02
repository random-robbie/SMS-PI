SMS-PI
======

Send - This is the API point to return the results in json.

if you do not wish for json results please use the following url http://www.smspi.co.uk/api/

All is returned in Json

API url : http://www.smspi.co.uk/api/send-paid/

hash = Your usal 

```
Required Paramters: 
hash
to
message
sender
test


```
POST or GET to the URL passing your SMS pi hash will return:



```
[{"test_mode":false,"paid credits":"20","cost":"1","to":"447771741041","Message:":"test","sender:smspi","custom_id:2342423423423432324,"status:"Sent"}]
```

```
