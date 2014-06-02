<?php
$id=$_POST['id'];
include("database.php");
$query=mysql_query("DELETE FROM deactivate WHERE id='$id'");
if(!$query){
echo"<script type='text/javascript'>var x=alert('error in deactivation ');";
				  echo"history.back()";
echo"</script>";
}
else{
echo"<script type='text/javascript'>var x=alert('account successfully activated');";
				  echo"window.location='../admin_activate.php'";
echo"</script>";
}

?>