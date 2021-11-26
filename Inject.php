<?php
session_start();

$servername = "localhost";
$username = "student_12001895";
$password = "hgDgXCYb8OB1";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_errno) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br />";

$S1_Value = $_POST['S1_Value'];
$S2_Value = $_POST['S2_Value'];

if(isset($_POST['submit']) && $_POST['randcheck']==$_SESSION['rand'])
{   
    $sql = "INSERT INTO student_12001895.Sensor_Data"."(id, value) "."VALUES "."('1', '$S1_Value');";
    $sql .= "INSERT INTO student_12001895.Sensor_Data"."(id, value) "."VALUES "."('2', '$S2_Value')";
    if ($conn->multi_query($sql)) {
        printf("Record inserted successfully.<br />");
    }
}
if ($conn->errno) {
    printf("Could not insert record into table: %s<br />", $conn->error);
    $conn->close();
}

else {
    ?>  
    <form method = "post" action = "">
    <?php
    $rand=rand();
    $_SESSION['rand']=$rand;
    ?>
    <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
        <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
            <tr>
            <td width = "250">Sensor 1 Value</td>
            <td><input name = "S1_Value" type = "text" id = "S1_Value"></td>
            </tr>         
            <tr>
            <td width = "250">Sensor 2 Value</td>
            <td><input name = "S2_Value" type = "text" id = "S2_Value"></td>
            </tr>                       
            <tr>
            <td width = "250"> </td>
            <td><input name = "submit" type = "submit" id = "submit"  value = "submit"></td>
            </tr>
        </table>
    </form>
    <?php
}
$conn->close();
?>