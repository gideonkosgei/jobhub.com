<?php
include('database.php');
$username=$_POST['username'];
$password=$_POST['password'];

$query=mysql_query("SELECT * FROM admin WHERE username='$username' and password='$password'");
if(!$query)
{
die("cannot execute query");
}

$count=mysql_num_rows($query);
if($count==1)
{
header("location:../admin_home.php");
}
else{
echo"<script type='text/javascript'>alert('wrong password');";
				  echo"window.location='../index.php' </script>";

}
?>