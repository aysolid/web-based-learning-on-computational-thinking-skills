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
