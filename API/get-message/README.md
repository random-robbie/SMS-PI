SMS-PI
======

grab incoming messages will return all incoming messages to you.



API url : http://www.smspi.co.uk/api/get-message/
```
Required Paramters: 
hash

Option parameter:
results
```
default results is 10 but you can do as many as you want either 1 - 100 etc

POST or GET to the URL passing your SMS pi hash will return:

```
[{"from":"07777777777","message":"test","date":"2014-07-02 15:24:15"}]
```
