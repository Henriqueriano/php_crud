<?php 
// Get the data id for exclude;
$dataId = $_GET['id'];

// Import the Connectin archive;
include('ConnectionMysql.php');

// Delete the registry;
$mysqli->query("DELETE FROM Informations WHERE Id=$dataId") or die ("Error while exclude!");
$mysqli->close();

// Get back for the table; 
header('Location:../Views/Read.php');
?>
