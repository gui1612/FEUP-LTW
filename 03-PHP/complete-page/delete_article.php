<?php
    declare(strict_types = 1);
    session_start();

    require_once('templates/news/delete_article.php');
    require_once('templates/common/common.php');


    if (!array_key_exists('username', $_SESSION) || empty($_SESSION['username']))
        header('Location: index.php');


    outputHeader();
    displayDeleteConfirmation($_GET['id']);
    outputFooter();
?>