<?php
// Include the database configuration file
// require_once './';
include 'test_db_connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Validate the inputs
    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        // Create a MySQL connection
        $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert the submitted data into the MySQL database
        $stmt = $conn->prepare("INSERT INTO contact (name, email, subject, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $subject, $message);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "OK";
        } else {
            echo "There was an error submitting your message. Please try again.";
        } 

        // Close the connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Please fill in all the required fields.";
    }
    
} else {
    echo "Invalid request.";
}
?>
