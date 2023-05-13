<?php

include "test_db_connection.php";


// Fetch data from the database
$sql = "SELECT item_name, item_description, lost_location, contact_information, lost_date, item_image FROM lost";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    // Output the data here
    echo "Item Name: " . $row["item_name"] . "<br>";
    echo "Item Description: " . $row["item_description"] . "<br>";
    echo "Lost Location: " . $row["lost_location"] . "<br>";
    echo "Contact Information: " . $row["contact_information"] . "<br>";
    echo "Lost Date: " . $row["lost_date"] . "<br>";
    echo "Item Image: " . $row["item_image"] . "<br>";
  }
} else {
  echo "No data found in the lost table";
}


// Close the database connection
$conn->close();
?>
