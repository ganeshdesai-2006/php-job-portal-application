<!DOCTYPE html>
<html>
<head>
<title>View Database Records</title>
<style>
    body {
 
        background: #f2f2f2;
        padding: 30px;
    }
    h2 {
        color: black;
        text-align: center;
    }
    table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        background: white;
        box-shadow: 0 0 10px #aaa;
    }
    th, td {
        padding: 12px;
        border: 1px solid #555;
        text-align: center;
    }
    th {
        background: #003366;
        color: white;
    }
</style>
</head>

<body>

<h2>SIGNUP TABLE DATA</h2>

<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$db_name = "ganesh5cit02";

$conn = new mysqli($servername, $username, $password, $db_name);


if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}


$reg_sql = "SELECT * FROM signup";
$reg_result = $conn->query($reg_sql);

echo "<table>";
echo "<tr>
          <th>name</th>
          <th>Email</th>
          <th>Password</th>
     </tr>";

if ($reg_result->num_rows > 0) {
    while ($row = $reg_result->fetch_assoc()) {
        echo "<tr>
              
                <td>".$row['name']."</td>
                <td>".$row['email']."</td>
                <td>".$row['password']."</td>
              </tr>";
    }
} else {
    echo "<tr>
              <td colspan='3'>No data found</td>
         </tr>";
}

echo "</table>";

echo "<h2>LOGIN TABLE DATA</h2>";


$login_sql = "SELECT * FROM login";
$login_result = $conn->query($login_sql);

echo "<table>";
echo "<tr>
          <th>email</th>
          <th>Password</th>
      </tr>";

if ($login_result->num_rows > 0) {
    while ($row = $login_result->fetch_assoc()) {
        echo "<tr>
              
                <td>".$row['email']."</td>
                <td>".$row['password']."</td>
              </tr>";
    }
} else {
    echo "<tr>
              <td colspan='2'>No data found</td>
          </tr>";
}

echo "</table>";

$conn->close();
?>

</body>
</html>