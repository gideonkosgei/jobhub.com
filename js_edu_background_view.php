
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
    <div id="container"><!---start of container-->

        
    
<!------------------------start of header------------------------------------------------------------>
		<div id="header">
<?php include("includes/header.php");?>
		
            </div><!------------------------------end of header --------------------------------------------->
		
       <table border="0"> <tr><td align="center"><?php include("includes/nav.php");?></td></tr></table>
        <!-------------------start of main content body------------------->
		
		
		<?php include("includes/js_view_edu.php");?>
		
      <div class="main_content2">  
 
     <div class="details">
       <table width="200" border="0">
         <tr>
           <th width="3%">&nbsp;</th>
           <th width="11%"><u>university name</u></th>
           <th width="19%"><u>attended from</u></th>
           <th width="16%"><u>atteded to</u></th>
		   <th width="16%"><u>level</u></th>
           <th width="13%"><u>degree/diploma</u></th>
		   <th width="11%"><u>action</u></th>
         </tr>
		<?php 
		$no=1;
		while($edu=mysql_fetch_array($sql)) 
		{
		echo"<form method='post' action='includes/js_delete_update_edu.php'><tr><td>".$no."</td><td>".$edu['university_name']."</td><td>".$edu['attended_from']."</td><td>".$edu['attended_to']."</td><td>".$edu['main_course']."</td><td>".$edu['degree_diploma']."</td><td><input type='hidden' value=$edu[edu_id] name='edu_ID'><input type='submit' name='edit'value='edit'><input type='submit'name='delete'value='delete'></td></tr><form>";
$no++;
}
	   ?>
	   </table>
  </div>
  </div><!---end of main-content--->    
            <div id="foot_notes"><?php include("includes/footer.php");?></div>    
              

			<div class="clearer">&nbsp;</div>



</div><!---end of container>

 	
</body>
</html>