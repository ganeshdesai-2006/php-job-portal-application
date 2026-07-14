<?php
$db_host = 'localhost:3307';
$db_user = 'root';
$db_passwd = '';
$db_name = "ganesh5cit02";

$conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>