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
	<title>register</title>
</head>
<body>
<!-----------------------------------------------start of network------------------------------------------------------------->
    <div id="container"><!---start of container-->

        
    
<!------------------------start of header------------------------------------------------------------>
		<div id="header">

<?php include("includes/header.php");?>
            </div><!------------------------------end of header --------------------------------------------->
		 <table border="0"> <tr><td align="center"><?php include("includes/nav1.php");?></td></tr></table>
       
        <!-------------------start of main content body------------------->
        <div class="main_content2">
        <div class="details">
        
		  <?php echo"<h3> Hi ".$_SESSION['username']." -welcome to employer's portal</h3><br/>";?>
		 
<br/>
<table width="592" border="0">
  <tr>
    <td width="204"><div class="dashboard"><a href="emp_register.php"><h3>create profile</h3></a></div></td>
  
    <td width="209"><div class="dashboard"> <a href="emp_add_job.php"><h3>post job</h3></a></div></td>
	<td width="94">&nbsp;</td>
		<td width="57">&nbsp;</td>
  </tr>
  <tr>
    <td><div class="dashboard"><a href="view_emp_profile.php"><h3>view profile</h3></a></div></td>
   
    <td><div class="dashboard">  <a href="view_jobs_posted.php"><h3>view postings</h3></a></div></td>
	<td>&nbsp;</td>
		<td>&nbsp;</td>
  </tr>
  <tr>
    <td><div class="dashboard"><a href="emp_register_update.php"><h3>edit profile</h3></a></div></td>

    <td><div class="dashboard"><a href="emp_view_applications.php"><h3>view applications</h3></a></div></td>
	<td>&nbsp;</td>
		<td>&nbsp;</td>
  </tr>
</table>
</table>
        </div><!-----end of details--------->
 </div><!-----end of main content--------->
   <div id="foot_notes"><?php include("includes/footer.php");?></div>
  <div class="clearer">&nbsp;</div>

</div><!---end of container-->
</body>
</html>