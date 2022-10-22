<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: ../index.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Lesson 2 Summary </title>
<link rel="stylesheet" href="lesson2-summary-styles.css">	
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
<body onLoad="MM_preloadImages('../images/next-hover.png')" >
<audio src="../audio/lesson-2-summary.mp3"
control autoplay>
<p>This browser does not support our audio
format.</p>
</audio>
	<div class="container-index">  <!-- The container wraps all the entire webpage  -->
<div class="header-index">  <!-- This is the container of the header section  -->
    
        <div id = "topic">
        
          <h1 class="topic">Summary  </h1>    
        
    </div>
    <div class="logout-index">  
    
    <p id = "logout-index"> <a href="../index1.php" >EXIT</a> </p> 
    </div>


</div>  <!-- The header section ends here  -->

<div class="lesson1-mainbody"> <!-- The lessons icons like lesson1 . . . begins here  -->
	<div id="subbody">  <!-- Sub main body that wraps
	the main summary --> <!-- -->
		
	<div class="program-txt">
	<h2>Definition</h2>
		<p id="program-intro"> An algorithm is a set of instructions used to solve a problem in whatever form. </p>
		<p id="program-intro">
		A flowchart is a diagrammatic representation of the logic of a program  </p>
 </p>
	</div>

	<div class="program-txt">
	<h2>Functions/Uses</h2>
<ol>
<li>to aid writing of programs</li>
<li>for calculation</li>
<li>for data processing </li>
<li>for clarifying the logic of problems</li>
<li>serve as aid to program coding</li>




</ol>
    
</div>	

<div  class="program-txt1">

<h2>Types of Flowchart</h2>
<ol>
<li>Block flowchart</li>
<li>System flowchart</li>
<li>Procedure flowchart</li>
<li>Program flowchart</li>



</ol>
    
	</div>



</div>

	<div class="next-div">
	
<div id="next">
<a href="lesson2finishfinish.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','../images/next-hover.png',1)"><img src="../images/next.png" alt="Begin" name="Image2" width="200" height="77" border="0"></a>

</div>
</div>



	
		

		
	</div> <!-- Main container ends here-->
		
</body>
</html>