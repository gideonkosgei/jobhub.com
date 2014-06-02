<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	
	<link rel="stylesheet" type="text/css" href="style2.css" media="screen" />
		<script type="text/javascript" src="js/sliderman.1.3.7.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sliderman.css" />
	
	<link href="themes/2/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/2/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
	
	<link rel="shortcut icon" type="image/x-icon" href="img/macros.png" />
	<title>jobHub</title>
	
</head>
<body>

    <div id="container_index"><!---start of container-->

   
<!------------------------start of header------------------------------------------------------------>
<div id="header">

<?php include("includes/header_index.php");?>

</div><!------------------------------end of header --------------------------------------------->
		
       
        <!-------------------start of main content body------------------->
	<div class="main_content2">
        <div class="main_content"><!--start of sliderman-->  
		
       <div id="slider">
            <a href="http://www.menucool.com/jquery-slider" target="_blank">
                <img src="images5/image-slider-1.jpg" alt="Welcome to jQuery Slider" />
            </a>
            <img src="images5/image-slider-2.jpg" alt="Pure Javascript. No jQuery. No Flash." />
            <img src="images5/image-slider-3.jpg" />
            <img src="images5/image-slider-4.jpg" />
        </div>
        <!--thumbnails-->
        <div id="thumbs">
            <div class="thumb">
                <div class="frame"><img src="images5/thumb1.jpg" /></div>
                <div class="thumb-content"><p>HTML Contents</p>Thumbnails allows any HTML content</div>
                <div style="clear:both;"></div>
            </div>
            <div class="thumb">
                <div class="frame"><img src="images5/thumb2.jpg" /></div>
                <div class="thumb-content"><p>Customizable</p>Thumbnail style is customizable</div>
                <div style="clear:both;"></div>
            </div>
            <div class="thumb">
                <div class="frame"><img src="images5/thumb3.jpg" /></div>
                <div class="thumb-content"><p>Variety of Layouts</p>Just a CSS tweak.</div>
                <div style="clear:both;"></div>
            </div>
            
        </div>

        <!--clear above float:left elements. It is required if above #slider is styled as float:left. -->
        <div style="clear:both;height:0;"></div>
   



				
				
    
	</div><!--end of main content--><!--end of sliderman-->
<div class="main_content_side_bar">

   
<form action="includes/login.php"method="post" name="login"/>
<table width="95%" border="0" cellpadding="5">
  <tr align="left">
    <td width="26%">email</td>
    <td width="66%">
    <input type="email"name="login_email" size="20"required/>    </td>
  </tr> 
  <tr align="left">
    <td>password</td>

    <td>
      <input type="password"name="login_password" size="20"required/>    </td>
  </tr align="left">
  <tr> 
    <td>&nbsp;</td>
  
    <td>
      <input type="submit"value="login"/>
      <input type="reset"value="clear"/>    </td>
  </tr>
  <tr><td>&nbsp;</td><td> <a href="register.php"><img src="img/register.png"width="115"height="39" /></a></td></tr>
  </table>
 
   
	 


</form><!-- ------------------------end of main_content---------------------------->
</div></div>
<div class="sectors">
<div class="sectors_photo">
<img src="img/miss.png" />
</div>
<div class="sectors_text">
		<p>Due to the economic, social, psychological hardships that occur during the period of unemployment, Kenyans are gradually seeking opportunities within borders and without .The ICT industry being a key area of economic growth, It is foreseen to relay more job opportunities in Kenya  as the people warm up to new technologies and grow in awareness and appreciation of the same. </p>
       <p> Job hub  is a vital connection joint that tries to make the whole process around hiring and getting hired a simpler process that doesn’t involve some many steps and doest weight the pockets of the actors down.</p>
<p> CREATE an account and build your profile and you can enjoy our services. you can post jobs,search jobs receive applications.CV generation has been automated and you can print from the site</p>
	   </div>

</div>

<div id="foot_notes">
<?php include("includes/footer.php");?>
</div>

</div><!-------end of container---------->



		
	
</body>
</html>