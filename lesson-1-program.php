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
	<title>Lesson 1 </title>
<link rel="stylesheet" href="lesson1-program-styles.css">	
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>	

</head>
<body onLoad="MM_preloadImages('images/next-hover.png')" >

	<div class="container-index">  <!-- The container wraps all the entire webpage  -->
<div class="header-index">  <!-- This is the container of the header section  -->
    
        <div id = "topic">
        
          <h1 class="topic">MODULE 1: What is Computer Program?</h1>    
        
    </div>
    <div class="logout-index">  
    
    <p id = "logout-index"> <a href="index1.php" >EXIT</a> </p> 
    </div>


</div>  <!-- The header section ends here  -->

<div class="lesson1-mainbody"> <!-- The lessons icons like lesson1 . . . begins here  -->
	<div class="program-txt">

<button onclick="document.getElementById('summaryprogram-wrapper').style.display='block'" id = "register">
        <p class="click">Click to read Summary </p>
          
        </button>

<div id="summaryprogram-wrapper" class="modal">

<div class="form-close">
          <span onclick="document.getElementById('summaryprogram-wrapper').style.display='none'" class="close" title="Close Popup"> 
                        &#215; </span>
             </div>


<p> A computer program is a set of instructions that guide a computer to perform some series of processing functions in order to achieve an objective. </p>

<p> A computer instruction can be carried out (execute) when the computer reads the instruction (program), and then follows the steps encoded in the instruction (program) in a specific order until completion. </p> 

<p>A program can be executed many different times, with each execution yielding a potentially different result depending on the data and options that the user gives the computer.</p>

</div>
<script>
	
	var modal = document.getElementById('summaryprogram-wrapper');
	window.onclick=function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>
</div>	

<div class="program-video">
<video id = "video"  src="videos/program_latest1.mp4" width = "620" height = "350" 
	preload = "auto" 
	controls
	autoplay
	poster = "images/background/what.jpg"
 > 
	Program </video>

	</div>

	<div class="next-div">
	
<div id="next">
<a href="lesson-1-xtics.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','images/next-hover.png',1)"><img src="images/next.png" alt="Begin" name="Image2" width="200" height="77" border="0"></a>

</div>
</div>



	
		

		
	</div> <!-- Main container ends here-->
		
</body>
</html>