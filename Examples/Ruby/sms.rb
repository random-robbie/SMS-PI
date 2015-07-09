require 'net/http'
require 'uri'
 
hash = "YOURHASH"
messsage = "Your message"
numbers = "447123456789"

 
requested_url = 'http://www.smspi.co.uk/api/send/' +
"&hash=" + hash + 
"&to=" + numbers + "&message=" + URI.escape(message)
             
 
url = URI.parse(requested_url)
full_path = (url.query.blank?) ? url.path : "#{url.path}?#{url.query}"
the_request = Net::HTTP::Get.new(full_path)
 
the_response = Net::HTTP.start(url.host, url.port) { |http|
http.request(the_request)
}
 
puts(the_response.body)
