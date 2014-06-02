<?php session_start();?>
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
<!-----------------------------------------------start of network------------------------------------------------------------->
    <div id="container"><!---start of container-->

        
    
<!------------------------start of header------------------------------------------------------------>
		<div id="header">
		<?php include("includes/header.php");?>
		<?php include("includes/admin_view_deactive.php");?>
            </div><!------------------------------end of header --------------------------------------------->
		
             <!-------------------start of main content body------------------->
        <div class="main_content2">
        <div class="details">
           		  <table width="592" border="0">
  <tr><td></td><td><u><b>username</b></u></td><td><u><b>email</b></u></td><td><u><b>deactivation date</b></u></td><td>&nbsp;</td></tr>
<?php
$no=0;
while($row=mysql_fetch_array($query))

{
echo"<form method='post' action='includes/activate_account.php'><tr><td>".++$no."</td><td>".$row['username']."</td><td>".$row['email']."</td><td>".$row['date']."</td><td><input type='hidden' value=$row[id] name='id'><input type='submit' value='activate'></td></tr></form>";
}
?>
</table>

        
          </div>    
                  </div><!---end of container------>  
                          
<div id="foot_notes"><?php include("includes/footer.php");?></div>
			<div class="clearer">&nbsp;</div>




</div><!---end of container------> 
	
</body>
</html>