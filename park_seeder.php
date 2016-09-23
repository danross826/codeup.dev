<?php

require_once('parks_array.php');

// Constants///////////////////////////////////////////

// DB_HOST-the IP Address to connect to

define("DB_HOST", "127.0.0.1");

// DB_NAME-the Database to connect to

define("DB_NAME", "parks_db");

// DB_USER-the MYSQL User to use

define("DB_USER", "parks_user");

// DB_PASS-the password for the user to use

define("DB_PASS", "codeup");

// Requiring code to connect database, will be populated by constants

require_once('db_connect.php');

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

// Create the query and assign to var

$query = 'TRUNCATE national_parks';

// execute first query

$dbc->exec($query);

// This foreach loop loops through parks array and inserts each array into the table

foreach ($parks as $park) {
    $queryTwo = "INSERT INTO national_parks (name, location, date_established, area_in_acres) 

    VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', 
    	{$park['area_in_acres']})";

    $dbc->exec($queryTwo);

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}

