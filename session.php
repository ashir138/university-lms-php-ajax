<?php
// Start session securely
session_start();

// Prevent session fixation attacks
if (!isset($_SESSION['initiated'])) {
    session_regenerate_id();
    $_SESSION['initiated'] = true;
}

// Check if user is logged in
if (empty($_SESSION['id'])) {
    header("Location: index.php");
    exit();
}

// Store session user ID
$session_id = $_SESSION['id'];
?>
