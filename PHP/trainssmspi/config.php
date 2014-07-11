<?php

// configuration
$dbtype = "mysql";
$dbhost = "localhost";
$dbname = "";
$dbuser  = "";
$dbpass  = "";
$dbtable = "Trains";

//SMSPI hash - Grab From http://www.smspi.co.uk
$hash = "";

// database connection
$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

//Train Station of Departure
$station = "Hoylake";

// Google Drive CSV for train times URL
$url  = 'https://docs.google.com/spreadsheet/pub?key=0AuC2xjBKqlYadDJ2TzJkdFh5Wi03Wlh5NmMtdDNOdHc&single=true&gid=0&output=csv';

//temp folder for the CSV
$tmpcsv = "/tmp/trains.csv";
?>