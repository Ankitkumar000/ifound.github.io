<?php
include "test_db_connection.php";
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the contact table
$sql = "SELECT name, email, subject, message FROM contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table>";
  echo "<tr><th>Name</th><th>Email</th><th>Subject</th><th>Message</th></tr>";
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["subject"] . "</td>";
    echo "<td>" . $row["message"] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "No data found in the contact table";
}

$conn->close();
?>
