<?php
session_start();
$session=$_SESSION["session_email"];
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$sir_name=$_POST['ref_sir_name'];
$first_name=$_POST['ref_first_name'];
$last_name=$_POST['ref_last_name'];
$occupation=$_POST['ref_occupation'];
$organisation=$_POST['ref_bed_name'];
$telephone=$_POST['telephone'];
$postal_address=$_POST['ref_address'];
$postal_code=$_POST['ref_postal_code'];
$city=$_POST['ref_city'];
$email_address=$_POST['ref_email'];

$sql=mysql_query("INSERT INTO job_seeker_reference(sir_name,first_name,last_name,occupation,organisation,telephone,postal_address,post_code,city,email_address,user) VALUES('$sir_name','$first_name','$last_name','$occupation','$organisation','$telephone','$postal_address','$postal_code','$city','$email_address','$ids')");
if(!$sql)
{
die("details not entered");
}
else
{
echo"<script type='text/javascript'>alert('details entered successfully');";
				  echo"window.location='../job_seeker_profile_build.php'";
echo"</script>";
}

?>