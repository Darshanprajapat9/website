

<?php

session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect the user to the login page or any other appropriate page
echo "<script>alert('logout');</script>";

echo "<script>window.location.href='admin.php';</script>";
exit();

?>
