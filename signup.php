<?php
$servername="localhost:3307";
$username="root";
$password="";
$db_name="ganesh5cit02";
$x=$_POST['name'];
$y=$_POST['email'];
$z=$_POST['password'];


$conn = new mysqli($servername,$username,$password,$db_name);

$sql ="INSERT INTO signup (name,email,password) VALUES ('$x','$y','$z')";

$conn->query($sql);
if ($conn->query($sql) === TRUE) {
    echo "Signup data inserted successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>