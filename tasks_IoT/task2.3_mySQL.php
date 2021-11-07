<?php
$servername = "localhost";
$username = "student_12001895";
$password = "hgDgXCYb8OB1";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_errno) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT id, timestamp, name, age FROM student_12001895.Task";


echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">id</font> </td> 
          <td> <font face="Arial">timestamp</font> </td> 
          <td> <font face="Arial">name</font> </td> 
          <td> <font face="Arial">age</font> </td> 
      </tr>';

if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["timestamp"];
        $field3name = $row["name"];
        $field4name = $row["age"];

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
              </tr>';
    }
    $result->free();
} 

$conn->close();
?>