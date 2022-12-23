<?php 

session_start();
    if(!isset($_SESSION['username'])){
        header('Location: http://localhost/web_k64a3/FINAL-PHP/login.php');
    };
?>