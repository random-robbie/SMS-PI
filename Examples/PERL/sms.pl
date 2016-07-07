#!/usr/bin/perl -T
 
use LWP::UserAgent;
use HTTP::Request::Common;

my $url = URI->new("http://www.smspi.co.uk/api/send/");
$url->query_form({"report"=>"no","to"=>"YOURNUMBER","message"=>"YOURMESSAGE","hash"=>"YOURHASH","flash"=>"no"});

my $ua = LWP::UserAgent->new();

my $req = GET $url;
$req->header("User-Agent" => "Mozilla/5.0 (Windows NT 10.0; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0");
$req->header("Connection" => "close");
$req->header("Accept-Language" => "en-GB,en;q=0.5");
$req->header("Accept-Encoding" => "gzip, deflate");
$req->header("Accept" => "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8");
my $resp = $ua->request($req);

print "Status code : ".$resp->code."\n";
print "Response body : ".$resp->content."\n";
