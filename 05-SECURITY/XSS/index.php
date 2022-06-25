<?php
  $db = new PDO('sqlite:database.db');

  $stmt = $db->prepare('SELECT * FROM posts ORDER BY id DESC');
  $stmt->execute();

  $comments = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Super Safe Website</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form action="action_save_post.php" method="post">
      <input type="text" name="username" placeholder="username">
      <input type="password" name="password" placeholder="password">
      <textarea name="text"></textarea>
      <button type="submit">Post</button>
    </form>
    <section id="comments">
      <?php foreach ($comments as $comment) { ?>
        <article>
          <p><?=htmlentities($comment['text'])?></p>
          <small>&mdash; <?=htmlentities($comment['author'])?></small>
        </article>
      <?php } ?>
    </section>
  </body>
</html>