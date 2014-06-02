
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>

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
		
		
		<?php include("includes/js_view_all_jobs_processor.php");?>
		
      <div class="main_content2">  
 
     <div class="details">
       <table width="200" border="0">
         <tr>
           <th width="3%">&nbsp;</th>
		   <th width="9%"><u>company</u></th>
           <th width="11%"><u>post_vacant</u></th>
           <th width="9%"><u>positions</u></th>
		    <th width="7%"><u>date posted</u></th>
           <th width="7%"><u>deadline</u></th>
           <th width="8%"><u>terms</u></th>
		    <th width="17%"><u>job description</u></th>
           <th width="15%"><u>qualification</u></th>
	        <th width="14%"><u>preferences</u></th>
		   <th width="7%"><u>action</u></th>
         </tr>
		<?php 
		$no=1;
		while($job=mysql_fetch_array($sql)) 
		{
		echo"<form method='post' action='includes/application.php'><tr><td>".$no."</td><td>".$job['business_name']."</td><td>".$job['post_vacant']."</td><td>".$job['positions']."</td><td>".$job['date_posted']."</td><td>".$job['deadline']."</td><td>".$job['terms_of_service']."</td><td>".$job['job_description']."</td><td>".$job['qualifications']."</td><td>".$job['preferences']."</td><td><input type='hidden' value=$job[employer_id] name='emp_ID'><input type='hidden' value=$job[job_id] name='job_ID'><input type='submit'value='apply'></td></tr></form>";
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