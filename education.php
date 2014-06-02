<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
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
        <div class="clearer">&nbsp;</div>
  
   
     <div class="details">
	 <h3> education details</h3>
      <form action="includes/j_s_edu_back_processor.php" method="POST">
	  
    <table width="100%" border="0" cellpadding="5">
  <tr>
    <td width="43%">university name<br/>
    <input type="text" name="university"size="25" required/>    </td>
    <td width="55%">
    &nbsp; </td>
  </tr>
 
  <tr>
    <td>
    attended from (mm-dd-yyyy)<br/>
    <input type="text" name="attended_from"size="25"id="date7" /><a href="javascript:NewCal('date7','ddmmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>  
      </td>
    <td>
    attended to(mm-dd-yyyy)<br/>
    <input type="text" name="attended_to"size="25"id="date2" /><a href="javascript:NewCal('date2','ddmmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
        </td>
  </tr>
  <tr>
    <td>level of study<br/>
<select name="level">
<option value="certificate">certificate</option>
<option value="diploma">diploma</option>
<option value="degree">degree</option>
<option value="post_graduate_diploma">post-graduate diploma</option>
<option value="masters">masters</option>
<option value="Phd">Phd</option>
</select>    

	</td>
    <td>degree or diploma attained<br/>
    <input type="text" name="deg_attained"size="25"required/>    </td>
  </tr>
  <tr>
    <td>
    list of completed course work<br/>
    <textarea cols="40"rows="5" name="coursework" required>
    </textarea></td>
<td>
list of academic accomplishments<br/>
    <textarea cols="40"rows="5" name="accomplishments" required>
    </textarea></td> 
  </tr>
</table>
<input type="submit" value="enter details"/>
</form>
   </div>
 
  
        
                 <!----------------------end of main content body and start of main content side bar------------------->
               
               <!-----------------------------end of main _content and start of ----------------------------->
              
             
         
              <div id="foot_notes"><?php include("includes/footer.php");?></div>

			<div class="clearer">&nbsp;</div>




</div>
  <!-- ------------------------end of main_content---------------------------->



 
<!------------------------------------------------------end of container------------------------------------------------------------->

 
</body>
</html>