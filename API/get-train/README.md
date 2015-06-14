SMS-PI
======

Get train will return the time of the next train from your chosen station.

Note this only returns the next train not a full list of departures

You will need to pass 2 variables one is 

start  - This is the first station the train should be departing to.
end - the end station it you want.

Note due to the complex way this gets the details if there is a change over you will not see if it's on time but you may see a note from the local transport authority.

Station codes can be downloaded from http://www.nationalrail.co.uk/static/documents/content/station_codes.csv

All is returned in Json

API url : http://www.smspi.co.uk/api/get-train/
```
Required Paramters: 
hash
start
end
```
POST or GET to the URL passing your SMS pi hash will return:

```
[{"error":false,"message":["09:33","On time"]}]
```
