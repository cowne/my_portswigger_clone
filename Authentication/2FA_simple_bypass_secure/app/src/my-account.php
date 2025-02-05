<?php
ob_start();
session_start();
if (isset($_SESSION['username'])){ //check the session is stored or not.
    if($_SESSION['loggin'] === true){
        include 'static/html/my-account.html';
    }
    else{
        $_SESSION['message'] = 'Hack detected! Don\'t use that trick :D';
        header('Location: /index.php');
    }
} else {
    $_SESSION['message'] = "You need login first";
    header('Location: /index.php');
}