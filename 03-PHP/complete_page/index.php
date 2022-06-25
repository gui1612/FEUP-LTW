<?php 
    declare(strict_types = 1);
    session_start();
    
    require_once('database/connection.php');
    require_once('database/news.php');
    require_once('templates/news/news.php');
    require_once('templates/common/common.php');

    $db = getDatabaseConnection();
    $articles = getAllNews($db);

    outputHeader();
    outputArticleList($articles);
    outputFooter();
?>