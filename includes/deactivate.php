<?php
$id=$_POST['id'];
$date=date("Y/m/d");
include("database.php");
$query=mysql_query("INSERT INTO deactivate(id,date)VALUES('$id','$date')");
if(!$query){
echo"<script type='text/javascript'>var x=alert('the account was already deactivated ');";
				  echo"history.back()";
echo"</script>";
}
else{
echo"<script type='text/javascript'>var x=alert('account deactivated');";
				  echo"window.location='../admin_view.php'";
echo"</script>";
}

?>