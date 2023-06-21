<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    if ($email === 'example@example.com' && $password === 'password123') {
        
        $_SESSION['email'] = $email;

        
        header('Location: home.php');
        exit;
    } else {
        echo 'Login failed. Invalid email or password.';
    }
}
?>
