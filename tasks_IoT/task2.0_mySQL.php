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
//echo "Connected successfully";

$sql = "SELECT id, name, age, adult FROM student_12001895.task_2";
$result = $conn->query($sql); // or die($conn->error);


echo '<body><table width = "600" border = "1" cellspacing = "0" cellpadding = "2">
  <thead>
    <tr>
      <th>id: </th>
      <th>Name: </th>
      <th>Age: </th>
      <th>18+: </th>
    </tr>
  </thead>';

  while($row = $result->fetch_assoc()) {

    $field1name = $row["id"];
    $field2name = $row["name"];
    $field3name = $row["age"];
    $field4name = $row["adult"];

    if($field4name == 1){
      echo '<tr>
            <td><b>'.$field1name.'</b></td> 
            <td><b>'.$field2name.'</b></td> 
            <td><b>'.$field3name.'</b></td> 
            <td><b>'.$field4name.'</b></td> 
            </tr>';      
    }
    else{
      echo '<tr> 
            <td>'.$field1name.'</td> 
            <td>'.$field2name.'</td> 
            <td>'.$field3name.'</td> 
            <td>'.$field4name.'</td> 
            </tr>';
    }
  }

  '</tbody>
  </table></body>';

$conn->close();
?>