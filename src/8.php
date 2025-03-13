
<?php

// Get the value of the "search" query string parameter from the URL
$search = $_GET["search"];

// Check if the search term is not empty
if (!empty($search)) {
    // Connect to the database and perform a query
    $conn = new mysqli("localhost", "user", "password", "database");
    $result = $conn->query("SELECT * FROM users WHERE name LIKE '%" . $search . "%'");

    // Display the results of the query
    while ($row = $result->fetch_assoc()) {
        echo $row["name"] . "<br>";
    }
} else {
    echo "No search term provided";
}
?>