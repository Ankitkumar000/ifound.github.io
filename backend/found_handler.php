<?php
// Database connection settings
// $db_host = 'localhost';
// $db_user = 'root';
// $db_password = '';
// $db_name = 'iFound';

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
include "test_db_connection.php";

// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// Get form data
// Get form data
$item_name = $_POST['found-item-name'];
$item_description = $_POST['found-item-description'];
$item_location = $_POST['found-item-location'];
$item_date = $_POST['found-item-date'];
//$image_path = "hello";


// Handle file upload
// Handle file upload
$image_path = "";
if (isset($_FILES['found-item-image']) && $_FILES['found-item-image']['size'] > 0) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["found-item-image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is an actual image or a fake image
    $check = getimagesize($_FILES["found-item-image"]["tmp_name"]);
    if ($check !== false) {
        // Save the uploaded file to the server
        if (move_uploaded_file($_FILES["found-item-image"]["tmp_name"], $target_file)) {
            $image_path = $target_file;
        }
    }
}




// Insert the form data into the database
$sql = "INSERT INTO found (item_name ,Item_description,Found_location ,Found_date ,Item_image 	) VALUES (?, ?,?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $item_name, $item_description, $item_location,$item_date, $image_path);

if ($stmt->execute()) {
    // Redirect to a success page or show a success message
    header("Location: http://localhost/ram/index.html");
} else {
    // Redirect to an error page or show an error message
    header("Location: ../error.php");
}

// Close the database connection
$stmt->close();
$conn->close();
?>
