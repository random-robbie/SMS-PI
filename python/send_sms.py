#!/usr/bin/python
#-----------------------------------
# Send SMS Text Message
#
# Author : Robert Wiggins
# Site   : http://www.smspi.co.uk
# Date   : 01/10/2013
#
# Altered Script from Matt Hawkins of http://www.raspberrypi-spy.co.uk/
# 
#
#-----------------------------------

# Import required libraries
import urllib      # URL functions
import urllib2     # URL functions
import sys		   # System Function

# Arguments Taken from command line

to = sys.argv[1]
message = sys.argv[2]
hash = "YOURHASH"
### Set to Yes if you wish to send a flash (class 0) message
FLASH = "NO"


#-----------------------------------
# No need to edit anything below this line
#-----------------------------------

values = {
          'to' : to,
          'message' : message,
          'hash' : hash,
          'flash' : FLASH} 
          # Grab your hash from http://www.smspi.co.uk

url = 'http://www.smspi.co.uk/send/'

postdata = urllib.urlencode(values)
req = urllib2.Request(url, postdata)

print 'Attempt to send SMS ...'

try:
  response = urllib2.urlopen(req)
  response_url = response.geturl()
  if response_url==url:
    print response.read()
except urllib2.URLError, e:
  print 'Send failed!'
  print e.reason
