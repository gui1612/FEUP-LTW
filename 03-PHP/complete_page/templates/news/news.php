<?php 
declare (strict_types = 1);
function outputArticleList(array $articles) : void {?>
    <section id="news">  
        <?php foreach ($articles as $article) {
            $date = date('F j', $article['published']);
            $tags = explode(',', $article['tags']); ?>

            <article>
                <header>
                <h1><a href="article.php?id=<?=$article['id']?>"><?=$article['title']?></a></h1>
                </header>
                <img src='https://picsum.photos/600/300?business' alt=''>
                <p><?=$article['introduction']?></p>
                <p><?=$article['fulltext']?></p>
                <footer>
                <span class='author'><?=$article['name']?></span>
                <span class='tags'>
                <?php foreach ($tags as $tag) {?>
                    <a href='index.php'>
                        <?=$tag?>
                    </a> <a href="index.php">
                <?php }?>
                
                </a></span>
                <span class="date"><?=$date?></span>
                <a class="comments" href="article.php?id=<?=$article['id']?>"><?=$article['comments']?></a>
                </footer>
            </article>
        
        <?php }?>
    </section>
<?php }?>