<!DOCTYPE html>
<html>
<head>
	<?php 
	include("../Shared/InitPage.php");	
	?>
</head>
<body>
	<main>
		<form action="../Shared/Create.php" method="post">
  			<div class="row mb-3">
    			<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    			<div class="col-sm-10">
      			<input type="email" class="form-control" id="inputEmail3" name="email">
    			</div>
  			</div>
  			<div class="row mb-3">
    			<label for="inputPassword3" class="col-sm-2 col-form-label" name="password">Password</label>
   			<div class="col-sm-10">
     			<input type="password" class="form-control" id="inputPassword3">
   			</div>
  			</div>
		</form>
	</main>
</body>
</html>
