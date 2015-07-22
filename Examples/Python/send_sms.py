#!/usr/bin/python
#-----------------------------------
# Send SMS Text Message
#
# Author : Robert Wiggins
# Site   : http://www.smspi.co.uk
# Date   : 22/07/2015
#
# Altered Script from Matt Hawkins of http://www.raspberrypi-spy.co.uk/
# 
#
#-----------------------------------

# Import required libraries
import urllib      # URL functions
import urllib2     # URL functions
import sys		   # System Function
import json		   # Json Parse

# Validate the arguments have been set
if(len(sys.argv) < 2):
	exit('To use this please do the following...... python send_sms.py 07712312313 "this is the message required to be sent"') 

# Arguments Taken from command line
to = sys.argv[1]
message = sys.argv[2]

### Set to Yes if you wish to send a flash (class 0) message
FLASH = "NO"
hash = "YOUR SMSPI API HASH"

#-----------------------------------
# No need to edit anything below this line
#-----------------------------------

values = {
          'to' : to,
          'message' : message,
          'hash' : hash,
          'flash' : FLASH} 
          # Grab your hash from http://www.smspi.co.uk

url = 'http://www.smspi.co.uk/api/send/'

postdata = urllib.urlencode(values)
req = urllib2.Request(url, postdata)

print 'Attempt to send SMS ...'

try:
  response = urllib2.urlopen(req)
  response_url = response.geturl()
  if response_url==url:
	data = json.load(response)
	errorvalue = data[0]['error']
	if errorvalue  == False:
	 info = data[0]['info']
	 print "SMS Status: " + info + "\n" + "To: " + to
	else:
	 smserror = data[0]['message']
	 print "Error: " + smserror
except urllib2.URLError, e:
  print 'Send failed!'
  print e.reason
