<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $username = $_POST["username"];
  $email = $_POST["email"];
  $mobile_number = $_POST["mobile_number"];
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
  
  // Connect to database
  $conn = mysqli_connect("localhost", "username", "password", "tscakesdb");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Insert data into database
  $sql = "INSERT INTO tscakeslog (username, email, mobile_number, password)
          VALUES ('$username', '$email', '$mobile_number', '$password')";
  if (mysqli_query($conn, $sql)) {
    echo "Registration successful";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Close database connection
  mysqli_close($conn);
}

?>
