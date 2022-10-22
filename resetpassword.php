<?php 
	session_start();

	// variable declaration
	$username = "";
	
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', 'Computer2013', 'registration');

	// REGISTER USER
	if (isset($_POST['reset_pass'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		

		
			

		// register user if there are no errors in the form
		
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "UPDATE student_data SET password = '$password' WHERE username = $username";
			
			mysqli_query($db, $query);

			
			$_SESSION['success'] = "You have successfully changed your password";
			header('location: index.php');
		

	}

	
	

?>