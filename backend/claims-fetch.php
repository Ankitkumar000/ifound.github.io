<?php

include "test_db_connection.php";

$sql = "SELECT * FROM claims";

// Execute the query and get the result set
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Loop through the result set and display the data
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Name: " . $row["name"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Phone Number: " . $row["phone_number"] . "<br>";
        echo "Item Name: " . $row["item_name"] . "<br>";
        echo "Item Description: " . $row["item_description"] . "<br>";
        echo "Item Image: <img src='" . $row["item_image"] . "' width='100'><br>";
        echo "Proof of Ownership: <a href='" . $row["proof_of_ownership"] . "'>Download</a><br>";
        echo "Category: " . $row["category"] . "<br><br>";
    }

} else {
    echo "No data found.";
}

// Close the database connection
$conn->close();

?>