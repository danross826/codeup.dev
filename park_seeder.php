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

$stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)');

foreach ($parks as $park) {

	$stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
	$stmt->bindValue(':location', $park['location'], PDO::PARAM_STR);
	$stmt->bindValue(':date_established', $park['date_established'], PDO::PARAM_STR);
	$stmt->bindValue(':area_in_acres', $park['area_in_acres'], PDO::PARAM_STR);
	$stmt->bindValue(':description', $park['description'], PDO::PARAM_STR);

    $stmt->execute();

}

