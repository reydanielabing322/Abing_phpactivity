<!DOCTYPE html>
<html>
	<?php
	include 'functions.php';
    include 'validation.php';
	?>
<head>
    <title>Create User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="row justify-content-center">
<div class="col-4">
<br><br><br>
<h1> Create Menu</h1> 

<form method="POST" enctype="multipart/form-data" action="index.php"> 

<div class="form-group">
	<label for="menuName">Menu Name</label>
	<input type="text" class="form-control" id="menuName" placeholder="Menu Name" name="menu_name">
</div>
<div class="form-group">
	<label for="menuDesc">Menu Description</label>
	<input type="text" class="form-control" id="menuDesc" placeholder="Enter the description" name="menu_desc">
</div>

<div class="form-group">
	<button type="submit" name="Submit" class="btn btn-success">Submit</button>
	
</form>
</div>
</div>
</div>
</div>
	<div>
		<table class="table table-bordered table-hover mx-auto p-2" style="width:auto;">
			<tr>
				<td style="text-align: center;"><b>ID</b></td>
				<td style="text-align: center;"><b>MENU NAME</b></td>
				<td style="text-align: center;"><b>MENU DESCRIPTION</b></td>
				<!-- <td style="text-align: center;"><b>PRICE</b></td> -->
				<td style="text-align: center;"><b>ACTION</b></td>
			</tr>
			<?php
			$rows = view_data();
			foreach ($rows as $row) {
				echo "<tr>";
				echo "<td>" . $row['id'] . "</td>";
				echo "<td>" . $row['menu_name'] . "</td>";
				echo "<td>" . $row['menu_desc'] . "</td>";
				
			?>
				<td>
					<form method="post" enctype="multipart/form-data" action="?edit_id=<?php echo $row['id']; ?>" style="display: inline;">
						<input type="hidden" name="edit" value="<?php echo $row['id']; ?>">
						<button type="submit" >EDIT</button>&nbsp;
					</form>

					<form method="post" style="display: inline;">
						<input type="hidden" name="delete" value="<?php echo $row['id']; ?>">
						<button type="submit" onclick="return confirm('Delete record?')">DELETE</button>
					</form>
				</td>
			<?php echo "</tr>";
			}
			?>

</body>
</html>