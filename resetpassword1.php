<?php 
	session_start();

	// variable declaration
	 $servername = "localhost";
	 $username = "root";
	 $password = "Computer2013";
	 $dbname = "registration";
	 $password1 = "";
	 $username1 = "";

     //create connection 
	  $conn = new msqli ($servername, $username, $password, $dbname);
	  //check connection 
	  if ($conn->connect_error) {
	  	die("Connection failed: " . $conn->connect_error);
	  }

   if (isset($_POST['reset_pass'])) {
		// receive all input values from the form
		$username1 = mysqli_real_escape_string($db, $_POST['username']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		
		$password1 = md5($password_1);


    $sql = "UPDATE student_data SET password='$password1' WHERE username=$username1";

    if ($conn->query($sql) === TRUE) {
	echo "Record updated successfully";
    } else {
	   echo "Error updating record: " . $conn->error;
      }

$conn->close();
?>