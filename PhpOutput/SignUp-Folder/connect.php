<?php
// Establish database connection
$host = 'localhost';
$db = 'tscakesdb';
$user = 'your_username';
$password = 'your_password';

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobileNumber = $_POST['mobile_number'];
    $password = $_POST['password'];

    // Check for existing user
    $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $emailExists = $stmt->fetchColumn();

    if ($emailExists) {
        // Email already registered, show error message or redirect back to the registration form
        header("Location: registration_error.php?error=email_exists");
        exit;
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO users (username, email, mobile_number, password) VALUES (?, ?, ?, ?)");
    $stmt->execute([$username, $email, $mobileNumber, $hashedPassword]);

    // Redirect to registration success page
    header("Location: registration_success.php");
    exit;
}
?>
