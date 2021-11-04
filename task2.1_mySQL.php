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

$name = $_POST['name'];
$age = $_POST['age'];

if(isset($_POST['submit']) && $_POST['randcheck']==$_SESSION['rand'])
{
    if(!empty($_POST['check'])){
        $adult = 1;
    }
    else{
        $adult = 0;
    }
    $sql = "INSERT INTO student_12001895.task_2".
    "(name, age, adult) "."VALUES ".
    "('$name','$age','$adult')";

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
            <td width = "250">name</td>
            <td><input name = "name" type = "text" id = "name"></td>
            </tr>         
            <tr>
            <td width = "250">age</td>
            <td><input name = "age" type = "text" id = "age"></td>
            </tr>               
            <tr>                    
            <td width = "250">18+ </td>
            <td  width = "250"><input type="checkbox"name="check"></td>
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