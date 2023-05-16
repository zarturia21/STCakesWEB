<?php
// Establish database connection
$host = 'localhost';
$db = 'tscakesdb';
$user = 'root';
$password = '';

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobileNumber = $_POST['mobile_number'];
    $password = $_POST['password'];

    // Check for empty fields
    if (empty($username) || empty($email) || empty($mobileNumber) || empty($password)) {
        // Fields are blank, show error message or redirect back to the registration form
        header("Location: ./SignUp.php");
        exit;
    }

    // Check for existing user
    $stmt = $conn->prepare("SELECT COUNT(*) FROM tscakeslog WHERE email = ?");
    $stmt->execute([$email]);
    $emailExists = $stmt->fetchColumn();

    if ($emailExists) {
        // Email already registered, show error message or redirect back to the registration form
        header("Location: ./SignUp.php");
        exit;
    }

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO tscakeslog (username, email, mobile_number, password) VALUES (?, ?, ?, ?)");
    $stmt->execute([$username, $email, $mobileNumber, $password]);

    // Redirect to registration success page
    header("Location: /STCakesWEB/PhpOutput/loginpage.php");
    exit;
}
?>
