
<?php
$servername = "localhost";
$username = "student_12001895";
$password = "hgDgXCYb8OB1";

$header = array("Sensor 1", "Sensor 2", "Timestamp");
$fieldname = array("id", "value", "timestamp");

$q = json_decode($_GET['q']);

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_errno) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, value, timestamp FROM student_12001895.Sensor_Data";

echo '<table class="A"> <tr>'; 

for($i = 0; $i <= 2; $i++){
        echo '<th class="tbl">'.$header[$i].'</th>';
};
echo '</tr>';
    
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
    echo '<tr>';
        if($q[0] == 1 && $row["value"] == $q[1]){
            echo '<td class="tbl">'.$row["value"].'</td>';
            $row = $result->fetch_assoc();
            echo '<td class="tbl">'.$row["value"].'</td>';
            echo '<td class="tbl">'.$row["timestamp"].'</td>';
        }
        elseif($q[0] !== 1){
            $temp = $row["value"];
            $row = $result->fetch_assoc();
            if($q[0] == 2 && $row["value"] == $q[1]){
                echo '<td class="tbl">'.$temp.'</td>';
                echo '<td class="tbl">'.$row["value"].'</td>';
                echo '<td class="tbl">'.$row["timestamp"].'</td>';
            }
        }
    echo '<tr>';
    }
    $result->free();
} 

$conn->close();

?>