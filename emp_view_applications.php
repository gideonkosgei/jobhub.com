<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content=""/>
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<script type="text/javascript" src="js/datetimepicker.js"></script>
	<link rel="stylesheet" type="text/css" href="style2.css" media="screen" />
		<script type="text/javascript" src="js/sliderman.1.3.7.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sliderman.css" />
	<!-- /sliderman.js -->
	
	<title>jobHub</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/macros.png" />
</head>
<body>
    <div id="container"><!---start of container-->

        
   

   
    
	
<!------------------------start of header------------------------------------------------------------>
		<div id="header">
		<?php include("includes/header.php");?>
            </div><!------------------------------end of header --------------------------------------------->
		 <table border="0"> <tr><td align="center"><?php include("includes/nav1.php");?></td></tr></table>
       
        <!-------------------start of main content body------------------->
      <div class="main_content2">  

     <div class="details">
	   <table width="200" border="0" >
         <tr align="left">
           <th width="4%" scope="col">&nbsp;</th>
           <th width="16%" scope="col"><u>NAME</u></th>
           <th width="13%" scope="col"><u>ID</u></th>
           <th width="13%" scope="col"><u>PHONE</u></th>
           <th width="14%" scope="col"><u>POST APPLIED</u></th>
           <th width="16%" scope="col"><u>DATE</u></th>
           <th width="25%" scope="col"><u>ACTION</u></th>
         </tr>
         <?php
		    include("includes/applicants_name.php");
		   $no=1;
		   	   while($post=mysql_fetch_array($sql)){
	   echo "<form action='includes/cv_form_processor.php' method='post'><tr align='left'><td>".$no."</td><td>".$post['first_name']." ".$post['last_name']."</td><td>".$post['national_id']."</td><td>".$post['telephone']."</td><td>".$post['post_vacant']."</td><td>".$post['date']."</td><td><input type='hidden' value=$post[user_id] name='user_id'/><input type='hidden' value=$post[app_id] name='app_id'/><input type='submit' value='system cv' name='cv'/><input type='submit' value='send mail'name='mail'/></td><tr/></form>";
	          $no++;
			  }
	   

		   ?>
       </table> 
    

   </div>
 
  </div><!-------------end of main _content and start of ------------------>
  <div id="foot_notes">
<?php include("includes/footer.php");?>
</div>
<div class="clearer">&nbsp;</div>

</div><!---end of container>

</body>
</html>