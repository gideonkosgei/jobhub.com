<?php
session_start();
$session=$_SESSION["session_email"];
echo $_SESSION['job_id']=$_POST['job_ID'];
echo $_SESSION['emp_id']=$_POST['emp_ID'];
?>