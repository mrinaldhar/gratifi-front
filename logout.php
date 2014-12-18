<?php
ob_start(); session_start();

$_SESSION='';
session_destroy();
$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php'; 
          header('Location: ' . $home_url); 

          ?>