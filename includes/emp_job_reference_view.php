<?php
session_start();
$session=$_SESSION["session_email"];
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$ref_id=$_SESSION['ref_id'];
$sql=mysql_query("SELECT * FROM job_seeker_reference WHERE user=$ids AND ref_id= $ref_id");
$ref=mysql_fetch_array($sql);
?>