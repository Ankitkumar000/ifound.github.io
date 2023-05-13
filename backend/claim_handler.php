<?php
// Include the database configuration file
// require_once './';
include 'test_db_connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone_number'];
$item_name = $_POST['item_name'];
$item_description = $_POST['item_description'];
$item_image = $_POST['item_image'];
$proof_of_ownership = $_POST['proof_of_ownership'];
$category = $_POST['category'];

// Prepare and bind the INSERT statement
$stmt = $conn->prepare("INSERT INTO claims (name, email, phone_number, item_name, item_description, item_image, proof_of_ownership, category) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $name, $email, $phone, $item_name, $item_description, $item_image, $proof_of_ownership, $category);

// Execute the INSERT statement
if ($stmt->execute()) {
  echo "New record created successfully";
} else {
  echo "Error: " . $stmt->error;
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>
