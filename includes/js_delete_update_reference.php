<?php
session_start();
$session=$_SESSION["session_email"];
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$ref=$_POST['ref_ID'];
$_SESSION['ref_id']=$ref;
if(isset($_POST['delete'])){

$sql=mysql_query("DELETE FROM job_seeker_reference WHERE ref_id=$ref AND user=$ids");
if(!$sql){
echo"deletion failed";
}
else
{
header("location:../js_reference_update.php");
}
}
else{
header("location:../reference_view.php");
}

 ?>