<!DOCTYPE html>
<html>
<head>
	<?php 
	include("../Shared/InitPage.php");	
	?>
</head>
<body>
	<main>
		<div class = "card mx-5 my-5">
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
