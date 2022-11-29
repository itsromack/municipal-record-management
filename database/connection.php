<?php

require("./../vendor/autoload.php");

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

define("server", $_ENV['DB_HOST']);
define("username", $_ENV['DB_USER']);
define("password", $_ENV['DB_PASS']);
define("dbname", $_ENV['DB_NAME']);

// Create connection
$dbconnection = mysqli_connect(server, username, password,dbname);

if($dbconnection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
