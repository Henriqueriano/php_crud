<?php
// Importing the connection file; (You will be see this a often);
include('../Shared/ConnectionMysql.php'); 
?>
<!DOCTYPE html>
<html>
<head> 
<?php
// Importing the imports of the page
include('../Shared/InitPage.php');
?>
</head>
<body>
<main class="text-center my-5">
<a href="Create.php">Data Creater</a>
<div class="card my-2 mx-5">
	<div class="card-body">
	<table class="table table-striped table-hover">
		 <thead>
    			<tr>
				<th scope="col">#Id</th>
      				<th scope="col">Iformation</th>
      				<th scope="col">Edit/Remove</th>
   			</tr>
		  </thead>
<?php
// That is so obviusly;
$result = $mysqli->query('SELECT * FROM Informations;');
// Init the table here;
echo '<tbody>';
// Reading the data from the database:
// https://stackoverflow.com/questions/848905/loop-through-database-and-show-in-table
while ($informations = $result->fetch_array()){
		        echo	'<tr>';
      			echo	"<td>".$informations['id']."</td>";
			echo	"<td>".$informations['information']."</td>";
			echo	"<td>"."<a href=\"#\"> Edit </a>"."<span>/</span>"."<a href=\"../Shared/Deleter.php?id=".$informations['id']."\"> Delete </>"."</td>";
      			echo	"</tr>";	
}
// Finish the table here;
echo '</tbody>';
?>
	</table>
	</div>
	</div>
</body>
</html>
