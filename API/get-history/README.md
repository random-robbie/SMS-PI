SMS-PI
======

get history will return messages you have sent.



API url : http://www.smspi.co.uk/api/get-history/
```
Required Parameters: 
hash

Option parameter:
results
```

default results is 10 but you can do as many as you want either 1 - 100 etc

POST or GET to the URL passing your SMS pi hash will return:

```
[{"to":"07777777777","message":"test","date":"2014-07-02 15:24:15"}]
```
