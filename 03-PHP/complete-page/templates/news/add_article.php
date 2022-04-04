<?php
    declare (strict_types = 1);
    require_once('database/news.php');
    
    function displayAddNewsForm() : void {?>
        <section>
            <form>
                <input type="hidden" name="id" value="<?=getMaxArticleId() + 1?>">

                <label>Title
                    <input type="text" name="title">
                </label>

                <label>Tags [Format: tag1,tag2,tag3,etc.]
                    <input type="text" name="tags">
                </label>

                <label>Introduction
                    <textarea name="introduction" cols="30" rows="5"></textarea>
                </label>

                <label>FullText
                    <textarea name="fulltext" cols="30" rows="40">
                    </textarea>
                </label>

                <button formaction="action_add_article.php" formmethod="post">Add</button>
            </form>
        </section>
<?php }?>