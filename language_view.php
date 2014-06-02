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
		<?php include("includes/emp_language_update_view.php");?>
		
        

 

     <div class="details">
	  <h3>LANGUAGE PROFICIENCY UPDATES</h3>
	 <form action="includes/update_language_form_processor.php"method="POST">
     
    <table width="100%" border="0" cellpadding="5">
  <tr>
    <td><br/>
    language
     <input type="text" name="language" value="<?php echo $lang['language'] ;?>"size="25" required/><br/><br/>
     
    </td>
  </tr>
  <tr>
    <td>
   <b> read</b>
     <input type="radio" name="j_seeker_read" value="easily"  checked="checked"/>easily
     <input type="radio" name="j_seeker_read" value="difficult"  />difficult
     <br/><br/>
    </td>
  </tr>
  <tr>
    <td>
    
    <b>write</b>
     <input type="radio" value="easily"    name="j_seeker_write" checked="checked"/>easily
     <input type="radio" value="difficult" name="j_seeker_write"/>difficult
     <br/><br/>
     </td>
  </tr>
  <tr>
    <td>
    <b>speak</b>
     <input type="radio" value="easily"    name="j_seeker_speak" checked="checked"/>easily
     <input type="radio" value="difficult" name="j_seeker_speak"/>difficult
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<br/>
<input type="submit" value="enter details"/>
</form>

   </div>
   <div id="foot_notes">
<?php include("includes/footer.php");?>
</div>
  <div class="clearer">&nbsp;</div>



</div><!---end of container>

</body>
</html>