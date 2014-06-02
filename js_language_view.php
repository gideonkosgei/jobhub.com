
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
		
       
        <!-------------------start of main content body------------------->
		
		
		<?php include("includes/js_language_view.php");?>
		
      <div class="main_content2">  
 
     <div class="details">
       <table width="200" border="0">
         <tr>
           <th width="3%">&nbsp;</th>
           <th width="10%"><u>language</u></th>
		   <th width="10%"><u>read</u></th>
           <th width="7%"><u>write</u></th>
           <th width="8%"><u>speak</u></th>
           
		   <th width="13%"><u>action</u></th>
         </tr>
		<?php 
		$no=1;
		while($lang=mysql_fetch_array($sql)) 
		{
		echo"<tr><td>".$no."</td><td>".$lang['language']."</td><td>".$lang['js_read']."</td><td>".$lang['js_write']."</td><td>".$lang['js_speak']."</td><td><a href=emp_update_job.php><input type='button'value='edit'></a><a href=#><input type='button'value='delete'></a></td></tr>";
$no++;
}
	   ?>
	   </table>
  </div>
        
                 <!----------------------end of main content body and start of main content side bar------------------->
               
               <!-----------------------------end of main _content and start of ----------------------------->
              
              
                <div class="content-separator"></div>
              

			<div class="clearer">&nbsp;</div>



</div><!---end of container>
<!--end of footer-->

</div>
  <!-- ------------------------end of main_content---------------------------->


</div>
 
<!------------------------------------------------------end of container------------------------------------------------------------->
<div id="foot_notes">
<?php include("includes/footer.php");?>
</div>
 <div class="footer_div">
		<div id="footer">

			<div class="left">&copy;<script type="text/javascript">var d= new Date();var year=d.getYear();
			document.write(year);</script><span class="text-separator">&rarr;</span> <a href="#">Home</a> <span class="text-separator">|</span><a href="#">News</a> <span class="text-separator">|</span> <a href="#">Politics</a> <span class="text-separator">|</span> <a href="#">Culture</a> <span class="text-separator">|</span> <a href="#">Sports</a> <span class="text-separator">|</span> <a href="#">advertisement</a> <span class="text-separator">|</span> <a href="#">Entertainment</a></div>
	
</body>
</html>