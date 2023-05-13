<?php
include "test_db_connection.php";
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the found table
$sql = "SELECT item_name, item_description, found_location, found_date, item_image FROM found";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    // Output the data here
    echo "Item Name: " . $row["item_name"] . "<br>";
    echo "Item Description: " . $row["item_description"] . "<br>";
    echo "Found Location: " . $row["found_location"] . "<br>";
    echo "Found Date: " . $row["found_date"] . "<br>";
    echo "Item Image: " . $row["item_image"] . "<br>";
  }
} else {
  echo "No data found in the found table";
}

// Fetch data from the lost table
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

// Fetch data from the contact table
$sql = "SELECT name, email, subject, message FROM contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    // Output the data here
    echo "Name: " . $row["name"] . "<br>";
    echo "Email: " . $row["email"] . "<br>";
    echo "Subject: " . $row["subject"] . "<br>";
    echo "Message: " . $row["message"] . "<br>";
  }
} else {
    echo "No data found in the contact";
  }
  $conn->close();
  ?>
  