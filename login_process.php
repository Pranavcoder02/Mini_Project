<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "careerguidance";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        header("Location: index.php?login=success");
        exit();
    } else {
        header("Location: login.php?login=failed");
        exit();
    }
} else {
    header("Location: login.php?login=failed");
    exit();
}

$conn->close();
?>
