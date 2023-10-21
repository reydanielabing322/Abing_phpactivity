<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="row justify-content-center">
<div class="col-4">
<br><br><br><br><br><br><br><br><br><br><br><br>
<h1> Create Menu</h1> 

<form method="POST" action="addMenu.php">

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

</body>
</html>