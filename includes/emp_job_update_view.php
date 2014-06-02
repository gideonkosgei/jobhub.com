<?php
session_start();
$session=$_SESSION["session_email"];
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);

$job_id=$_SESSION['job_id'];
$sql=mysql_query("SELECT * FROM employer_job_post WHERE employer_id=$ids AND job_id= $job_id");
$row=mysql_fetch_array($sql);
?>