<?php 
    declare (strict_types = 1);
    session_start();

    function outputFullArticle(string $id) : void {
        include_once('templates/comments/comments.php');
        include_once('database/news.php');
        include_once('database/comments.php');
        include_once('templates/common/common.php');

        $article = getArticle($_GET['id']);
        $comments = getComments($_GET['id']);
        $tags = explode(',', $article['tags']);
        $date = date('F j', $article['published']);
    ?>

    <section id="news">
    <article>
        <header>
            <h1><a href="article.php?id=<?=$article['id']?>"><?=$article['title']?></a></h1>
        </header>
        <img src='https://picsum.photos/600/300?business' alt=''>
        <p><?=$article['introduction']?></p>
        <p><?=$article['fulltext']?></p>

        <?=outputComment_list($comments);?>

        <footer>
            <span class="author"><?=$article['username']?></span>
            <?php if (array_key_exists('username', $_SESSION) && !empty($_SESSION['username'])) {?>
                <span class="delete"><a href="delete_article.php?id=<?=$id?>">Delete</a></span>
                <span class="edit"><a href="edit_article.php?id=<?=$id?>">Edit</a></span>
            <?php }?>
            <span class="tags">
                <?php foreach ($tags as $tag) {?>
                        <a href='index.php'><?=$tag?></a>
                <?php }?>
            </span>
            <span class="date"><?=$date?></span>
            <a class="comments" href="article.php?id=<?=$id?>#comments">5</a>
        </footer>
    </article>
    </section>
<?php }?>