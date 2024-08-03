<?php 
// This file contains the update logic;
// Include the connection logic;
include("ConnectionMysql.php");

// Get the user id from the URL;
$id = $_GET['id'];

// Get the data from ther form post;
$newInfo = $_POST['newInfo'];

// Execute the update;
$mysqli->query("UPDATE Informations SET information='$newInfo' WHERE id=$id;");

// Close the connection and redirect;
$mysqli->close();
header('Location: ../Views/Read.php');
?>
