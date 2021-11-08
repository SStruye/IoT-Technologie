
<?php
$servername = "localhost";
$username = "student_12001895";
$password = "hgDgXCYb8OB1";

$header = array("ID", "Sensor 1", "Sensor 2", "Timestamp");
$fieldname = array("S_ID", "S1_Value", "S2_Value", "S_Timestamp");

$q = json_decode($_GET['q']);

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_errno) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT S_ID, S_Timestamp, S1_Value, S2_Value FROM student_12001895.Data_Measurement";

echo '<table class="A"> <tr>'; 

for($i = 0; $i <= 3; $i++){
        echo '<th>'.$header[$i].'</th>';
};
echo '</tr>';

    
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        if($row[$fieldname[$q[0]]] == $q[1]){
            for($i = 0; $i <= 3; $i++){
                    echo '<td>'.$row[$fieldname[$i]].'</td>';
            };
        }

        echo '</tr>';
    }
    
    $result->free();
} 

$conn->close();

?>