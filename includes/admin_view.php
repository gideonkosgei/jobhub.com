<?php

include("database.php");
$query=mysql_query("SELECT * FROM registration");
if(!$query){
echo"error";
}

?>