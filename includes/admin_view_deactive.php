<?php
include("database.php");
$query=mysql_query("SELECT * FROM registration,deactivate WHERE deactivate.id=registration.user_id");
if(!$query){
echo"error";
}


?>