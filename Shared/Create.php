<?php

include('ConnectionMysql.php'); // This file contains the configuration and the connectio for the database;
$information = $_POST['information']; // This information is from the /Views/Create.php form;

// Making the insertion of the registry in the database;
$table = 'Informations'; // Database Table;
$column = 'information'; // Colum into your database;
$mysqli->query("INSERT INTO $table ($column) VALUES ('$information');") or die ('Error with the insertion of the registry');

// Closing the connection, usually, this is not necessary, but is a too good praticle;
$mysqli->close();
?>
