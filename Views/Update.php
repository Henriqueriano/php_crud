<?php 
// Inlcudes the connection logics;
include("../Shared/ConnectionMysql.php");
// Get the parameter for link;
$id = $_GET["id"];

// Query Parameters;
$table = "Informations";

// Execute one query for get the database data from the id;
$result = $mysqli->query("SELECT * FROM ".$table." WHERE Id= ".$id.";");
$information = $result->fetch_array();
?>
<!DOCTYPE html>
<html>
	<head>
	<?php include("../Shared/InitPage.php"); ?>
	</head>
<body>
	<nav class="text-center mt-5">
		<a href="../Views/Create.php" class="mx-2">Data Creater</a>
		<a href="../Views/Read.php" class="mx-2">Data Manager</a>
	</nav>
<main>
<div class="card mx-5 my-2">
<div class="card-body">
	<form action=<?php echo "../Shared/Update.php?id=".$information['id'].""?> method="post">
 		<div class="mb-3">
     		<p>Informação antiga: <span style="margin-left:4.6rem;color:red" ><?php echo $information['information']; ?></span><p>
 		</div>
	<div class=container">
  	<div class="form-group row">
	<div class="col col-sm-2 mt-1">
    		<label for="newInfo" class="form-label">Nova Informação:</label>
	</div>
	<div class="col">
    		<input type="text" class="form-control" id="newInfo" name="newInfo" width="50">
	</div>  
</div>
</form>
</div>
</main>
</body>
</html>
