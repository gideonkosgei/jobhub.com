<?php
session_start();
$session=$_SESSION['session_email'];
$id=$_SESSION['app_id'];
include("database.php");
/*$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);*/
$user=mysql_query("SELECT user_id FROM applications WHERE app_id='$id'");
$u_id=mysql_result($user,0);
$sql=mysql_query("SELECT * FROM job_seeker_general_info WHERE member_id='$u_id'");
$sql1=mysql_query("SELECT * FROM job_seeker_edu_background WHERE id='$u_id'");
$sql2=mysql_query("SELECT * FROM job_seeker_emp_history WHERE user_id='$u_id'");
$sql3=mysql_query("SELECT * FROM job_seeker_languages WHERE user_id='$u_id'");
$sql4=mysql_query("SELECT * FROM job_seeker_reference WHERE user='$u_id'");
$sql5=mysql_query("SELECT email FROM registration WHERE user_id='$u_id'");
$row=mysql_fetch_array($sql);
$email=mysql_fetch_array($sql5);

?>