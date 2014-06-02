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
		<table width="200px">
		<form action="includes/upload.php" method="post" enctype="multipart/form-data">
		<tr><td width="150px">upload cv </td><td width="100px"><input type="file" name="cv"size="10"/></td><td><input type="submit" value="upload"/></td></tr>
		</form>
		<form action="includes/upload_update.php" method="post" enctype="multipart/form-data">
		<tr><td>change uploaded cv</td><td><input type="file" name="cv"size="10"/></td><td><input type="submit" value="change"/></td></tr>
		</form>
		</table>
 
</div><!-----end of details2---------> 
</div><!-----end of main content--------->              






<div id="foot_notes">
<?php include("includes/footer.php");?>
</div>
 <div class="clearer">&nbsp;</div>
</div><!----------------end of container------------------------>
 



	
</body>
</html>