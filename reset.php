<?php include('reset111.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Reset Login details</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Reset your Login details</h2>
	</div>
	
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

			<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>" require="required" placeholder="Enter your username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1" placeholder="Enter your new password">
		</div>

		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2" placeholder="Confirm your password">
		</div>

		<div class="input-group">
			<button type="submit" class="btn" name="reset_pass">Reset</button>
		</div>
		<p>
			Not yet a Registered Student? <a href="index.php">Sign up</a>
		</p>
	</form>


</body>
</html>