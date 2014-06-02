
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
		<table border="0"> <tr><td align="center"><?php include("includes/nav.php");?></td></tr></table>
       
        <!-------------------start of main content body------------------->
		
		
		<?php include("includes/js_reference_view.php");?>
		
      <div class="main_content2">  
 
     <div class="details">
       <table width="200" border="0">
         <tr>
           <th width="3%">&nbsp;</th>
           <th width="10%"><u>name</u></th>
		   <th width="10%"><u>occupation</u></th>
           <th width="7%"><u>company</u></th>
           <th width="8%"><u>country</u></th>
		   <th width="8%"><u>address</u></th>
		   <th width="8%"><u>email</u></th>
            <th width="13%"><u>action</u></th>
         </tr>
		<?php 
		$no=1;
		while($ref=mysql_fetch_array($sql)) 
		{
		echo"<form method='post' action='includes/js_delete_update_reference.php'><tr><td>".$no."</td><td>".$ref['sir_name']." ".$ref['first_name']." ".$ref['last_name']."</td><td>".$ref['occupation']."</td><td>".$ref['organisation']."</td><td>".$ref['telephone']."</td><td>".$ref['postal_address']."-".$ref['post_code']." ".$ref['city']."</td><td>".$ref['email_address']."</td><td><input type='hidden' value=$ref[ref_id] name='ref_ID'><input type='submit'name='edit'value='edit'><input type='submit'name='delete'value='delete'></a></td></tr></form>";
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
</div><!---end of container-->

</body>
</html>