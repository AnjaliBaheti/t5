<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
	<div class="content">
		<form action="verified.php?sign=in" method="POST" role="form">
			<legend>Sign In To Continue:</legend>
		
			<div class="form-group">
				<label for="user-name">User Name</label>
				<input type="text" class="form-control" id="" name="user-name" placeholder="Enter Your User Name">
			</div>
		
			<div class="form-group">
				<label for="mobile">Mobile Number</label>
				<input type="text" class="form-control" id="" name="mobile" placeholder="Enter Your Mobile Number">
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>