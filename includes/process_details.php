<?php
session_start();
$session=$_SESSION["session_email"];
echo $session;
echo"<br/>";
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
include("database.php");
$id=mysql_query("SELECT user_id FROM registration WHERE email='$session'");
$ids=mysql_result($id,0);
echo $ids;
$sql=mysql_query("INSERT INTO job_seeker(id,firstname,lastname)VALUES('$ids','$firstname','$lastname')");
if($sql){
echo"sucessful";
}
else{
echo"failed";
}
?>