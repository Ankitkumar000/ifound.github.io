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
$item_name = $_POST['lost-item-name'];
$item_description = $_POST['lost-item-description'];
$item_location = $_POST['lost-item-location'];

$item_contact = $_POST['lost-item-contact'];
$item_date = $_POST['lost-item-date'];
//$image_path = "hello";


// Handle file upload
$image_path = "";
if (isset($_FILES['lost-item-image']) && $_FILES['lost-item-image']['size'] > 0) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["lost-item-image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is an actual image or a fake image
    $check = getimagesize($_FILES["lost-item-image"]["tmp_name"]);
    if ($check !== false) {
        // Save the uploaded file to the server
        if (move_uploaded_file($_FILES["lost-item-image"]["tmp_name"], $target_file)) {
            $image_path = $target_file;
        }
    }
}


// Insert the form data into the database
$sql = "INSERT INTO lost (  item_name 	,item_description ,	Lost_location 	,Contact_Information ,Lost_Date ,Item_Image ) VALUES (?, ?,?,?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $item_name, $item_description, $item_location,$item_contact,$item_date, $image_path);

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
