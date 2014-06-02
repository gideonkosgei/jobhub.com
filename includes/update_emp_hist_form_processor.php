<?php
session_start();
$session=$_SESSION["session_email"];
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$emp_id=$_SESSION['emp_id'];
$job_title=$_POST['job_title'];
$employer_name=$_POST['employer_name'];
$industry_type=$_POST['industry_type'];
$from=$_POST['emp_from'];
$to=$_POST['emp_to'];
$responsibilities=$_POST['resp'];
$departure=$_POST['depart'];
$sql=mysql_query("UPDATE job_seeker_emp_history SET job_title='$job_title',employer_name='$employer_name',type_of_industry='$industry_type',date_from='$from',date_to='$to',responsibilities_held='$responsibilities',reasons_for_departure='$departure' WHERE user_id='$ids' AND job_history_id='$emp_id'");
if(!$sql)
{
die("update error!");
}
else
{
echo"<script type='text/javascript'>alert('details updated');";
				  echo"window.location='../job_seeker_update.php'";
echo"</script>";
}
?>