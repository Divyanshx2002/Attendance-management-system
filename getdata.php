<?php
include 'connect.php';
$sql = "SELECT id, username, password FROM logininfo WHERE username = '" . $_POST['user'] . "' and password = '" . $_POST['pass'] . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Successfully Logged in";
    header("Location: http://localhost/Attendance-management-system/att.php");
} else {
    echo "login failed";
    header("Location: http://localhost/Attendance-management-system/");
}
$conn->close();
