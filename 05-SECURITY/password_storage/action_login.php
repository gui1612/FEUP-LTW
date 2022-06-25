<?php
  session_start();

  $db = new PDO('sqlite:database.db');

  $username = ($_POST['username']);
  $password = ($_POST['password']);

  $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");

  $stmt->execute(array($username));

  $user = $stmt->fetch();

  print_r($user);

  if ($user && password_verify($password, $user['password'])) 
    $_SESSION['username'] = $user['username'];

  header('Location: /');
?>