<?php 
$user = "root";
$db_name = "job_postings";
$password = "";
$host = "localhost";

$sql =  new mysqli($host , $user , $password , $db_name) ;

if($sql->connect_errno) {
 die("connection error" . $sql->connect_errno);
}
return $sql;


?>