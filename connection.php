<?php
$db_host='localhost:3307';
$db_user='root';
$db_passwd='';
$db_name="ganesh5cit02";
$dbh=mysqli_connect($db_host,$db_user,$db_passwd,$db_name) or die("Error connecting to the database");
echo"connection is success";
?>