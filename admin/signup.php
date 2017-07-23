<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<body>
<div class="container">
<form action="../DB/dbconnect.php" method="POST">
	<div class="form-group">
	<label for="name">Name: </label>
	<input type="name" class="form-control" name ="name" required>
	</div>
	<div class="form-group">
	<label for="email">Email: </label>
	<input type="email" class="form-control" name ="email" required>
	</div>
	<div class="form-group">
	<label for="phone">Phone: </label>
	<input type="phone" class="form-control" name ="phone" required>
	</div>

	<div class="form-group">
	<label for="address">Address: </label>
	<input type="address" class="form-control" name ="address" required>
	</div>

	<div class="form-group">
	<label for="password">Password: </label>
	<input type="password" class="form-control" name="password" required>
	</div>
<input type="submit">
</form>

</div>



</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
</html>