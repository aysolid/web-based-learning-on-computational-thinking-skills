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
<!DOCTYPE html>
<html>
<head>
	<title>Lesson Homepage</title>
<link rel="stylesheet" href="index1-styles.css"><link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="style-welcome.css">
<link rel="stylesheet" href="stylesform.css">

</head>
<body >

	<div class="container-index">  <!-- The container wraps all the entire webpage  -->
<div class="header-index">  <!-- This is the container of the header section  -->
    <div id="img-header-index">
    <img src="images/CAI image.jpg" alt="COMPUTER ASSISTED INSTRUCTION" class="cai-img">
        <!-- 
        <h1 class="cai">COMPUTER ASSISTED INSTRUCTION</h1>
            <p class="computer_studies"> on Computer Studies</p>
        -->
    </div>

<!-- Welcome message -->
		<div class="welcome-message">
		<!-- -->
		<div id="welcome-message">
		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p class="welcome"><strong class="user-welcome"><?php echo $_SESSION['username']; ?></strong>, you are welcome  to today's lesson</p>
			</div>
</div> <!-- Welcome Message ends here -->

</div>  <!-- The header section ends here  -->

<div class="menutop-index1">  <!-- The contains the menutop like home, about, guidelines and co  -->
   <div class="home-index">  
    <p id = "home-index"> <a href="index1.php">
    Home </a> </p>
    </div>
    <div class="objectives-index">  
    <p id = "objectives-index"> <a href="index1-objectives.php">
    Learning Goals </a> </p>
    </div>

<div class="logout-index">  
    
<p id = "logout-index"> <a href="index1.php?logout='1'" >Logout</a> </p> 
</div>
</div> <!-- The menutop div ends here  -->
 <div class="mainbody-objectives"> <!-- The main body of objectives begins here  -->

 <div class="minibody-objectives">
 
 <p id="at-the-end"> At the end of lesson, you should be able to: </p>
         
 
  <p id="objective_1" class="objective"> 1.   define computer program; </p>

<p id="objective_1" class="objective"> 2.  list the steps involved in program development; </p>

<p class="objective" id="objective_2">3.    define algorithm and flowchart; 
</p>    
        

<p class="objective" id="objective_3">4.   state the functions of algorithm and flowchart;    </p>
        
<p id="objective_4" class="objective">5.   highlight the types of flowchart; </p>    
        
<p id="objective_5" class="objective">6.   list flowchart symbols.</p>    
        


        

  </div> <!-- The mini main body ends here  -->


</div>  <!-- The main body of objectives ends here  -->
 
 
 
 
 
 
 
 
 
 </div>






	


	
		

		<?php endif ?>
	</div>
		
</body>
</html>