<?php 


// Constants///////////////////////////////////////////

// DB_HOST-the IP Address to connect to

define("DB_HOST", "127.0.0.1");

// DB_NAME-the Database to connect to

define("DB_NAME", "employees");

// DB_USER-the MYSQL User to use

define("DB_USER", "codeup");

// DB_PASS-the password for the user to use

define("DB_PASS", "codeup");

require_once('db_connect.php');

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

