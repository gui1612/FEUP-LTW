<?php
    declare(strict_types = 1);
    session_start();
    
    include_once('templates/common/common.php');
    include_once('templates/news/full_article.php');

    outputHeader();
    outputFullArticle($_GET['id']);
    outputFooter();
?>