<?php
session_start();
$session=$_SESSION["session_email"];
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$emp_id=$_SESSION['emp_id'];
$ids=mysql_result($id,0);
$sql=mysql_query("SELECT * FROM job_seeker_emp_history WHERE user_id=$ids AND job_history_id= $emp_id");
$emp=mysql_fetch_array($sql);
?>