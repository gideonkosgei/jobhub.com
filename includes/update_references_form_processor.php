<?php
session_start();
$session=$_SESSION["session_email"];
$ref_id=$_SESSION['ref_id'];
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

$sql=mysql_query("UPDATE job_seeker_reference SET sir_name='$sir_name',first_name='$first_name',last_name='$last_name',occupation='$occupation',organisation='$organisation',telephone='$telephone',postal_address='$postal_address',post_code='$postal_code',city='$city',email_address='$email_address' WHERE user='$ids' AND ref_id='$ref_id'");
if(!$sql)
{
die("update error!");
}
else
{
echo"<script type='text/javascript'>alert('details updated');";
				  echo"window.location='../job_seeker_update.php'";
echo"</script>";
}

?>