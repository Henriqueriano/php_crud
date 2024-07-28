<?php
// This section of this code is reserved to set the connection parameters:
$addres = "127.0.0.1"; 
$user = "root";
$pass = "root";
$database = "phpSide";

// The Connection to the database is maded here:
$mysqli = new mysqli($addres,$user,$pass, $database);
?>
