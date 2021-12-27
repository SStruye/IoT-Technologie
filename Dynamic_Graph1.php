<?php
$servername = "localhost";
$username = "student_12001895";
$password = "hgDgXCYb8OB1";

$q = $_GET['q'];

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_errno) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT value, timestamp FROM student_12001895.Sensor_Data where id= $q ";

$container = array();
if ($result = $conn->query($sql)) {
while ($record = $result->fetch_assoc()) {
            $container[] = array($record["timestamp"], intval($record["value"]));
        }
      }
      $json_data = json_encode($container);
      echo $json_data;

?>
