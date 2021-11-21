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

$value1 = $_POST['value1'];
$value2 = $_POST['value2'];

if(isset($_POST['submit']) && $_POST['randcheck']==$_SESSION['rand'])
{
    
    $sql = "INSERT INTO student_12001895.Sensor_Data".
    "(id, value) "."VALUES ".
    "('value1', '$value1')";
    "('value2', '$value2')";
    if ($conn->query($sql)) {
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
            <td width = "250">Sensor 1 value: </td>
            <td><input name = "value1" type = "text" id = "value1"></td>
            </tr>         
            <tr>
            <td width = "250">Sensor 2 value: </td>
            <td><input name = "value2" type = "text" id = "value2"></td>
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