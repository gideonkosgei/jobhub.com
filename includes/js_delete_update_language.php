<?php
session_start();
$session=$_SESSION["session_email"];
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$lang_id=$_POST['lang_ID'];
$_SESSION['lang_id']=$lang_id;
if(isset($_POST['delete'])){

$sql=mysql_query("DELETE FROM job_seeker_languages WHERE language_id=$lang_id AND user_id=$ids");
if(!$sql){
echo"deletion failed";
}
else
{
header("location:../js_language_update.php");
}
}
else{
header("location:../language_view.php");
}

 ?>