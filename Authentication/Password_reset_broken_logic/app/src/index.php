<?php
ob_start();
session_start();
$token = rand(0, 100);
include 'static/forgot-password.html';