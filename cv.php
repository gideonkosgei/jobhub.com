<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content=""/>
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<link rel="stylesheet" type="text/css" href="style2.css" media="screen" />	
	
	<SCRIPT LANGUAGE="JavaScript">


<!-- 
function printCV(text){
text=document
print(text)

}
// -->
</script>
<link rel="shortcut icon" type="image/x-icon" href="img/macros.png" />
	
<title>curriculum vitae</title>
</head>
<body>
<div id="cvBody">
<DIV ALIGN="CENTER">
<FORM>
<INPUT NAME="print" TYPE="button" VALUE="Print this Document!"
ONCLICK="printCV()" id="btn">
</FORM>
<!-----------------------------------------------start of network------------------------------------------------------------->
<?php include("includes/j_s_view_all_details.php");?>


    <div id="cv">
	<table width="90%" border="0" cellpadding="10px" cellspacing="10px"><tr><td>
    <hr align="center" color="#000000" width="100%" size="1px"/>
      <div class="cv_titles"><h3>CURRICULUM VITAE</h3></div>
      <div class="cv_sectors">
      </td></tr><tr><td>
      
       <table width="78%" height="240" border="0" align="left">
      <tr>
        <td width="16%"><b>NAME</b></td>
        <td width="2%">:</td>
        <td width="82%"><?php echo $row['last_name']." ".$row['first_name']." ".$row['middle_name']; ?></td>
      </tr>
	  <tr>
    <td><b>ID NUMBER</b></td>
	<td width="2%">:</td>
    <td><?php echo $row['national_id'];?> </td>
  </tr>
      <tr>
        <td><b>ADDRESS</b></td>
        <td>:</td>
        <td><?php echo $row['postal_address']."-".$row['postal_code']." ".$row['residential_address'];?></td>
      </tr>
      <tr>
        <td><b>EMAIL</b></td>
        <td>:</td>
        <td><?php echo$_SESSION["session_email"]; ?></td>
      </tr>
      <tr>
        <td><b>PHONE</b></td>
        <td>:</td>
        <td><?php echo $row['telephone'];?></td>
      </tr>
      <tr>
        <td><b>D.O.B</b></td>
        <td>:</td>
        <td><?php echo $row['DOB'];?></td>
      </tr>
      
      <tr>
        <td><b>MARITAL STATUS</b></td>
        <td>:</td>
        <td><?php echo $row['marital_status'];?></td>
      </tr>
	  
    </table>
  
    
        </td></tr><tr><td>
     
        <div class="cv_titles">
		
		<h3>LANGUAGE PROFICIENCY</h3></div>
         </td></tr><tr><td>
        <div class="cv_sectors">
        
        <table width="100%" border="0">
  <tr align="left">
   <th scope="col">&nbsp;</th>
    <th scope="col"><u>LANGUAGE</u></th>
    <th scope="col"><u>READ</u></th>
    <th scope="col"><u>WRITE</u></th>
    <th scope="col"><u>SPEAK</u></th>
  </tr>
   <?php 
   $no=1;
  while($lang=mysql_fetch_array($sql3))
  {
  echo"<tr><td>".$no."</td><td>".$lang['language']."</td><td>".$lang['js_read']."</td><td>".$lang['js_write']."</td><td>".$lang['js_speak']."</td></tr>";
  $no++;
  } 
  
  ?>
</table>
 <hr align="center" color="#000000" width="100%" size="1px"/>
        </div>
          </td></tr><tr><td>
         <div class="cv_titles"><h3>EDUCATION BACKGROUND</h3></div>
           </td></tr><tr><td>
         <div class="cv_sectors">
         <table width="100%" border="0">
  <tr align="left">
    <th width="3%" scope="col">&nbsp;</th>
    <th width="13%" scope="col"><u>UNIVERSITY</u></th>
       <th width="10%" scope="col"><u>LEVEL</u></th>
    <th width="12%" scope="col"><u>CERTIFICATE</u></th>
    <th width="17%" scope="col"><u>COURSE WORK</u></th>
    <th width="20%" scope="col"><u>ACCOMPLISHMENTS</u></th>
    <th width="8%" scope="col"><u>FROM</u></th>
    <th width="6%" scope="col"><u>TO</u></th>
  </tr>
  <?php  
  $no=1;
  while($edu=mysql_fetch_array($sql1))
  {
  echo"<tr><td>".$no."</td><td>".$edu['university_name']."</td><td>".$edu['main_course']."</td><td>".$edu['degree_diploma']."</td><td>".$edu['course_work']."</td><td>".$edu['academic_accomplishments']."</td><td>".$edu['attended_from']."</td><td>".$edu['attended_to']."</td></tr>";
  $no++;
  } 
  
  ?>
</table>
 <hr align="center" color="#000000" width="100%" size="1px"/>
         </div>
           </td></tr><tr><td>
          <div class="cv_titles"><h3>EMPLOYMENT HISTORY</h3></div>
            </td></tr><tr><td>
          <div class=" cv_sectors">
          <table width="100%" border="0">
  
  <tr align="left">
    <th width="3%" scope="col">&nbsp;</th>
    <th width="15%" scope="col"><u>COMPANY</u></th>
    <th width="14%" scope="col"><u>INDUSTRY</u></th>
    <th width="18%" scope="col"><u>TITLE</u></th>
    <th width="28%" scope="col"><u>RESPONSIBILIES HELD</u></th>
    <th width="11%" scope="col"><u>FROM</u></th>
    <th width="11%" scope="col"><u>TO</u></th>
  </tr>
  <?php
  $no=1;
  while($emp=mysql_fetch_array($sql2))
  {
  echo"<tr><td>".$no."</td><td>".$emp['employer_name']."</td><td>".$emp['type_of_industry']."</td><td>".$emp['job_title']."</td><td>".$emp['responsibilities_held']."</td><td>".$emp['date_from']."</td><td>".$emp['date_to']."<td></td></tr>";
  $no++;
  } 
  
  ?>
</table>

 <hr align="center" color="#000000" width="100%" size="1px"/>
          </div>
            </td></tr><tr><td>
           <div class="cv_titles"><h3>REFEREES</h3></div>
             </td></tr><tr><td>
           <div class="cv_sectors">
           <table width="100%" border="0" bordercolor="#000000">
  <tr align="left">
    <th width="3%" scope="col">&nbsp;</th>
    <th width="19%" scope="col"><u>NAME</u></th>
    <th width="14%" scope="col"><u>ORGANISATION</u></th>
    <th width="13%" scope="col"><u>OCCUPATION</u></th>
    <th width="13%" scope="col"><u>TELEPHONE</u></th>
    <th width="16%" scope="col"><u>EMAIL</u></th>
    <th width="22%" scope="col"><u>POSTAL ADDRESS</u></th>
  </tr>
   <?php 
   $no=1;
  while($ref=mysql_fetch_array($sql4))
  {
  echo"<tr><td>".$no."</td><td>".$ref['sir_name']." ".$ref['first_name']." ".$ref['last_name']."</td><td>".$ref['organisation']."</td><td>".$ref['occupation']."</td><td>".$ref['telephone']."</td><td>".$ref['email_address']."</td><td>".$ref['postal_address'].'-'.$ref['post_code']." ".$ref['city']."</td></tr>";
  $no++;
  } ?>
  </table>
           </div>

        
      </td></tr></table>
</div><!------------------------------------------------------end of container------------------------------------------------------------->
</div><!-----end of cv body--->
	
</body>
</html>


