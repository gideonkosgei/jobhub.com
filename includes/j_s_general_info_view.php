<?php
session_start();
$session=$_SESSION["session_email"];
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$sql=mysql_query("SELECT * FROM job_seeker_general_info WHERE member_id=$ids");
$row=mysql_fetch_array($sql)

?>

