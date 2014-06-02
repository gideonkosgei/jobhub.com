<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content=""/>
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<link rel="stylesheet" type="text/css" href="style2.css" media="screen" />
		<script type="text/javascript" src="js/sliderman.1.3.7.js"></script>
		<script type="text/javascript" src="js/datetimepicker.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sliderman.css" />
	<!-- /sliderman.js -->
	<link rel="shortcut icon" type="image/x-icon" href="img/macros.png" />
	<title>jobHub</title>
</head>
<body>
    <div id="container"><!---start of container-->

        

   
    
	
		<div id="header">
		<?php include("includes/header.php");?>
            </div><!------------------------------end of header --------------------------------------------->
		<table border="0"> <tr><td align="center"><?php include("includes/nav.php");?></td></tr></table>
		
       
        <!-------------------start of main content body------------------->
		<?php include("includes/emp_education_update_view.php");?>
		
<div class="main_content2">
    <div class="details">
	 <h3>education background updates</h3>
      <form action="includes/update_edu_back_form_processor.php" method="POST">
	  
    <table width="100%" border="0" cellpadding="5">
  <tr>
    <td width="43%">university name<br/>
    <input type="text" name="university" value="<?php echo $edu['university_name'];?>"size="25"required/>    </td>
    <td width="55%">
    &nbsp;   </td>
  </tr>
  
  <tr>
    <td>
    attended from (mm-dd-yyyy)<br/>
    <input type="text" name="attended_from" value="<?php echo $edu['attended_from'];?>"size="25"id="date7"/><a href="javascript:NewCal('date7','ddmmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>  
      </td>
    <td>
    attended to(mm-dd-yyyy)<br/>
    <input type="text" name="attended_to"size="25" value="<?php echo $edu['attended_to'];?>"id="date2"/><a href="javascript:NewCal('date2','ddmmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
        </td>
  </tr>
  <tr>
    <td>degree or diploma attained<br/>
    <input type="text" name="deg_attained" value="<?php echo $edu['degree_diploma'];?>"size="25"required/>    </td>
    <td>main course of study<br/>
    <input type="text" name="course_attended" value="<?php echo $edu['main_course'];?>"size="25"required/>    </td>
  </tr>
  <tr>
    <td>
    list of completed course work<br/>
    <textarea cols="40"rows="5" name="coursework">
	<?php echo $edu['course_work'];?>
    </textarea></td>
<td>
list of academic accomplishments<br/>
    <textarea cols="40"rows="5" name="accomplishments">
	<?php echo $edu['academic_accomplishments'];?>
    </textarea></td> 
  </tr>
</table>
<input type="submit" value="enter details"/>
</form>
   </div>
</div>
  <div id="foot_notes"><?php include("includes/footer.php");?></div>

			<div class="clearer">&nbsp;</div>
</div><!---end of container>

</body>
</html>