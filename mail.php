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
		<?php include("includes/cv_view_by_emp.php");?>
        <div class="main_content2">
        <div class="details">
		<form method="post"action="includes/mail_processor.php">
          <table width="200" border="0">
            <tr>
              <td>EMAIL</td><td align="left"><input name="email" type="text" size="68" value="<?php echo $email['email']; ?>" readonly="true"/></td>
            </tr>
            
            <tr>
              <td>SUBJECT</td><td align="left"><input name="subject" type="text" size="68" required/></td>
            </tr>
           <tr>
            <td>MESSAGE</td><td align="left"><textarea name="message" cols="50" rows="10" required></textarea></td>
            </tr>
            <tr><td></td><td><input type="submit" value="send mail"></td>
            </tr>
          </table>
		  </form>
</div>
               
      </div>
 
<div id="foot_notes">
<?php include("includes/footer.php");?>
</div>
			<div class="clearer">&nbsp;</div>
			</div><!---end of container---->
			
			</body>
</html>