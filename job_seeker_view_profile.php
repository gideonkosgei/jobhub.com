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
		
       
        <!-------------------start of main content body------------------->
		
		 <?php include("includes/j_s_view_all_details.php");?>
		
        <div class="main_content2">
          <div class="details">
             <div id="view_application_details">   
      <div class="view_details2">
        <table width="100%" border="0" cellpadding="2">
  <tr>
    <td width="34%"><b>NAME</b></td>
    <td width="66%"><?php echo $row['last_name']." ".$row['first_name']." ".$row['middle_name']; ?> </td>
  </tr>
  <tr>
    <td><b>ID NUMBER</b></td>
    <td><?php echo $row['national_id'];?> </td>
  </tr>
  <tr>
    <td><b>EMAIL</b></td>
    <td><?php echo$_SESSION["session_email"]; ?></td>
  </tr>
  <tr>
    <td><b>DOB</b></td>
    <td><?php echo $row['DOB'];?> </td>
  </tr>
  <tr>
    <td height="30"><b>GENDER</b></td>
    <td><?php echo $row['gender'];?> </td>
  </tr>
</table>
</div>
<div class="view_app_title"><h3>contact information</h3></div>
<div class="view_details2">
<table width="90%" border="0" cellpadding="3">
  <tr>
    <td width="21%"><b>MOBILE</b></td>
    <td width="30%"><?php echo $row['telephone'];?> </td>
    <td width="15%">&nbsp;</td>
    <td width="34%">&nbsp;</td>
  </tr>
  <tr>
    <td><b>ADDRESS</b></td>
    <td><?php echo $row['postal_address']."-".$row['postal_code']." ".$row['residential_address'];?> </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
</table>
</div>
<div class="view_app_title"><h3>education background</h3></div>
<div class="view_details2">
<table width="100%" border="0" cellpadding="3">
  <tr>
    <td width="32%"><b><u>UNIVERSITY</u></b></td>
    <td width="33%"><b><u>COURSE STUDIED</u></b></td>
    <td width="35%"><b><u>COMPLETION YEAR</u></b></td>
  </tr>
  <?php 
  while($edu=mysql_fetch_array($sql1))
  {
  echo"<tr><td>".$edu['university_name']."</td><td>".$edu['degree_diploma']."</td><td>".$edu['attended_to']."</td></tr>";
  
  } 
  
  ?>
</table>

</div>
<div class="view_app_title"><h3>employment history</h3></div>
<div class="view_details2">
<table width="100%" border="0" cellpadding="3">
  <tr>
    <td><b>COMPANY</b></td>
    <td><b>POSITION</b></td>
    <td><b>FROM</b></td>
    <td><b>TO</b></td>
  </tr>
  <?php 
  while($emp=mysql_fetch_array($sql2))
  {
  echo"<tr><td>".$emp['employer_name']."</td><td>".$emp['job_title']."</td><td>".$emp['date_from']."</td><td>".$emp['date_to']."<td></td></tr>";
  
  } 
  
  ?>
</table>

</div>
<div class="view_app_title"><h3>language proficiency</h3></div>
<div class="view_details2">
<table width="100%" border="0" cellpadding="3">
  <tr>
    <td><b>language</b></td>
    <td><b>read</b></td>
    <td><b>write</b></td>
    <td><b>speak</b></td>
  </tr>
  
    <?php 
  while($lang=mysql_fetch_array($sql3))
  {
  echo"<tr><td>".$lang['language']."</td><td>".$lang['js_read']."</td><td>".$lang['js_write']."</td><td>".$lang['js_speak']."</td></tr>";
  
  } 
  
  ?>

  
</table>

</div>
<div class="view_app_title"><h3>references</h3></div>
<div class="view_details2"><table width="100%" border="0" cellpadding="3">
  <tr>
    <td width="36%"><b>NAME</b></td>
    <td width="35%"><b>OCCUPATION</b></td>
    <td width="29%"><b>COMPANY</b></td>
  </tr>
  <?php 
  while($ref=mysql_fetch_array($sql4))
  {
  echo"<tr><td>".$ref['sir_name']." ".$ref['first_name']." ".$ref['last_name']."</td><td>".$ref['organisation']."</td><td>".$ref['occupation']."</td></tr>";
  
  } 
  
  ?>
  
</table>
</div>


 </div>

        </div>
        
               </div><!-----end of main content--------->
               
              

			<div class="clearer">&nbsp;</div>




</div><!---end of container>
<!--end of footer-->

</div>
  <!-- ------------------------end of main_content---------------------------->


</div>
 
<!------------------------------------------------------end of container------------------------------------------------------------->
<div id="foot_notes">
<?php include("includes/footer.php");?>
</div>
 <div class="footer_div">
		<div id="footer">

			<div class="left">&copy;<script type="text/javascript">var d= new Date();var year=d.getYear();
			document.write(year);</script><span class="text-separator">&rarr;</span> <a href="#">Home</a> <span class="text-separator">|</span><a href="#">News</a> <span class="text-separator">|</span> <a href="#">Politics</a> <span class="text-separator">|</span> <a href="#">Culture</a> <span class="text-separator">|</span> <a href="#">Sports</a> <span class="text-separator">|</span> <a href="#">advertisement</a> <span class="text-separator">|</span> <a href="#">Entertainment</a></div>
	
</body>
</html>