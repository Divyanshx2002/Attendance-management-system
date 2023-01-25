<?php
include 'connect.php';
$sql = "SELECT id, username, password FROM logininfo WHERE username = '" . $_POST['user'] . "' and password = '" . $_POST['pass'] . "'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
} else {
}
$conn->close();
