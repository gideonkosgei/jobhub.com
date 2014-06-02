<?php
session_start();
$session=$_SESSION["session_email"];
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$post=$_POST['emp_vacant'];
$positions=$_POST['emp_positions'];
$deadline=$_POST['deadline'];
$terms=$_POST['terms_service'];
$description=$_POST['emp_description'];
$qualification=$_POST['emp_qualifications'];
$preferences=$_POST['emp_preferences'];
$date=date("d/m/Y");

$sql=mysql_query("INSERT INTO employer_job_post(employer_id,post_vacant,positions,deadline,terms_of_service,job_description,qualifications,preferences,date_posted) VALUES('$ids','$post','$positions','$deadline','$terms','$description','$qualification','$preferences','$date')");
if(!$sql)
{
die("details not entered");
}
else
{
echo"<script type='text/javascript'>alert('job added');";
				  echo"window.location='../employer_profile.php'";
echo"</script>";

}
?>