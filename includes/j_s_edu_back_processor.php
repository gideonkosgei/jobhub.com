<?php

session_start();
$session=$_SESSION["session_email"];
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$university_name=$_POST['university'];
$attended_from=$_POST['attended_from'];
$attended_to=$_POST['attended_to'];
$degree_diploma=$_POST['deg_attained'];
$level=$_POST['level'];
$course_work=$_POST['coursework'];
$accomplishments=$_POST['accomplishments'];

$sql=mysql_query("INSERT INTO job_seeker_edu_background(id,university_name,attended_from,attended_to,degree_diploma,main_course,course_work,academic_accomplishments)VALUES('$ids','$university_name','$attended_from','$attended_to','$degree_diploma','$level','$course_work','accomplishments')");

if(!$sql)
{
die("details not entered");
}
else
{
echo"<script type='text/javascript'>alert('details entered successfully');";
				  echo"window.location='../job_seeker_profile_build.php'";
echo"</script>";
}
?>