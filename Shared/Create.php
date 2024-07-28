<?php

include('ConnectionMysql.php'); // This file contains the configuration and the connectio for the database;
$information = $_POST['information']; // This information is from the /Views/Create.php form;

$table = 'Informations';
$column = 'information';
$mysqli->query("insert into $table ($column) values ('$information');") or die ('Error');
$mysqli->close();
?>
