<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost:3306';
$databaseName = 'flooders';
$databaseUsername = 'root';
$databasePassword = '';
$system_email = "muhammadfarhanmadani248@gmail.com";
$system_password = "#Ahan2310";
$connection = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName) or die(mysql_error());


?>