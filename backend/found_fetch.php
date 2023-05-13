<?php

include "test_db_connection.php";



// Database connection code goes here

$sql = "SELECT item_name, item_description, found_location, found_date, item_image FROM found";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    // Output the data here
    echo "Item Name: " . $row["item-name"] . "<br>";
    echo "Item Description: " . $row["item_description"] . "<br>";
    echo "Found Location: " . $row["found_location"] . "<br>";
    echo "Found Date: " . $row["found_date"] . "<br>";
  
  }
} else {
  echo "No data found in the lost table";
}


$conn->close();
?>
