<?php
    declare(strict_types = 1);
    session_start();

    require_once('database/users.php');

    if (!usernameExists($_POST['username'])) {
        createUser($_POST['username'], $_POST['password'], $_POST['email']);
        $_SESSION['username'] = $_POST['username'];
        header('Location: index.php');
    }
    

    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>