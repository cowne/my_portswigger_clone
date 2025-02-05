<?php
ob_start();
session_start();
if (isset($_SESSION['username'])){ //check the session is stored or not.
    include 'static/html/my-account.html';
} else {
    header('Location: /index.php');
}