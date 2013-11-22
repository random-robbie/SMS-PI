#!/usr/bin/env python
import urllib
  
def sendSMS(to, message, hash):
    params = {'to': to,
        'message' : message, 'hash': "YOURHASHHERE"}
    f = urllib.urlopen('http://www.smspi.co.uk/send/?'
        + urllib.urlencode(params))
    return (f.read(), f.code)
  
resp, code = sendSMS('07733665594', 'send via www.smspi.co.uk')
print resp
