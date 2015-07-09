#!/usr/bin/env python
import urllib
  
def sendSMS(to, message, hash):
    params = urllib.urlencode({'to': to, 'message' : message, 'hash': hash})
    f = urllib.urlopen('http://www.smspi.co.uk/api/send/', params)
    return (f.read(), f.code)
  
resp, code = sendSMS('07733665594', 'send via www.smspi.co.uk', 'HASH')
print resp
