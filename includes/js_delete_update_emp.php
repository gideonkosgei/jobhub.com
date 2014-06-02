<?php
session_start();
$session=$_SESSION["session_email"];
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$emp_id=$_POST['emp_ID'];
$_SESSION['emp_id']=$emp_id;
if(isset($_POST['delete'])){

$sql=mysql_query("DELETE FROM job_seeker_emp_history WHERE job_history_id=$emp_id AND user_id=$ids");
if(!$sql){
echo"deletion failed";
}
else
{
header("location:../js_employment_hist_view.php");
}
}
else{
header("location:../employment_view.php");
}

 ?>