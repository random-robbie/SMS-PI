SMS-PI API
======

All results will be returned in json format.

We accept GET & POST requests to the api

If there is an error the first part of the json will be error and will return with the value of true.

if no error then it returns with false.


All Errors will return in the following mannor:
```
[{"error":true,"message":"what ever the error is"}]
```
