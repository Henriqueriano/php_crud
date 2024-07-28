<?php 
include('../Shared/ConnectionMysql.php'); 
?>
<!DOCTYPE html>
<html>
<head> 

<?php
include('../Shared/InitPage.php');
?>

</head>
<body>
<div class="card my-5 mx-5">
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
$result = $mysqli->query('select * from Informations;');
echo '<tbody>';
while ($informations = $result->fetch_array()){
		        echo	'<tr>';
      			echo	"<td>".$informations['id']."</td>";
			echo	"<td>".$informations['information']."</td>";
			echo	"<td>"."<a href=\"#\"> Edit </a>"."<span>/</span>"."<a href=\"#\"> Delete </>"."</td>";
      			echo	"</tr>";	
}
echo '</tbody>';
?>
	</table>
</div>
</div>
</body>
</html>
