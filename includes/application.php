<?php
session_start();
$session=$_SESSION["session_email"];
$job=$_POST['job_ID'];
$emp=$_POST['emp_ID'];
$date=date("d/m/Y");
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$check=mysql_query("SELECT job_id,user_id from applications WHERE job_id=$job AND user_id=$ids");
$count=mysql_num_rows($check);
if($count==0){
$sql=mysql_query("INSERT INTO applications(job_id,emp_id,date,user_id)VALUES('$job','$emp','$date','$ids')");
if(!$sql){
echo"application error";
}
else{
echo"<script type='text/javascript'>alert('application successful,your cv has also been sent');";
				  echo"window.location='../job_seeker_profile.php'";
echo"</script>";

}
}
else{
echo"<script type='text/javascript'>alert('you cannot apply twice for the same job');";
				  echo"window.location='../js_view_all_jobs.php'";
echo"</script>";
}


?>