<?php
// Initialize session
session_start();

// Check if user is logged in (for demonstration purposes)
if (!isset($_SESSION['logged_in'])) {
    // Redirect to login page
    header("Location: /login");
    exit();
}

// Code for your PHP project here

// End of script
?>
