<?php
 /*
Rahulkumar Patel
22-July-2018
WEBD2201
*/
function db_connect()
{
	$connection = pg_connect("host=127.0.0.1 dbname=patelr_db user=patelr password=100680118" );  

	return $connection;
}

function displayCopyrightInfo()
{
echo "&copy;Rahulkumar Patel,".date('Y');
}

	define("MINIMUM_ID_LENGTH", "5");
	define("MAXIMUM_ID_LENGTH", "20");
	define("MINIMUM_PASSWORD_LENGTH", "6");
	define("MAXIMUM_PASSWORD_LENGTH", "15");
	define("MAX_FIRST_NAME_LENGTH", "20");
	define("MAX_LAST_NAME_LENGTH", "30");
	define("MAXIMUM_EMAIL_LENGTH", "255"); 

