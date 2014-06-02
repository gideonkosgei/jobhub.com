<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content=""/>
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<link rel="stylesheet" type="text/css" href="style2.css" media="screen" />
	

	<link rel="stylesheet" type="text/css" href="css/sliderman.css" />
	<!-- /sliderman.js -->
	
	
<script type="text/javascript">
<!--
function check(form)
{
if(document.form1.register_password.value!=document.form1.confirm_password.value){
alert("password mismatch");
//document.form1.register_password.focus();
return false;
}
else {
return true
}
}
//-->
</script>
	
	<link rel="shortcut icon" type="image/x-icon" href="img/macros.png" />
	<title>register</title>
</head>
<body>
    <div id="container"><!---start of container-->



   
    

<!------------------------start of header------------------------------------------------------------>
		<div id="header">
		<?php include("includes/header.php");?>
            </div><!------------------------------end of header --------------------------------------------->
		
       
        <!-------------------start of main content body------------------->
        <div class="main_content2">
        <div class="details">
        <h3>REGISTRATION</h3>
 <form method="POST" action="includes/register.php" name="form1"onSubmit="return check()">
 <table width="91%" border="0" cellpadding="5">
  <tr>
    <td width="27%">username</td>
    <td width="73%"><input type="text"name="register_user" size="25" required/></td>
    
  </tr>
  <tr>
    <td>email</td>
    <td><input type="email"name="register_email" size="25" required/></td>
    
  </tr>
  <tr>
   <td>category</td>
     <td>
     <select name="category" required>
     <option value="employer">employer</option>
     <option value="job_seeker">job seeker</option>
     </select>
     </td>
     
  </tr>
  <tr>
    <td>password</td>
    <td><input type="password"name="register_password" size="25" required/></td>
    
  </tr>
  <tr>
    <td>confirm password</td>
    <td><input type="password"name="confirm_password" size="25" required/></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
      <td>
      <input type="submit"name="submit" value="register"/>
      <input type="reset"name="reset" value="delete"/>
      </td>
    </tr>
</table>
</form>
</div><!-----end of details2---------> 
</div><!-----end of main content--------->              






<div id="foot_notes">
<?php include("includes/footer.php");?>
</div>
 <div class="clearer">&nbsp;</div>
</div><!----------------end of container------------------------>
 



	
</body>
</html>