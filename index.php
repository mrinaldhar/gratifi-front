<?php
ob_start();
session_start();
if (isset($_SESSION['username'])) {
$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/home.php'; 
header('Location: ' . $home_url); 
}
else {
    $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/login.php'; 
header('Location: ' . $home_url); 
}


?>