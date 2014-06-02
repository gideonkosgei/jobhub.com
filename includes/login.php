<?php
include('database.php');
$login_email=$_POST['login_email'];
$password=$_POST['login_password'];
$login_password=md5($password);
/*connect to database*/
$select_cat=mysql_query("SELECT category,username FROM registration WHERE  email='$login_email' ");

$row=mysql_fetch_array($select_cat);
$cat=$row['category'];

$query=mysql_query("SELECT * FROM registration WHERE email='$login_email' and password='$login_password'");
if(!$query)
{
die("cannot execute query");
}

$count=mysql_num_rows($query);
if($count==1)
{

//check deactivation
$deactivate=mysql_query("SELECT * FROM deactivate WHERE id=(SELECT user_id FROM registration WHERE email='$login_email' and password='$login_password')");
$num=mysql_num_rows($deactivate);
if($num!=0){
echo"<script type='text/javascript'>alert('account was deactivated');";
				  echo"history.back()</script>";
}
else{
session_start();
$_SESSION['session_email']=$_POST['login_email'];
$_SESSION['username']=$row['username'];

			if($cat=="job_seeker")
			{
			
			header("location:../job_seeker_profile.php");
			
			}
			else{
			header("location:../employer_profile.php");
			}

}



}
else{
echo"<script type='text/javascript'>alert('wrong password');";
				  echo"window.location='../index.php' </script>";
}

?>