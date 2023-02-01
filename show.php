<?php
session_start();
include 'connect.php';
if (isset($_SESSION['ID'])) {
 $sql = "SELECT * FROM attrecord WHERE userid = '" .  $_SESSION['ID'] . "'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
     while ($row = $result->fetch_assoc()) {
         echo "date: " . $row["date"] . "<br>";
         echo "entrytime: " . $row["entrytime"] . "<br>";
         echo "exittime: " . $row["exittime"] . "<br>";
         echo "<hr>";
     }
   } else {
       echo "0 results";
   } 
   $conn->close();
}