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
    echo "Connected successfully<br />";

    $min=1;
    $max=50;
    echo rand($min,$max);

    for($i = 0; $i < 20; $i++){

      $S1_Value = rand($min,$max);
      $S2_Value = rand($min,$max);

      $sql = "INSERT INTO student_12001895.Data_Measurement".
      "(S1_Value, S2_Value) "."VALUES ".
      "('$S1_Value','$S2_Value')";

      if ($conn->query($sql)) {
        printf("Record inserted successfully.<br />");
      }
    }
    $conn->close();
?>