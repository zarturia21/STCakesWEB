<?php
// Retrieve the email address from the form submission
$email = $_POST['email'];

// Validate the email address (you can add more validation if needed)

// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tscakesdb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert the email address into the database
$sql = "INSERT INTO signedemail (email) VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
    echo "Email registered successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
