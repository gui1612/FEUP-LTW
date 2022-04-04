<?php
    declare (strict_types = 1);
    function displayEditForm(string $id) : void {
        include_once('database/connection.php');
        include_once('database/news.php');

        $article = getArticle($id);
    ?>
        <section>
            <form>
                <input type="hidden" name="id" value="<?=$id?>">

                <label>Title
                    <input type="text" name="title" value="<?=$article['title']?>">
                </label>

                <label>Introduction
                    <textarea name="introduction" cols="30" rows="5">
                        <?=$article['introduction']?>
                    </textarea>
                </label>

                <label>FullText
                    <textarea name="fulltext" cols="30" rows="40">
                        <?=$article['fulltext']?>
                    </textarea>
                </label>

                <button formaction="action_edit_news.php" formmethod="post">Edit</button>
            </form>
        </section>
<?php }?>