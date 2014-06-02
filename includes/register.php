<?php
include("database.php");
$date=date("Y/m/d");
$username=$_POST['register_user'];
$email=$_POST['register_email'];
$category=$_POST['category'];
$pass=$_POST['register_password'];
$password=md5($pass);
$con_email=mysql_query("SELECT email FROM registration WHERE email='$email'");
$count=mysql_num_rows($con_email);
if($count==0){
$sql=mysql_query("INSERT INTO registration(username,email,category,password,date)VALUES('$username','$email','$category','$password','$date')");
        if(!$sql){
            die("could not execute query");}
            else{
                  echo"<script type='text/javascript'>var x=alert('account created');";
				  echo"window.location='../index.php'";
echo"</script>";

			
				  }
}
elseif($count==1){
echo"<script type='text/javascript'>var x=alert('email already in use');";
				  echo"window.location='../register.php'";
echo"</script>";
}
?>