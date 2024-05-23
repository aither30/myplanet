<?php
session_start();

// Dummy login validation
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Replace the following logic with actual user validation
    if ($username === 'user' && $password === 'password') {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: /index.php");
        exit();
    } else {
        // Redirect back to login page with an error message
        header("Location: ./login/HalamanLogin.php?error=invalid_credentials");
        exit();
    }
} else {
    // Redirect to login page if accessed without POST method
    header("Location: ./login/HalamanLogin.php");
    exit();
}
?>
