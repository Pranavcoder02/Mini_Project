<?php
session_start();

// Destroy session
session_unset();
session_destroy();

// Set a short-lived cookie instead of session (NEW WAY)
setcookie('logout_success', '1', time() + 3, '/'); // expires in 3 seconds

// Redirect to homepage
header("Location: homePageFront.php");
exit();
?>
