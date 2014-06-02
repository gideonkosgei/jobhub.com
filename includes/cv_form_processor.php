<?php
session_start();
$_SESSION['app_id']=$_POST['app_id'];
$id=$_POST['user_id'];
include("database.php");

if(isset($_POST['cv']))
{

header("location:../cv_emp_view.php");
}
else if(isset($_POST['mail'])){
header("location:../mail.php");
}
else{
$sql=mysql_query("SELECT name FROM uploads WHERE user_id='$id'");
$row=mysql_fetch_array($sql);
if(!$sql){
echo"error";
}
else{
$cv="../cv_uploads/".$row['name'];
echo"<a href=$cv>download cv</a>"; 
}
}

?>