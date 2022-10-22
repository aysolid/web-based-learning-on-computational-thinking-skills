<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Computer Assisted Instructional Package</title>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="popup.css">
<link rel="stylesheet" href="stylesform.css">

</head>
<body> <!--  -->
<div class="container">  <!-- The container wraps all the entire webpage  -->
<div class="header">  <!-- This is the container of the header section  -->
    <div id="img-header">
    <img src="images/CAI image.jpg" alt="COMPUTER ASSISTED INSTRUCTION" class="cai-img">
        <!-- 
        <h1 class="cai">COMPUTER ASSISTED INSTRUCTION</h1>
            <p class="computer_studies"> on Computer Studies</p>
        -->
    </div>

    <div class="login-header"> <!-- The login header section begins here-->
<div class="header-form">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="header-form">
        <?php include('errors.php'); ?>

<input type="text" name="username" id="username" size="20" maxlength="50" placeholder="Username" require="required">
<input type="password" name="password" id="password" size="20" maxlength="50" placeholder="Password" require="required"> 
<input type="submit" name="login_user"   value="LOGIN" id="header-login">

</form>

</div> 

<div class="logininfo">
<p> Please enter your login info to begin the lesson</p>
</div>

</div><!-- The login header section ends here  -->

</div>  <!-- The header section ends here  -->

<div class="menutop">  <!-- The contains the menutop like home, about, guidelines and co  -->
   <nav id="menutop">  
    <ul class="mainmenu">
<li > <a href="index.php"> Home </a></li>
<li class="about"> <a href="about.php"> About </a></li>
<li > <a href="guidelines.php"> Guidelines </a></li>
<li > <a href="helpdesk.php"> HelpDesk </a></li>    
</ul>

</nav>
</div>  <!-- The menutop div ends here  -->

<div class="aboutmainbody">  <!-- This is the container containing the body part of the homepage The
    main body is divided into coloums namely: body1, body2 and body3...   -->
  <div class="mainbody-about">
<div class="mainbody-about-txt">

<p>The role and importance of computer to our daily life and society at large cannot be overemphasized.
    This brought about the introduction of Computer Studies into secondary school education. 
    
</p> 
<p>This package is designed to educate students on the concepts of Program development, Algorithm and Flowcharts
    
<p>Advantages of using this package includes;</p>
<p>
<ul>
<li>It is self-taught</li>
<li>Students can learn at their own pace</li>
<li>The ideas in the package development can be used in other subject areas</li>
<li>It provide feedback on students' progress</li>
<li>It is capable of captivating students' interest and retaining it.</li>
</ul>

</p>
<p>It is hoped that at the end of learning with this package, students should
    be able to understand the basics of program development, algorithm and flowchart.
</p>

</div>

  </div>


</div>  <!-- This is the end of the main body of the homepage  -->






</div>     <!-- The main container of the entire webpage ends here  -->

</body>
</html>