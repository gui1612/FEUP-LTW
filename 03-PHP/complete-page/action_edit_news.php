<?php
    declare(strict_types = 1);
    session_start();

    include_once('database/news.php');

    if (!array_key_exists('username', $_SESSION) || empty($_SESSION['username']))
        header('Location: index.php');

    $id = htmlspecialchars($_POST['id']);
    $title = htmlspecialchars($_POST['title']);
    $introduction = htmlspecialchars($_POST['introduction']);
    $fulltext = htmlspecialchars($_POST['fulltext']);


    editArticle($id, $title, $introduction, $fulltext);

    header('Location: article.php?id=' . $id);
?>