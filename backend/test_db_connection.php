<?php
// Include the database configuration file
// require_once 'db_config.php';
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'lost&found';

// Create a MySQL connection
// $conn = new mysqli($db_host, $db_user, $db_password, $db_name);
$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);

// Check the connection
if (!$conn) {
    die("Connection failed: ");
} else {
    // echo "Connected successfully to the database.";
}

// Close the connection
 //$conn->close();
?>
