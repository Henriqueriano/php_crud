<?php 
// Get the data id for exclude;
$dataId = $_GET['id'];

// Import the Connectin archive;
include('ConnectionMysql.php');
$mysqli->query("DELETE FROM Informations WHERE Id=$dataId") or die ("Error while exclude!");
$mysqli->close();
header('Location:../Views/Read.php');
?>
