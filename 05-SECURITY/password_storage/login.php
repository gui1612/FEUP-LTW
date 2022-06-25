<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Very Secure Website</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="login">
    <form action="action_login.php" method="post">
      <input type="text" name="username" placeholder="username">
      <input type="password" name="password" placeholder="password">
      <button type="submit">Login</button>
      <button type="submit" id="sqli">Run Script</button>
    </form>
  </body>
</html>

