<?php

  $db = new PDO('sqlite:database.db');

  $username = preg_replace('/[^a-zA-Z0-9]/', '', $_POST['username']);
  $text = preg_replace('/[^a-zA-Z0-9]/', '', $_POST['text']);

  $stmt = $db->prepare('INSERT INTO posts VALUES(NULL, ?, ?)');
  $stmt->execute(array($username, $text));

  header('Location: /');
?>