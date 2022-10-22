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
	
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="style-welcome.css">
<link rel="stylesheet" href="popup.css">
<link rel="stylesheet" href="stylesform.css">
<link rel="stylesheet" href="index1-styles.css">

<style type="text/css">
a:link {
	color: darkblue;
	
  }	
  
  .sub-lesson a:link{
  	color: snow;
  }
.sub-lesson a:visited{
	color: snow;
}
.sub-lesson a:hover{
	color: red;
	height:100%;
	width: 100%;
	background-color: beige;
}
.sub-lesson a:focus{
	color: khaki;
}

</style>

</head>
<body >
<audio src="audio/index1sound.mp3"
 autoplay loop>
<p>This browser does not support our audio
format.</p>
</audio>
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
</div>  <!-- The menutop div ends here  -->

<div class="index1-mainbody"> <!-- The lessons icons like lesson1 . . . begins here  -->
	<div class="lesson">
<p class="sub-lesson"> <a href="lesson-1.php">Lesson 1  </a></p>
<p class="sub-lesson"><a href="lesson-2/lesson-2.php">Lesson 2  </a></p>
<p class="sub-lesson"> <a href="lesson-3/lesson-3.php">Lesson 3  </a></p>

	</div> <!-- The lessons  div ends here  -->
	<div class="pointer">
	<p id = "pointer">
	Algorithms and flowcharts
	 are two different tools used for creating new
	  programs, especially in computer programming. 
	  An algorithm is a step-by-step analysis of the process, 
	  while a flowchart explains the steps of a program in a 
	  graphical way.
	</p>
	
	</div>

	<div class="anim">
	<video src="videos/back-flowchart2.mp4" 
	width = "580" height = "370" 
	preload = "auto" 
	autoplay 
	loop >
	Flo flo flo . . . .  chart 
	</video>
	
	</div>
	

</div>





	


	
		

		<?php endif ?>
	</div>

	<div class="footnote"> <marquee id="scroll" scrolldelay="0" width="80%"> 
		<p>Welcome <?php echo $_SESSION['username']; ?>, kindly select your preferred lesson to begin today's work </p>
		</marquee>

	</div>
		
</body>
</html>