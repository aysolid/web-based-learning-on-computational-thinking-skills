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
<link rel="stylesheet" href="helpdesk.css">

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
<li > <a href="about.php"> About </a></li>
<li > <a href="guidelines.php"> Guidelines </a></li>
<li class="helpdesk"> <a href="helpdesk.php"> HelpDesk </a></li>    
</ul>

</nav>
</div>  <!-- The menutop div ends here  -->

<div class="helpdeskmainbody">  <!-- This is the container containing the body part of the homepage The
    main body is divided into coloums namely: body1, body2 and body3...   -->
    <div class="helpdesk-img">
        <img src="images/help-support.png" alt="HelpDesk Support" width="250px" height="210">
    </div>
  <div class="mainbody-helpdesk">
<div class="mainbody-helpdesk-txt">
<h3 class="how">How would you want us to help you?
    
</h3> 


<p id="olguidelines" >
<ol >
<li>I can't access my account </li>
<li>I forgot my password </li>
<li>I'm having issues loggin in  </li>
<li>I want to change my password </li>
<li>Others </li>

</ol>
</p> 


<p class="helpdeskbody">Forward your complains to <a href="davidogundairo@gmail.com">davidogundairo@gmail.com</a>

</p>
<p class="helpdeskbody1">All complains will be responded to within 24 hours</p>

</div>

  </div>


</div>  <!-- This is the end of the main body of the homepage  -->







</div>     <!-- The main container of the entire webpage ends here  -->

</body>
</html>