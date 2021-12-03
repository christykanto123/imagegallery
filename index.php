<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
	<div class="heading">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" >Image Gallery</a>
		</div>
	</nav>
	</div>
	<div class="col-md-3"></div>
		<div class="col-md-6 well">
			<h3 class="text-primary">Upload Image</h3>
			<hr style="border-top:1px dotted #ccc;"></hr>
				<form method="POST" action="upload.php" enctype="multipart/form-data">
					<div class="form-inline">
						<label>Upload here</label>
						<input type="file" name="image" class="form-control" required="required"/>
						<button class="btn btn-primary" name="upload"><span class="glyphicon glyphicon-upload"></span> Upload</button>
					</div>
				</form>
			<br />
		<div class="alert alert-info">My Gallery</div>

		<?php
			require 'conn.php';
			
			$query = mysqli_query($conn, "SELECT * FROM `image`") or die(mysqli_error());
			while($fetch = mysqli_fetch_array($query)){
		?>
		        <div class="image">
				<a href="<?php echo $fetch['location']?>"><img src="<?php echo $fetch['location']?>" width="180" height="180"/></a>
				</div>
			<?php
				}
			?>
				</div>
	</body>	
</html>