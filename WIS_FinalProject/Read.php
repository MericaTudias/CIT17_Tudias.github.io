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

// Select data
$sql = "SELECT StudentID, FirstName, LastName, DateofBirth, Email, Phone FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Student ID: " . $row["StudentID"]. " - First Name: " . $row["FirstName"]. " - Last Name: " . $row["LastName"]. " - Date of Birth: " . $row["DateofBirth"]. " - Email: " . $row["Email"]. " - Phone: " . $row["Phone"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>