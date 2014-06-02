<?php
session_start();
$ids=$_SESSION["user_id"];

include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$id=mysql_result($id,0);
$sql=mysql_query("SELECT * FROM job_seeker_general_info WHERE member_id=$ids");
$sql1=mysql_query("SELECT * FROM job_seeker_edu_background WHERE id=$ids");
$sql2=mysql_query("SELECT * FROM job_seeker_emp_history WHERE user_id=$ids ");
$sql3=mysql_query("SELECT * FROM job_seeker_languages WHERE user_id=$ids");
$sql4=mysql_query("SELECT * FROM job_seeker_reference WHERE user=$ids");
$row=mysql_fetch_array($sql);

?>