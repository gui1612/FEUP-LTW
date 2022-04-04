<?php
    declare(strict_types = 1);

    function getAllNews(PDO $db) : array {
        $conn = $db->prepare('
            SELECT news.*, users.*, COUNT(comments.id) AS comments
            FROM news JOIN
                users USING (username) LEFT JOIN
                comments ON comments.news_id = news.id
            GROUP BY news.id, users.username
            ORDER BY published DESC
        ');

        $conn->execute();
        $articles = $conn->fetchAll();

        return $articles;
    }

    function getArticle(string $id) : mixed {
        require_once('database/connection.php');
        $db = getDatabaseConnection();

        $conn = $db->prepare('SELECT * FROM news JOIN users USING (username) WHERE id = ?');
        $conn->execute(array($id));
        
        return $conn->fetch();
    }

    function editArticle(string $id, string $title, string $introduction, string $fulltext) : void {
        require_once('database/connection.php');
        $db = getDatabaseConnection();

        $conn = $db->prepare('UPDATE news
                SET title = ?, 
                introduction = ?,
                fulltext = ?
                WHERE 
                id=?');

        $conn->execute(array($title, $introduction, $fulltext, $id));
    }

    function addArticle(string $username, string $tags, string $title, string $introduction, string $fulltext) : int {
        require_once('database/connection.php');
        $db = getDatabaseConnection();

        $conn = $db->prepare('INSERT INTO news VALUES (NULL, ?, ?, ?, ?, ?, ?)');

        $conn->execute(array($title, time(), $tags, $username, $introduction, $fulltext));

        return getMaxArticleId();
    }

    function deleteArticle(string $id) : void {
        require_once('database/connection.php');
        $db = getDatabaseConnection();

        $conn = $db->prepare('DELETE FROM news WHERE id=?');

        $conn->execute(array($id));
    }

    function getMaxArticleId() : mixed {
        require_once('database/connection.php');
        $db = getDatabaseConnection();

        $conn = $db->prepare('SELECT max(id) AS mx FROM news');

        $conn->execute();

        return $conn->fetch()['mx'];
    }
?>