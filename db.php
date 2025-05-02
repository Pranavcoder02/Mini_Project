<?php
$servername = "sql310.infinityfree.com";
$username = "if0_38838782";
$password = "p16r18a1n"; // <-- put your real password here
$database = "if0_38838782_XXX"; // <-- put your real database name here

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully"; // Uncomment this line to test
?>
