<?php
session_start();
$session=$_SESSION["session_email"];

include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);

$sql=mysql_query("SELECT date,business_name,post_vacant,terms_of_service FROM applications,employer_job_post,employer_details WHERE employer_details.id=employer_job_post.employer_id=applications.emp_id=(SELECT emp_id FROM applications WHERE user_id='$ids')");

?>