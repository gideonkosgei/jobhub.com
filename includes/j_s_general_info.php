<?php
session_start();
$session=$_SESSION["session_email"];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$middlename=$_POST['middlename'];
$id_number=$_POST['id_number'];
$DOB=$_POST['DOB'];
$gender=$_POST['gender'];
$marital_status=$_POST['marital'];
$postal_address=$_POST['P_address'];
$residential_address=$_POST['R_address'];
$postal_code=$_POST['P_code'];
$telephone=$_POST['telephone'];
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);

$sql=mysql_query("INSERT INTO job_seeker_general_info( member_id,first_name,last_name,middle_name,national_id,DOB,marital_status,gender,postal_address,residential_address,postal_code,telephone) VALUES('$ids','$firstname','$lastname','$middlename','$id_number','$DOB','$marital_status','$gender','$postal_address','$residential_address','$postal_code','$telephone')");
if(!$sql)
{
echo"<script type='text/javascript'>alert('profile already exists');";
				  echo"window.location='../home.php'";
echo"</script>";
}
else
{
echo"<script type='text/javascript'>alert('details entered');";
				  echo"window.location='../job_seeker_profile_build.php'";
echo"</script>";

}


?>

