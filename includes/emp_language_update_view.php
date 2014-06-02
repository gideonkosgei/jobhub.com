<?php
session_start();
$session=$_SESSION["session_email"];
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$lang_id=$_SESSION['lang_id'];

$ids=mysql_result($id,0);

$lang_id=$_SESSION['lang_id'];
$sql=mysql_query("SELECT * FROM job_seeker_languages WHERE user_id=$ids AND language_id= $lang_id");
$lang=mysql_fetch_array($sql);
?>