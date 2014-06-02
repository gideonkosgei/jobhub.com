<?php
session_start();
$session=$_SESSION["session_email"];
include("database.php");
$_SESSION['job_id']=$job_id;
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$job_id=$_POST['job_ID'];
if(isset($_POST['delete'])){

$sql=mysql_query("DELETE FROM employer_job_post WHERE job_id=$job_id AND employer_id=$ids");
if(!$sql){
echo"deletion failed";
}
else
{
echo"<script type='text/javascript'>alert('job deleted');";
				  echo"window.location='../view_jobs_posted.php'";
echo"</script>";

}
}
else{
header("location:../emp_update_job.php");
}

 ?>