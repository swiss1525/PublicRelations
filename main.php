<?php
// MySQL server details
$servername = "localhost";  // The server where MySQL is hosted
$username = "seth";      // MySQL username
$password = "DASQL%PLS89OB2";     // MySQL password
$dbname = "my_database";    // MySQL database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Don't forget to close the connection when done
$conn->close();
?>
