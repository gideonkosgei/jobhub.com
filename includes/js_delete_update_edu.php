<?php
session_start();
$session=$_SESSION["session_email"];
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$edu_id=$_POST['edu_ID'];
$_SESSION['edu_id']=$_POST['edu_ID'];;
if(isset($_POST['delete'])){

$sql=mysql_query("DELETE FROM job_seeker_edu_background WHERE edu_id=$edu_id AND id=$ids");
if(!$sql){
echo"deletion failed";
}
else
{
header("location:../js_edu_background_view.php");
}
}
else{
header("location:../education_view.php");
}

 ?>