<?php 
	session_start();

	// variable declaration
	$fullname = "";
	$username = "";
	$email    = "";
	$class = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', 'Computer2013', 'registration');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$fullname = mysqli_real_escape_string($db, $_POST['fullname']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$class = mysqli_real_escape_string($db, $_POST['class']);

		// form validation: ensure that the form is correctly filled
		if (empty($fullname)) { array_push($errors, "Your fullname is required"); }
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($class)) { array_push($errors, "Class is required"); }
		 header("refresh: 3;");
		

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = $password_1;//encrypt the password before saving in the database
			$query = "SELECT * FROM  student_data WHERE username = '$username' LIMIT 1";
				$data = mysqli_query($db, $query);

				if (mysqli_fetch_array($data) == 0){

			$query = "INSERT INTO student_data (fullname, username, password, email, class) 
					  VALUES('$fullname', '$username', SHA('$password'), '$email', '$class')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			array_push($errors, "You have successfully registered");
		} else {
			array_push($errors, "Username already exist" );
		}

		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		

		if (count($errors) == 0) {
			$query = "SELECT * FROM student_data WHERE username='$username' AND password=SHA('$password')";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index1.php');
			}else {
				array_push($errors, "Wrong username and password");
				header("refresh: 3;");
			}
		}
	}

?>