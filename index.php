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
<li class="home"> <a href="index.php"> Home </a></li>
<li> <a href="about.php"> About </a></li>
<li > <a href="guidelines.php"> Guidelines </a></li>
<li > <a href="helpdesk.php"> HelpDesk </a></li>    
</ul>

</nav>
</div>  <!-- The menutop div ends here  -->

<div class="mainbody">  <!-- This is the container containing the body part of the homepage The
    main body is divided into coloums namely: body1, body2 and body3...   -->
   <div class="body1"> <!-- Body 1 begins here-->
<div class="body1txt">
    <p>Computer literacy in this century is inevitable for
        every individual in the society. 
        Many people all over the world use some form of 
        a computer every day. Having a general understanding 
        of computers can help you function in today's world and it 
        can prevent you from getting left behind.</p>
        <p id="ready">Are you ready for today's lesson?</p>
</div>
<hr>
<div class="body1img">
    <img  src="images/img1.jpg" alt="" width="100%" height="200">
</div>
   </div> <!-- Body 1 begins here-->

   <div class="body2"> <!-- Body 2 begins here-->
<div class="body2login">
<h2>LOGIN</h2>
<hr>

<div class="new"> <!--Registration for new students begins here-->
<h3>NEW STUDENT</h3>
<button onclick="document.getElementById('modal-wrapper').style.display='block'" id = "register">
        <p class="click">Click to Register </p>
          
        </button>

        <div id="modal-wrapper" class="modal">

                <form class="modal-content animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                
                    <fieldset class="fieldset1">
	                   <?php include('errors.php'); ?>
                            <legend> Student's Registration </legend>
                            <div class="form-close">
                              <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close Popup"> 
                                            &#215; </span>
                            </div>
                            
                            <div class="form-container"> 
                                    
                            <label for="fullname" class="title"> Fullname: </label>
                            <input class="reg" type="text" name="fullname" value="<?php echo $fullname; ?>"  require="required" placeholder="Surname before firstname" /> </div>
                            
                            <div class="form-container">
                            <label for="username" class="title"> Username: </label>
                            <input  class="reg" type="text" name="username"  value="<?php echo $username; ?>" require="required" placeholder="Enter your username"/> 
                            </div>
                            
                            <div class="form-container">
                            
                            <label for="password1" class="title"> Password: </label>
                            <input  class="reg" type="password" name="password_1" require="required" placeholder="Enter your password"/> 
                            </div>
                            <div class="form-container">
                            
                            <label for="password2"    class="title" id="password2"> Confirm Pass: </label>
                            <input   class="reg" type="password" name="password_2" require="required" placeholder="Confirm your password" /> 
                            </div>
                            
                            <div class="form-container">
                            
                            <label for="email" class="title"> Email: </label>
                            <input  class="reg" type="text" name="email" value="<?php echo $email; ?>" require="required" placeholder="Enter your email address"/> </div>
                            
                            <div class="form-container">
                            
                                <label for="class" class="title"> Class: </label>
                                <input  class="reg" type="text" name="class" value="<?php echo $class; ?>" require="required"  placeholder="Enter your class and classarm"/> </div>

                            
                            <div class="form-submit">
                            <input type="submit" name="reg_user" value="Register" id="submit" />
                            
                             </div>
                            
                            </fieldset>
                
                
                </form>
                
                
                </div>



<script>
	
	var modal = document.getElementById('modal-wrapper');
	window.onclick=function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>




</div> <!--Section for new registration ends here-->
<div class="login"> <!--LOGIN for registered students begins here-->
    <br>
    <hr>
    <h3>REGISTERED STUDENT</h3>
    <button onclick="document.getElementById('login-wrapper').style.display='block'" id = "login">
            <p class="click-login">LOGIN to begin the Lesson </p>
              
            </button>
    
            <div id="login-wrapper" class="modal-login">
    
                    <form class="modal-content animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <?php include('errors.php'); ?>
                        <fieldset class="fieldset1">
        
                                <legend> LOGIN TO BEGIN THE LESSON </legend>
                                <div class="form-close">
                                  <span onclick="document.getElementById('login-wrapper').style.display='none'" class="close" title="Close Popup"> 
                                                &#215; </span>
                                </div>
                                
                                <div class="form-container"> 
                                        
                                <label for="username" class="title"> Username: </label>
                                <input class="reg" type="text" name="username"  required="required" placeholder="Enter your Username"/> </div>
                                
                                <div class="form-container">
                                <label for="password" class="title"> Password: </label>
                                <input  class="reg" type="password" name="password" required="required" placeholder="Enter your Password"/> 
                                </div>
                                
                                
                                <div class="form-submit">
                                <input type="submit" name="login_user" value="LOGIN" id="submit" />
                                
                                 </div>
                                
                                </fieldset>
                    
                    
                    </form>
                    
                    
                    </div>
    
    
    
    <script>
        
        var modal = document.getElementById('login-wrapper');
        window.onclick=function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>



</div>

</div>

   </div> <!-- Body 2 ends here-->

   <div class="body3" > <!-- Body 3 begins here-->
<div class="body3img">
    <img src="images/img3.jpg" alt="" width="100%" height="200">
</div>
<div class="body3txt">

</div>
<p class="body3p">Why should you learn and master program development
   at this level?   

</p>
<p class="body3p">Can you code? Can you program? Can you design?</p>
<p id="body3p">Your journey begins here with CAIP!!!</p>

   </div> <!-- Body 3 begins here-->




</div>  <!-- This is the end of the main body of the homepage  -->


<div class="footer"> <!-- Footer section beigns here-->
<div class="footercopyright"> 
    <p> &copy Copyright 2020 </p>
    <p>Edt Unilorin</p>
</div>

<div class="footerdesign"> 
    <p>Designed by Ogundairo David</p>
    

</div>


</div>




</div>     <!-- The main container of the entire webpage ends here  -->

</body>
</html>