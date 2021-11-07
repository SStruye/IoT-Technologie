<?php
$servername = "localhost";
$username = "student_12001895";
$password = "hgDgXCYb8OB1";

$q = $_GET['q'];

$header = array("ID", "Sensor 1", "Sensor 2", "Timestamp");
$fieldname = array("S_ID", "S1_Value", "S2_Value", "S_Timestamp");

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_errno) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$sql = "SELECT S_ID, S_Timestamp, S1_Value, S2_Value FROM student_12001895.Data_Measurement";




echo '<table class="A"> <tr>'; 

    for($i = 0; $i <= 3; $i++){
        if( strcmp($header[$i], $q) !== 0){
            echo '<th>'.$header[$i].'</th>';
        };
    };
    echo '</tr>';

     
    if ($result = $conn->query($sql)) {
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';     
            for($i = 0; $i <= 3; $i++){
                if( strcmp($header[$i], $q) !== 0){
                    echo '<td>'.$row[$fieldname[$i]].'</td>';
                };
            };
            echo '</tr>';
        }
        $result->free();
    } 

$conn->close();
?>