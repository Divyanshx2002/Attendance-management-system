<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $sql = "INSERT INTO attrecord  (date, entrytime, exittime) VALUES  ('" . $_POST['date'] . "', '" . $_POST['Entime'] . "', '" . $_POST['Extime'] . "')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close(); 
};