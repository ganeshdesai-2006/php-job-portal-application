<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$db_name = "ganesh5cit02";

$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$x = $_POST['email'];
$y = $_POST['password'];

$sql = "INSERT INTO login (email, password) VALUES ('$x', '$y')";

if ($conn->query($sql) === TRUE) {
    echo "Login data inserted successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
