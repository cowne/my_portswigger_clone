<?php
ob_start();
session_start();
$token = $_POST['token'];
$new_pass = $_POST['new-password'];
$confirm_pass = $_POST['confirm-password'];
if(isset($new_pass) and isset($confirm_pass) and isset($token)) { 
    if( $new_pass !== $confirm_pass){ // forgot to check token is used or not.
        $_SESSION['message'] = 'New password and confirm password doesn\'t match.';
    }
    else{
        $_SESSION['message'] = 'Change password successful.';
    }
    header('Location: index.php');
}

