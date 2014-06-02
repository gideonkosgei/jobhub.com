
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
<!-----------------------------------------------start of network------------------------------------------------------------->
    <div id="container"><!---start of container-->

   
<!------------------------start of header------------------------------------------------------------>
		<div id="header">
		<?php include("includes/header.php");?>
            </div><!------------------------------end of header --------------------------------------------->
		
       <table border="0"> <tr><td align="center"><?php include("includes/nav.php");?></td></tr></table>
        <!-------------------start of main content body------------------->
		
		
		<?php include("includes/js_emp_hist_view.php");?>
		
      <div class="main_content2">  
 
     <div class="details">
       <table width="200" border="0">
         <tr>
           <th width="3%">&nbsp;</th>
           <th width="10%"><u>company</u></th>
		           <th width="7%"><u>post</u></th>
           <th width="8%"><u>industry</u></th>
           <th width="10%"><u>date_from</u></th>
           <th width="9%"><u>date_to</u></th>
           		   <th width="13%"><u>action</u></th>
         </tr>
		<?php 
		$no=1;
		while($emp=mysql_fetch_array($sql)) 
		{
		echo"<form method='post' action='includes/js_delete_update_emp.php'><tr><td>".$no."</td><td>".$emp['employer_name']."</td><td>".$emp['job_title']."</td><td>".$emp['type_of_industry']."</td><td>".$emp['date_from']."</td><td>".$emp['date_to']."</td><td><input type='hidden' value=$emp[job_history_id] name='emp_ID'><input type='submit'name='edit'value='edit'><input type='submit'name='delete'value='delete'></td></tr></form>";
$no++;
}
	   ?>
	   </table>
  </div>
  </div>
<div id="foot_notes">
<?php include("includes/footer.php");?>
</div>
  <div class="clearer">&nbsp;</div>



</div><!---end of container>

</body>
</html>