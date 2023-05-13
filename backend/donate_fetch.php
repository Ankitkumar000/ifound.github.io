<?php
include "test_db_connection.php";
// Fetch data from the donate table
$sql = "SELECT item_name, item_description, donate_location, donate_date, item_image FROM donate";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    // Output the data here
    echo "Item Name: " . $row["item_name"] . "<br>";
    echo "Item Description: " . $row["item_description"] . "<br>";
    echo "Donate Location: " . $row["donate_location"] . "<br>";
    echo "Donate Date: " . $row["donate_date"] . "<br>";
    echo "Item Image: " . $row["item_image"] . "<br>";
  }
} else {
  echo "No data found in the donate table";
}

  // Close the database connection
  $conn->close();
  ?>
  