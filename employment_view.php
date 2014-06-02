<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
	
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

        
    

   
    
<!------------------------start of header------------------------------------------------------------>
		<div id="header">
		<?php include("includes/header.php");?>
            </div><!------------------------------end of header --------------------------------------------->
		<table border="0"> <tr><td align="center"><?php include("includes/nav.php");?></td></tr></table>
		
       
        <!-------------------start of main content body------------------->
		<?php include("includes/emp_job_hist_update.php");?>
             <div class="main_content2">  
     <div class="details">
	 <h3>update employment history details</h3>
       <form action="includes/update_emp_hist_form_processor.php" method="post">
    <table width="100%" border="0" cellpadding="5">
  <tr>
    <td width="37%">
    
    <br/>
    job title<br/>
    <input type="text"name="job_title" value="<?php echo $emp['job_title'];?>"size="25"required/>
    <br/>
    </td>
    <td width="34%">name of employer<br/>
    <input type="text"name="employer_name" value="<?php echo $emp['employer_name'];?>"size="25"required/>
      </td>
    <td width="29%">type of industry<br/>
          <input type="text"name="industry_type" value="<?php echo $emp['type_of_industry'];?>"size="25"required/>
       </td>
  
  </tr>
    <tr>
    <td>
    
    <br/>from(mm-dd-yyyy)<br/>
        <input type="text"name="emp_from" size="25" value="<?php echo $emp['date_from'];?>"id="date7"/><a href="javascript:NewCal('date7','ddmmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
        </td>
    <td>to(mm-dd-yyyy)<br/>
         <input type="text"name="emp_to" size="25"value="<?php echo $emp['date_to'];?>" id="date2"/><a href="javascript:NewCal('date2','ddmmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
        </td>
    <td>&nbsp;    </td>
  </tr>
  <tr>
    <td><br/>
    <b>responsibilies and duties held</b><br>
    <textarea cols="30"rows="5" name="resp">
	<?php echo $emp['responsibilities_held'];?>
    </textarea>
    </td>
    <td>
    <b>reasons for departure</b><br>
    <textarea cols="30"rows="5" name="depart">
   <?php echo $emp['reasons_for_departure'];?>
    </textarea>
    </td>
    <td>&nbsp;</td>
  </tr>
</table>
<input type="submit" value="enter details"/>
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