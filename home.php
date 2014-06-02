<?php
session_start();
?>

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

        
    <!------------------------start of header------------------------------------------------------------>
		<div id="header">
<?php include("includes/header.php");?>
            </div><!------------------------------end of header --------------------------------------------->
		<table border="0"> <tr><td align="center"><?php include("includes/nav.php");?></td></tr></table>
       
        <!-------------------start of main content body------------------->
      <div class="main_content2">  
 
     <div class="details">
	 <h3>general information</h3>
     <form action="includes/j_s_general_info.php" method="post">
 <table width="100%" cellpadding="2px"cellspacing="10px">
  <tr>
    <td>
    first name<br/>
    <input type="text"name="firstname"size="20" required/>
     </td>
    <td>
    last name<br/>
    <input type="text"name="lastname" size="20" required/>
    </td>
    <td>middle name<br/>
    <input type="text"name="middlename" size="20" required/></td>
    <td>  
	id/passport number
	<br/>
	<input type="text"name="id_number" size="20" required/>
    </td>

  </tr>
  <tr>
    <td>
    date of birth(mm-dd-yyyy) <br/>
 <input type="text"name="DOB"  id="date5"/><a href="javascript:NewCal('date5','ddmmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
        </td>
    <td>
    gender<br>
	<select name="gender">
	<option value="male">male</option>
	<option value="female">female</option>
	</select>
    </td>
   
    <td>
    marital status<br/>
	<select name="marital">
	<option value="single">single</option>
	<option value="married">married</option>
	<option value="widowed">widowed</option>
	<option value="separated">separated</option>
	</select>
    </td>
	<td>
	    telephone number<br/>
    <input type="number"name="telephone" required/>

	</td>
  </tr>
  <tr>
  <td width="30%">
    postal address<br/>
    <input type="number"name="P_address"required/>
    </td>
	<td width="40%">
    postal code<br/>
    <input type="number"name="P_code" required/>
    </td>
	<td width="30%">
    residential address<br/>
    <input type="text"name="R_address" required/>
    </td>
	<td width="40%">
    &nbsp;
    </td>
  </tr>
</table>

<input type="submit" value="enter details"/>
</form>
    
</div>



 
  </div><!--------------end of main _content------->
  <div id="foot_notes"><?php include("includes/footer.php");?></div>
<div class="clearer">&nbsp;</div>

</div><!---end of container--->


</body>
</html>