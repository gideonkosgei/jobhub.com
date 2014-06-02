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
$job_id=$_SESSION['job_id'];

$sql=mysql_query("UPDATE employer_job_post SET post_vacant='$post',positions='$positions',deadline='$deadline',terms_of_service='$terms',job_description='$description',qualifications='$qualification',preferences='$preferences' WHERE employer_id='$ids' AND job_id='$job_id'");
if(!$sql)
{
die("update error!");
}
else
{
echo"<script type='text/javascript'>alert('job details updated');";
				  echo"window.location='../view_jobs_posted.php'";
echo"</script>";

}
?>