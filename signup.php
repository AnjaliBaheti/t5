<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
	<div class="content">
		<form action="verified.php?sign=up" method="POST" role="form">
			<legend>Register</legend>
		
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="" name="name" placeholder="Enter Your Name">
			</div>
		
			<div class="form-group">
				<label for="user-name">UserName</label>
				<input type="text" class="form-control" id="" name="user-name" placeholder="Enter Your User Name">
			</div>
		
			<div class="form-group">
				<label for="mobile">Mobile Number</label>
				<input type="Number" class="form-control" id="" name="mobile" placeholder="Enter Your Mobile Number">
			</div>
		
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="" name="email" placeholder="Enter Your Email">
			</div>
		
			<div class="form-group">
				<label for="father-name">Father's Name</label>
				<input type="text" class="form-control" id="" name="father-name" placeholder="Enter Your Father's Name">
			</div>
		
			<div class="form-group">
				<label for="f-contact">Father's Mobile Number</label>
				<input type="text" class="form-control" id="" name="f-contact" placeholder="Enter Your Father's Mobile Number">
			</div>
		
			<div class="form-group">
				<label for="address">Address</label>
				<input type="text" class="form-control" id="" name="address" placeholder="Enter Your Address">
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>