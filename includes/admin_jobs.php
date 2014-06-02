<?php

include("database.php");
$query=mysql_query("SELECT * FROM employer_job_post,employer_details WHERE employer_details.id=employer_job_post.employer_id");
if(!$query){
echo"error";
}

?>