<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codingchallenge";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL query to select all data from the table 'users'
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["username"] . "</td></tr>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>
