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

$sql=mysql_query("UPDATE  job_seeker_general_info SET first_name='$firstname',last_name='$lastname',middle_name='$middlename',national_id='$id_number',DOB='$DOB',marital_status='$marital_status',gender='$gender',postal_address='$postal_address',residential_address='$residential_address',postal_code='$postal_code',telephone='$telephone' WHERE member_id=$ids"); 
if(!$sql)
{
die("details not UPDATED");
}
else
{
echo"<script type='text/javascript'>alert('details updated');";
				  echo"window.location='../job_seeker_update.php'";
echo"</script>";

}


?>

