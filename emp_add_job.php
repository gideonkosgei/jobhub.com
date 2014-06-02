<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content=""/>
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<script type="text/javascript" src="js/datetimepicker.js"></script>
	<link rel="stylesheet" type="text/css" href="style2.css" media="screen" />
		<script type="text/javascript" src="js/sliderman.1.3.7.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sliderman.css" />
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
      <div class="main_content2">  


     <div class="details">
	 <h3>enter job details</h3>
	 <form method="POST" action="includes/emp_add_job_processor.php">
     <table width="100%" border="0" cellpadding="5">
  <tr>
    <td>
     <br/>
    post vacant<br/>
    <input type="text"name="emp_vacant"size="25" required/>
    </td>
    <td>
     <br/>
    positions<br/>
      <input type="number"name="emp_positions"size="25" required/>
    </td>
    <td>
     <br/>
    application deadline<br/>
      <input type="text"name="deadline"size="25"id="date1"required/><a href="javascript:NewCal('date1','ddmmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
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
      <textarea cols="25" rows="5" name="emp_description"required>
      </textarea>
    </td>
    <td> <br/>
    qualifications<br/>
      <textarea cols="25" rows="5" name="emp_qualifications"required>
      </textarea>

    </td>
    <td>
     <br/>
   preferences<br/>
      <textarea cols="25" rows="5" name="emp_preferences">
      </textarea>

    </td>
    <td>&nbsp;
    </td>
  </tr>
  
</table>
<input type="submit" value="enter details"/>
</form>

   </div>
 
  </div><!---end of container-->
  <div id="foot_notes"><?php include("includes/footer.php");?></div>
<div class="clearer">&nbsp;</div>
</div><!---end of container-->

</body>
</html>