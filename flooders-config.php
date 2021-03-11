<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost';
$databaseName = 'flooders';
$databaseUsername = 'root';
$databasePassword = '';
$system_email = "";
$system_password = "";
$connection = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName) or die(mysql_error());


?>
