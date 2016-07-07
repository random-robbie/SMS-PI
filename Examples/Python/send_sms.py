##
#Send SMS By Robbie Wiggins#
#Replace YOURNUMBER with who you want to send it to and REPLACE YOURMESSAGE with the message and REPLACE YOURHASH with your hash#
##


import requests

session = requests.Session()
print "Sending SMS"
paramsGet = {"report":"no","to":"YOURNUMBER","message":"YOURMESSAGE","hash":"YOURHASH","flash":"no"}
headers = {"User-Agent":"Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0","Connection":"close","Accept-Language":"en-GB,en;q=0.5","Accept-Encoding":"gzip, deflate","Accept":"text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8"}
response = session.get("https://www.smspi.co.uk/api/send/", params=paramsGet, headers=headers)

print "Status code:", response.status_code
print "Response body:", response.content
