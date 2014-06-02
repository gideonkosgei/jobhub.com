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
$main_course=$_POST['course_attended'];
$course_work=$_POST['coursework'];
$academic_accomplishments=$_POST['accomplishments'];
$edu_id=$_SESSION['edu_id'];

$sql=mysql_query("UPDATE job_seeker_edu_background SET university_name='$university_name',attended_from='$attended_from',attended_to='$attended_to',degree_diploma='$degree_diploma',main_course='$main_course',course_work='$course_work',academic_accomplishments='$academic_accomplishments' WHERE id='$ids' AND edu_id='$edu_id'");
if(!$sql)
{
die("details not entered");
}
else
{
echo"<script type='text/javascript'>alert('details updated');";
				  echo"window.location='../job_seeker_update.php'";
echo"</script>";
}
?>