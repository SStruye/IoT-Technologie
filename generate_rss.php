<?php
$servername = "localhost";
$username = "student_12001895";
$password = "hgDgXCYb8OB1";

$header = array("ID", "Sensor 1", "Sensor 2", "Timestamp");
$fieldname = array("S_ID", "S1_Value", "S2_Value", "S_Timestamp");

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_errno) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT S_ID, S_Timestamp, S1_Value, S2_Value FROM student_12001895.Data_Measurement";
 
 header( "Content-type: text/xml");
 
 echo "<?xml version='1.0' encoding='UTF-8'?>
 <rss version='2.0'>
 <channel>
 <title>Generate RSS</title>
 <link>/</link>
 <description></description>
 <language>en-us</language>";
 $x = 0;
 $y = 0;
 $z = 0;

 if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
            $x = $x + $row[$fieldname[1]];
            $y = $y + $row[$fieldname[2]];
            $z++;
        }
    $SENS1_gem = $x /$z;
    $SENS2_gem = $y /$z;
    $result->free;


    
   echo "<item>
   <title>Sensor 1 average</title>
   <link></link>
   <description>$SENS1_gem</description>
   </item>";

   echo "<item>
   <title>Sensor 2 average</title>
   <link></link>
   <description>$SENS2_gem</description>
   </item>";
 }
 $conn->close();

 echo "</channel></rss>";
?>