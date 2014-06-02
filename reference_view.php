<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
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
		<table border="0"> <tr><td align="center"><?php include("includes/nav.php");?></td></tr></table>
		
       
        <!-------------------start of main content body------------------->
		<?php include("includes/emp_job_reference_view.php");?>
		<div class="main_content2">
<div class="details">

<h3>REFERENCES UPDATES</h3>

<form method="POST"action="includes/update_references_form_processor.php">
<table width="97%" border="0" cellpadding="5">
  <tr>
    <td width="27%">
    <br/>
    sir name<br>
    <input type="text"name="ref_sir_name"  value="<?php echo $ref['sir_name'];?>"size="20"/>
    </td>
    <td width="37%">
    <br/>
    first name<br/>
    <input type="text"name="ref_first_name" value="<?php echo $ref['first_name'];?>"size="20"required/>
    </td>
    <td width="36%">
    <br/>
    last name<br/>
    <input type="text"name="ref_last_name"value="<?php echo $ref['last_name'];?>" size="20"required/>
    </td>
  </tr>
  <tr>
    <td>
    <br/>
    occupation<br/>
    <input type="text"name="ref_occupation" value="<?php echo $ref['occupation'];?>"size="20"required/>
    </td>
    <td>
    <br/>
    organisation/business name<br/>
    <input type="text"name="ref_bed_name" value="<?php echo $ref['organisation'];?>"size="25"required/>
    </td>
    <td>
    <br/>
    telephone<br/>
    <input type="number" size="25" name="telephone"value="<?php echo $ref['telephone'];?>"required>
    </td>
  </tr>
  <tr>
    <td>
    <br/>
    address<br/>
      <input type="number"name="ref_address" value="<?php echo $ref['postal_address'];?>"size="20"required/>
    </td>
    <td>
    <br/>
    postal code<br/>
      <input type="number"name="ref_postal_code" value="<?php echo $ref['post_code'];?>"size="20"required/>
    </td>
    <td>
    <br/>
    city<br/>
      <input type="text"name="ref_city" value="<?php echo $ref['city'];?>"size="20"required/>
    </td>
  </tr>
  <tr>
    <td>
    <br/>
    email address<br/>
      <input type="email"name="ref_email" value="<?php echo $ref['email_address'];?>"size="20"required/>
    </td>
    <td>&nbsp;</td>
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



</div><!---end of container----->

</body>
</html>