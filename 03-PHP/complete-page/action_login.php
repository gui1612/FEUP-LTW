<?php
    declare(strict_types = 1);
    session_start();

    require_once('database/users.php');

    if (userExists($_POST['username'], $_POST['password']))
        $_SESSION['username'] = $_POST['username'];
    

    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>