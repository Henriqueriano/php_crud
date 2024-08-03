<?php 
include("ConnectionMysql.php");
$id = $_GET['id'];
$newInfo = $_POST['newInfo'];
$mysqli->query("UPDATE Informations SET information='$newInfo' WHERE id=$id;");
$mysqli->close();
header('Location: ../Views/Read.php');
?>
