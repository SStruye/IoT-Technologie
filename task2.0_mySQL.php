<?php
$servername = "localhost";
$username = "student_12001895";
$password = "hgDgXCYb8OB1";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_errno) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT single, name_, age FROM student_12001895.Task";
$result = $conn->query($sql) or die($conn->error);


  while($row = $result->fetch_assoc()) {
    echo "name: " . $row["single"]. " - age: " . $row["name_"]. " - single: " . $row["age"]. "<br>";
  }

$conn->close();
?>