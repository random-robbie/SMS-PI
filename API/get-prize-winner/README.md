SMS-PI
======

Send - This is the API point to return the results in json.

API url : http://www.smspi.co.uk/api/get-prize-winner/

This will retrive the entrys to your competition and tell you if a prize has been won and how many people have entered it.

```
Required Paramters: 
hash
```
POST or GET to the URL passing your SMS pi hash will return:

```
```
 [{"error":false,"1st":"This Prize Has Been Won","2nd":"This Prize Has Been Won","3rd":"Not Won Yet","entrys":2}]
```
