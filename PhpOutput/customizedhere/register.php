<?php
// Retrieve the form data
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$cakeinfo = $_POST['cakeinfo'];

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

// Insert the form data into the database
$sql = "INSERT INTO tscustom (firstname, middlename, lastname, phone, cakeinfo) 
        VALUES ('$firstname', '$middlename', '$lastname', '$phone', '$cakeinfo')";

if ($conn->query($sql) === TRUE) {
    // Registration successful
    echo "Registration successful! Thank you for registering.";
    // Redirect back to custom.php
    header("Location: http://localhost/STCakesWEB/PhpOutput/customize/custom.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
