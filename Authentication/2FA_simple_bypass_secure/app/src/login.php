<?php
ob_start();
session_start();
$user = 'wiener';
$pass = 'peter';
if( isset($_POST['username']) and isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === $user and $password === $pass){
        $_SESSION['username'] = $username;
        header('Location: /login2.php');
    }
    else {
        echo 'Invalid credential';
    }
}