<?php
ob_start();
session_start();
unset($_SESSION['username']);
unset($_SESSION['loggin']);
header('Location: /index.php');