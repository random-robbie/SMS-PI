#!/usr/bin/perl -T
 
use strict;
use LWP::UserAgent;
use HTTP::Request::Common;
 
# Data for text message
my $hash = "Enter Your Hash here";
my $to = "07774545985";
my $message = "This is a test message"; # Text message content
my $ua = LWP::UserAgent->new();
 
my $res = $ua->request
(
 POST 'http://www.smspi.co.uk/api/',
 Content_Type  => 'application/x-www-form-urlencoded',
 Content       => [ 'to'       => $to,
                    'message'    => $message,
                    'hash'    => $hash
                  ]
);
 
if ($res->is_error) { die "HTTP Error\n"; }
print "Response:\n\n" . $res->content . "\n\n";
