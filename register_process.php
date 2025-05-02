<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "careerguidance";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];

// Hash password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert into database
$sql = "INSERT INTO users (email, password, name) VALUES ('$email', '$hashed_password', '$name')";

if ($conn->query($sql) === TRUE) {
    // SUCCESS: Redirect with register=success
    header("Location: index.php?register=success");
    exit();
} else {
    // FAILED: Redirect with register=failed
    header("Location: index.php?register=failed");
    exit();
}

$conn->close();
?>
