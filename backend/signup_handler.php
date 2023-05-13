<?php
// Connect to database
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "your_database_name";

// $conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
include 'test_db_connection.php';


// Get form data
$name=$_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
// $password_confirm = $_POST['password_confirm'];

// Check if passwords match
// if ($password !== $password_confirm) {
//     echo "Error: Passwords do not match.";
//     exit();
// }

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Check if the username or email already exists
$sql = "SELECT * FROM user WHERE username = ? OR email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Error: Username or email already exists.";
    exit();
}

// Insert data into the database
$sql = "INSERT INTO user (name, email,username, password) VALUES (?,?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss",$name,  $email,$username, $hashed_password);

if ($stmt->execute()) {
    echo "New user created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>
