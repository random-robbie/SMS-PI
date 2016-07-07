require "net/http"
require "uri"

uri = URI.parse("http://www.smspi.co.uk/api/send/")
uri.query = URI.encode_www_form({"report"=>"no","to"=>"YOURNUMBER","message"=>"YOURMESSAGE","hash"=>"YOURHASH","flash"=>"no"})
http = Net::HTTP.new(uri.host, uri.port)

request = Net::HTTP::Get.new(uri.request_uri)
request["User-Agent"] = "Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0"
request["Connection"] = "close"
request["Accept-Language"] = "en-GB,en;q=0.5"
request["Accept-Encoding"] = "gzip, deflate"
request["Accept"] = "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8"
response = http.request(request)

puts "Status code: "+response.code
puts "Response body: "+response.body
