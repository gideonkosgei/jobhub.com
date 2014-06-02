<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content=""/>
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<link rel="stylesheet" type="text/css" href="style2.css" media="screen" />
		<script type="text/javascript" src="js/sliderman.1.3.7.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sliderman.css" />
	<!-- /sliderman.js -->
	<link rel="shortcut icon" type="image/x-icon" href="img/macros.png" />
	<title>build profile</title>
</head>
<body>
<!-----------------------------------------------start of network------------------------------------------------------------->
    <div id="container"><!---start of container-->

        
    
<!------------------------start of header------------------------------------------------------------>
		<div id="header">
		<?php include("includes/header.php");?>
            </div><!------------------------------end of header --------------------------------------------->
		<table border="0"> <tr><td align="center"><?php include("includes/nav.php");?></td></tr></table>
      
        <!-------------------start of main content body------------------->
        <div class="main_content2">
        <div class="details">
           
		  <table width="592" border="0">
  <tr>
    <td width="204"><div class="dashboard"><a href="home.php"><h3>bio data</h3></a></div></td>
  
    <td width="209"><div class="dashboard"><a href="language.php"><h3>languages</h3></a></div></td>
	<td width="94">&nbsp;</td>
		<td width="57">&nbsp;</td>
  </tr>
  <tr>
    <td><div class="dashboard"><a href="education.php"><h3>education details</h3></a></div></td>
   
    <td><div class="dashboard"> <a href="references.php"><h3>references</h3></a></div></td>
	<td>&nbsp;</td>
		<td>&nbsp;</td>
  </tr>
  <tr>
    <td><div class="dashboard"><a href="employment.php"><h3>employment details</h3></a></div></td>

    <td>&nbsp;</td>
	<td>&nbsp;</td>
		<td>&nbsp;</td>
  </tr>
</table>

        
          </div>    
                  </div><!---end of container------>  
                          
<div id="foot_notes"><?php include("includes/footer.php");?></div>
			<div class="clearer">&nbsp;</div>




</div><!---end of container------> 
	
</body>
</html>