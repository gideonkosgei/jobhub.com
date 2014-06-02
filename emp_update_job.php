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
	<script type="text/javascript" src="js/datetimepicker.js"></script>
	<!-- /sliderman.js -->
	<link rel="shortcut icon" type="image/x-icon" href="img/macros.png" />
	<title>jobHub</title>
</head>
<body>
    <div id="container"><!---start of container-->

        

  
   
<!------------------------start of header------------------------------------------------------------>
		<div id="header">
		 <?php include("includes/header.php");?>
            </div><!------------------------------end of header --------------------------------------------->
		<table border="0"> <tr><td align="center"><?php include("includes/nav1.php");?></td></tr></table>
       
        <!-------------------start of main content body------------------->
		<?php include("includes/emp_job_update_view.php")?>
		
      <div class="main_content2">  
<div class="details">
	 <form method="POST" action="includes/update_job_form_processor.php">
     <table width="100%" border="0" cellpadding="5">
  <tr>
    <td>
     <br/>
    post vacant<br/>
    <input type="text"name="emp_vacant"value="<?php echo $row['post_vacant']?>"size="25"required/>
    </td>
    <td>
     <br/>
    positions<br/>
      <input type="number"name="emp_positions"value="<?php echo $row['positions']?>"size="25"required/>
    </td>
    <td>
     <br/>
    application deadline<br/>
      <input type="text"name="deadline"value="<?php echo $row['deadline']?>"size="25"id="date1"required/><a href="javascript:NewCal('date1','ddmmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
    </td>
    <td>
     <br/>
    terms of service<br/>
    <select name="terms_service">
    <option value="permanent">permanent</option>
    <option value="temporary">temporary</option>
    <option value="contract">contract</option>
    </select>
    </td>
  </tr>
  <tr>
    <td>
    <br/>
    job description<br/>
      <textarea cols="25" rows="5"  name="emp_description" required>
	  <?php echo $row['job_description'];?>
      </textarea>
    </td>
    <td> <br/>
    qualifications<br/>
      <textarea cols="25" rows="5" name="emp_qualifications" required>
	 <?php echo $row['qualifications'];?>
      </textarea>

    </td>
    <td>
     <br/>
   preferences<br/>
      <textarea cols="25" rows="5" name="emp_preferences" required>
	  <?php echo $row['preferences'];?>
      </textarea>

    </td>
    <td>&nbsp;
    </td>
  </tr>
  
</table>
<input type="submit" value="update details"/>
<input type="submit" value="clear details"/>
</form>


 </div>
  </div>
 <div id="foot_notes">
<?php include("includes/footer.php");?>
</div>
<div class="clearer">&nbsp;</div>



</div><!---end of container>

</body>
</html>