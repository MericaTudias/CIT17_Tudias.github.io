<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tudias";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Example query
$sql = "SELECT * FROM student";
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Process the results
    while ($row = $result->fetch_assoc()) {
        echo "Student ID: " . $row["StudentID"]. "<br>"
        . "First Name: " . $row["FirstName"]. "<br>"
        . "Last Name: " . $row["LastName"]. "<br>"
        . "Date of Birth: " . $row["DateOfBirth"]. "<br>"
        . "Email: " . $row["Email"]. "<br>"
        . "Phone: " . $row["Phone"]. "<br>";
    }
} 

// Close connection
$conn->close();
?>
