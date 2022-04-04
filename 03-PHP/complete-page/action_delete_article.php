<?php
    declare(strict_types = 1);
    session_start();

    include_once('database/news.php');

    if (!array_key_exists('username', $_SESSION) || empty($_SESSION['username']))
        header('Location: index.php');

    $id = htmlspecialchars($_POST['id']);

    deleteArticle($id);

    header('Location: index.php');
?>