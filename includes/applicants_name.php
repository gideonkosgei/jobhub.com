<?php
session_start();
$session=$_SESSION["session_email"];
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$sql=mysql_query("SELECT post_vacant,first_name,last_name,date,national_id,telephone,app_id,user_id FROM job_seeker_general_info,applications,employer_job_post WHERE job_seeker_general_info.member_id=applications.user_id AND employer_job_post.job_id=applications.job_id AND 	emp_id='$ids'");


?>