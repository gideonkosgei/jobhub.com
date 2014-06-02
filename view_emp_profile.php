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
    <div id="container"><!---start of container-->

    
<!------------------------start of header------------------------------------------------------------>
		<div id="header">
		<?php include("includes/header.php");?>
            </div><!------------------------------end of header --------------------------------------------->
		 <table border="0"> <tr><td align="center"><?php include("includes/nav1.php");?></td></tr></table>
       
        <!-------------------start of main content body------------------->
		
			<?php include("includes/emp_details_view_processor.php");?>
        <div class="main_content2">
        <div class="details">
        <div class="emp_profile_details">
		 <div class="view_app_title"><h3>profile details</h3></div>
        
        <table width="200px" border="0" cellpadding="3">
  <tr>
    <td width="20%"><b>COMPANY NAME</b></td>
      <td ><?php echo $row['business_name']; ?></td>
	  </tr>
	  <tr>
    <td ><B>COMPANY CATEGORY</B></td>
	  <td><?php echo $row['category']; ?></td>
  </tr>
  <tr>
    <td><b>INDUSTRY TYPE</b></td>
    <td><?php echo $row['industry']; ?></td>
  </tr>
  <tr>
    <td><b>CATEGORY</b></td>
    <td><?php echo $row['category']; ?></td>
  </tr>
  <tr>
        <td><b>SPECIALITY</b></td>
    <td><?php echo $row['speciality']; ?></td>
  </tr>
  
  <tr>
    <td><b>TELEPHONE</b></td>
      <td><?php echo $row['telephone']; ?></td>
	  </TR>
	  <tr>
    <td><b>EMAIL</b></td>
    <td> [  <?php echo $_SESSION['session_email']?>  ]</td>
  </tr>
  <tr>
    <td><b>ADDRESS</b></td>
      <td><?php echo $row['postal_address']."-".$row['postal_code']." ".$row['city'];?></td>
	  </tr>
	  
  </tr>
</table>        
</div>
<div class="clearer">&nbsp;</div>
</div>

</div><!-----end of main content--------->
                 
           <div id="foot_notes">
<?php include("includes/footer.php");?>
</div>   
<div class="clearer">&nbsp;</div>
</div><!---end of container>
	
</body>
</html>>>