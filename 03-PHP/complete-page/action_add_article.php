<?php
    declare(strict_types = 1);
    session_start();

    include_once('database/news.php');
    include_once('templates/news/add_article.php');

    if (!array_key_exists('username', $_SESSION) || empty($_SESSION['username']))
        header('Location: index.php');

    $title = htmlspecialchars($_POST['title']);
    $tags = htmlspecialchars($_POST['tags']);
    $introduction = htmlspecialchars($_POST['introduction']);
    $fulltext = htmlspecialchars($_POST['fulltext']);

    var_dump(getMaxArticleId());

    $id = addArticle($_SESSION['username'], $tags, $title, $introduction, $fulltext);

    header('Location: article.php?id=' . $id);
?>
