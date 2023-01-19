<?php
include 'connect.php';
$sql = "SELECT id, username, password FROM logininfo WHERE username = '" . $_POST['user'] . "' and password = '" . $_POST['pass'] . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Successfully Logged in";
    header("Location: http://localhost/Attendance-management-system/att.php");
} else {
    header("Location: http://localhost/Attendance-management-system/error.php");
    echo "Nort";
}
$conn->close();
