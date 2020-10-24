<?php

/**
 * Creates the connection between Server and database
 *
 * To use this connection: create a database named produce on PHPMyAdmin
 * To use this connection: set your password to 123456
 */

$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '123456';
$DB_NAME = 'produce';

//Create Connection
$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

//Verify connection
if (mysqli_connect_errno()){
    echo 'Connection to DataBase was not made';
}
?>