<?php
  session_start();

  if (!isset($_SESSION['username'])) die(header('Location: login.php'));
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Very Secure Website</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <p>
      You are logged in as <?=$_SESSION['username']?>. 
      <a href="action_logout.php">Logout</a>.
    </p>
  </body>
</html>