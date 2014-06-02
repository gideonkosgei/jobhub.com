
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
		
		
	<?php include("includes/view_applied_jobs.php");?>
		
      <div class="main_content2">  
 
     <div class="details">
       <table width="200" border="0">
         <tr>
           <th width="3%">&nbsp;</th>
		   <th width="9%"><u>company</u></th>
           <th width="11%"><u>post applied</u></th>
           <th width="9%"><u>terms</u></th>
		    <th width="7%"><u>date applied</u></th>
                    </tr>
		<?php 
		$no=1;
		while($job=mysql_fetch_array($sql)) 
		{
		echo"<tr><td>".$no."</td><td>".$job['business_name']."</td><td>".$job['post_vacant']."</td><td>".$job['terms_of_service']."</td><td>".$job['date']."</td></tr>";
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