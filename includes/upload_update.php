<?php
session_start();
$session=$_SESSION["session_email"];

$imagetype = $_FILES['cv']['type'];
$cv_name = $_FILES['cv']['name'];
	move_uploaded_file($_FILES['cv']['tmp_name'],"../cv_uploads/".$_FILES['cv']['name']);
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
$sql=mysql_query("UPDATE uploads SET name='$cv_name'WHERE user_id='$ids'");
if(!$sql)
{
echo"<script type='text/javascript'>var x=alert('error in uploading cv');";
				   echo"history.back();";
				   echo"</script>";

}
else{
echo"<script type='text/javascript'>var x=alert('cv successfully changed');";
				   echo"history.back();";
				     echo"</script>";

}
?>