<?php
session_start();
$session=$_SESSION["session_email"];
$lang_id=$_SESSION['lang_id'];
$js_language=$_POST['language'];
$js_read=$_POST['j_seeker_read']; 
$js_write=$_POST['j_seeker_write'];
$js_speak=$_POST['j_seeker_speak'];

include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$sql=mysql_query("UPDATE job_seeker_languages SET language='$js_language',js_read='$js_read',js_write='$js_write',js_speak='$js_speak' WHERE user_id='$ids' AND language_id='$lang_id'");
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