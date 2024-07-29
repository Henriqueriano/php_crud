<!DOCTYPE html>
<html>
<head>
	<?php
	// Include the header of the page;
	include("../Shared/InitPage.php");	
	?>
</head>
<body>
	<main  class="text-center my-5">
		<a href="Read.php">Data Manager</a>
		<div class = "card mx-5 my-2">
		<div class = "card-body">
		<form action="../Shared/Create.php" method="post">
  			<div class="row mb-3">
    			<label for="inputEmail3" class="col-sm-2 col-form-label">Information:</label>
    			<div class="col-sm-10">
      			<input type="text" class="form-control" id="inputInfo" name="information">
    			</div>
		</form>
		</div>
		</div>
	</main>
</body>
</html>

