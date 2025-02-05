<?php
ob_start();
session_start();
include 'static/html/login2.html';
$mfa = '1234';
if(isset($_POST['mfa-code'])){
    if( $mfa === $_POST['mfa-code']){
        header('Location: /my-account.php');
    }
    else {
        $message = "False code. You cannot guess the mfa-code. Muahaha";
        echo '<div>'. $message . '</div>';
    }
}