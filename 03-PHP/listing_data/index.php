<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $db = new PDO('sqlite:news.db');

        $conn = $db->prepare('SELECT * FROM news');
        $conn->execute();
        $articles = $conn->fetchAll();


        foreach ($articles as $article) {
            echo '<h1>' . $article['title'] . '</h1>';
            echo '<p>' . $article['introduction'] . '</p>';
        }
    ?>
</body>
</html>