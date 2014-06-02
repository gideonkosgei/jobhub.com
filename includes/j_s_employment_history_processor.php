<?php
session_start();
$session=$_SESSION["session_email"];
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$job_title=$_POST['job_title'];
$employer_name=$_POST['employer_name'];
$industry_type=$_POST['industry_type'];
$from=$_POST['emp_from'];
$to=$_POST['emp_to'];
$responsibilities=$_POST['resp'];
$departure=$_POST['depart'];
$sql=mysql_query("INSERT INTO job_seeker_emp_history(user_id,job_title,employer_name,type_of_industry,date_from,date_to,responsibilities_held,reasons_for_departure) VALUES('$ids','$job_title','$employer_name','$industry_type','$from','$to','$responsibilities','$departure')");
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