<?php
session_start();
$session=$_SESSION["session_email"];
$session;
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
$ids;

$sql=mysql_query("UPDATE employer_details SET business_name='$business_name',industry='$industry',category='$category',postal_address='$postal_address',postal_code='$postal_code',city='$city',speciality='$speciality',telephone='$telephone'");
if(!$sql)
{
die("details not UPDATED!");
}
else
{
	echo"<script type='text/javascript'>alert('details updated');";
				  echo"window.location='../employer_profile.php'";
echo"</script>";

}
?>