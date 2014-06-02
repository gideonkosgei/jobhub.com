<?php
session_start();
$session=$_SESSION["session_email"];
$js_language=$_POST['language'];
$js_read=$_POST['j_seeker_read']; 
$js_write=$_POST['j_seeker_write'];
$js_speak=$_POST['j_seeker_speak'];

include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$sql=mysql_query("INSERT INTO job_seeker_languages(user_id,language,js_read,js_write,js_speak)VALUES('$ids','$js_language','$js_read','$js_write','$js_speak')");
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