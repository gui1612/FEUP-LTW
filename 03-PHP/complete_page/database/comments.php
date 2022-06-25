<?php
    declare(strict_types = 1);

    function getComments(string $id) : array {
        require_once('database/connection.php');
        $db = getDatabaseConnection();

        $conn = $db->prepare('SELECT * FROM comments JOIN users USING (username) WHERE news_id = ?');
        $conn->execute(array($id));

        return $conn->fetchAll();
    }
?>