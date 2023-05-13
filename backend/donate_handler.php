<?php
// Database connection settings
include "test_db_connection.php";

// Get form data
$name = $_POST['donate-item-name'];
$description = $_POST['donate-item-description'];
$location = $_POST['donate-item-location'];
$date = $_POST['donate-item-date'];

// Handle file upload
$image_path = "";
if (isset($_FILES['donate-item-image']) && $_FILES['donate-item-image']['size'] > 0) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["donate-item-image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is an actual image or a fake image
    $check = getimagesize($_FILES["donate-item-image"]["tmp_name"]);
    if ($check !== false) {
        // Save the uploaded file to the server
        if (move_uploaded_file($_FILES["donate-item-image"]["tmp_name"], $target_file)) {
            $image_path = $target_file;
        }
    }
}

// Insert the form data into the database
$sql = "INSERT INTO donate (item_name, item_description, donate_location, donate_date, Item_Image) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

// Bind parameters with types to protect against SQL injection attacks
$stmt->bind_param("sssss", $name, $description, $location, $date, $image_path);

if ($stmt->execute()) {
    // Redirect to a success page or show a success message
    header("Location: http://localhost/ram/index.html");
} else {
    // Show an error message
    echo "Error: " . $stmt->error;
}

// Close the database connection
$stmt->close();
$conn->close();
?>
