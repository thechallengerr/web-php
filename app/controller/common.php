<?php 

session_start();
    if(!isset($_SESSION['user']['login_id'])){
        header('Location: http://localhost/web_k64a3/FINAL-PHP/login.php');
    };
?>