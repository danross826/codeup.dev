<?php

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

$query = 'DROP TABLE IF EXISTS national_parks';

// Create the query and assign to var

$dbc->exec($query);

// Creating a second query to add the structure for the table

$queryTwo = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    location VARCHAR(50) NOT NULL,
    date_established DATE NOT NULL,
    area_in_acres DOUBLE NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($queryTwo);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";