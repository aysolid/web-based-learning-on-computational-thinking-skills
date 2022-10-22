<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: index.php");
	}

?>

<html>
<head>
	<title>Congratulations </title>
<link rel="stylesheet" href="lesson2-finish-styles.css">

</head>
<body>

	<div class="container-index">  <!-- The container wraps all the entire webpage  -->
<div class="header-index">  <!-- This is the container of the header section  -->
<div id="exit">     
<p class = "exit"> <a href="../index1.php" >EXIT</a></p>

</div>

</div>  

<div class="body">
<div class="img">

<p class="congrat">Congratulations <strong class="user-welcome"><?php echo $_SESSION['username']; ?></strong>
</p>
			
<p class = "msg">You have successfully completed Lesson 2</p>
<p class = "msg">Click on <span id = "ext">EXIT</span> to return to homepage</p>
  

</div>


</div>    


</body>
</html>