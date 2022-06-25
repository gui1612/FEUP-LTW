<?php
    declare(strict_types = 1);
    session_start();

    include_once('templates/common/common.php');
    include_once('templates/news/edit_article.php');
    include_once('database/connection.php');

    if (!array_key_exists('username', $_SESSION) || empty($_SESSION['username']))
        header('Location: index.php');

    outputHeader();
    displayEditForm($_GET['id']);
    outputFooter();
?>