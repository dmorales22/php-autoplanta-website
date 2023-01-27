<?php
$servername = "localhost";
$username = "usernamehere";
$password = "insertpasswordhere";
$dbname = "autoplanta";
$table = "grow_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>


