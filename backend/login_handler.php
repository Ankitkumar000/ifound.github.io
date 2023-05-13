<?php
session_start();

// Include the database configuration file
// require_once './db_config.php';
include 'test_db_connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember_me = isset($_POST['flexCheckDefault']) ? 1 : 0;

    // Validate the inputs
    if (!empty($username) && !empty($password)) {
        // Create a MySQL connection
        $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if the user exists in the MySQL database
        $stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        // Verify the password and log in the user
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                // Set session variables
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;

                if ($remember_me) {
                    setcookie("username", $username, time() + (86400 * 30), "/"); // Set a cookie for 30 days
                }

                // Redirect the user to the homepage or any other page
                header("Location: http://localhost/ram/index.html");
                exit;
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "User not found.";
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
