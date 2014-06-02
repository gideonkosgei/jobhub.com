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
	
	<title>jobHub</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/macros.png" />
</head>
<body>
    <div id="container"><!---start of container-->

        

   
    
	
<!------------------------start of header------------------------------------------------------------>
		<div id="header">
		<?php require("includes/header.php");?>
            </div><!------------------------------end of header --------------------------------------------->
		 <table border="0"> <tr><td align="center"><?php include("includes/nav1.php");?></td></tr></table>
       
        <!-------------------start of main content body------------------->
		
		<?php include("includes/emp_details_update_processor.php");?>
      <div class="main_content2">  
 
     <div class="details">
     <h3>update registration details</h3>
     <BR/>
     <form method="post" action="includes/emp_details_update_form_processor.php">
    <table width="100%" border="0" cellpadding="5">
  <tr>
    <td>
    business name<br/>
    <input type="text"name="bed_name" value="<?php echo $row['business_name']; ?>"size="25" required/>
    </td>
    <td>
    industry<br/>
      <input type="text"name="industry" value="<?php echo $row['industry']; ?>"size="25" required/>
    </td>
    <td>
    category<br/>
    <select name="emp_category">
    <option value="parastatal">parastatal</option>
     <option value="private">private company</option>
      <option value="NGO">NGO</option>
      <option value="multinational">multiNational</option>
    </select>
    </td>
	<td><br/>
    speciality<br/>
    <input type="text"name="emp_speciality" value="<?php echo $row['speciality']; ?>"size="25" required/>
    </td>
  </tr>
  <tr>
    <td>
    <br/>
	
	postal address<br/>
    <input type="number"name="emp_postal_address" value="<?php echo $row['postal_address']; ?>"size="25" required/>
	
    
    <td><br/>
    postal code<br/>
    <input type="number"name="emp_code" value="<?php echo $row['postal_code']; ?>"size="25" required/>
    </td>
    <td><br/>
    city<br/>
    <input type="text"name="emp_city" value="<?php echo $row['city']; ?>"size="25" required/>
    </td>
    <td><br/>
	telephone<br/>
    <input type="number"name="emp_tel" value="<?php echo $row['telephone']; ?>"size="20" required/>
	
    </td>
  </tr>
    </table>
<br/>
<input type="submit" value="enter details"/>
</form>
<br/>

   </div>
 
  </div><!----------------end of main _content-------->
  <div id="foot_notes">
<?php include("includes/footer.php");?>
</div>
<div class="clearer">&nbsp;</div>



</div><!---end of container--->
</body>
</html>