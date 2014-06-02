<?php
session_start();
$session=$_SESSION["session_email"];
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$edu=$_SESSION['edu_id'];

$ids=mysql_result($id,0);

$edu_id=$_SESSION['edu_id'];
$sql=mysql_query("SELECT * FROM job_seeker_edu_background WHERE id=$ids AND edu_id= $edu_id");
$edu=mysql_fetch_array($sql);
?>