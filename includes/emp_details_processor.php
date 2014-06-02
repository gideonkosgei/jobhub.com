<?php
session_start();
$session=$_SESSION["session_email"];
$business_name=$_POST['bed_name'];
$industry=$_POST['industry'];
$category=$_POST['emp_category'];
$postal_address=$_POST['emp_postal_address'];
$postal_code=$_POST['emp_code'];
$city=$_POST['emp_city'];
$speciality=$_POST['emp_speciality'];
$telephone=$_POST['emp_tel'];

include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);


$sql=mysql_query("INSERT INTO employer_details( id,business_name,industry,category,postal_address,postal_code,city,speciality,telephone) VALUES('$ids','$business_name','$industry','$category','$postal_address','$postal_code','$city','$speciality','$telephone')");
if(!$sql)
{
echo"<script type='text/javascript'>alert('you already have a profile');";
				  echo"window.location='../employer_profile.php' </script>";

}
else
{
echo"<script type='text/javascript'>alert('profile succesfully build');";
				  echo"window.location='../employer_profile.php' </script>";

}
?>