<?php 
declare(strict_types = 1);
function outputComment_list(array $comments) : void {?>

    <section id='comments'>
        <h1><?= count($comments) ?> Comments</h1>
        <?php foreach ($comments as $comment) outputComment($comment); ?>

        <form>
            <h2>Add your voice...</h2>
            <label>Username
                <input type="text" name="username">
            </label>
            <label>E-mail
                <input type="email" name="email">
            </label>
            <label>Comment
                <textarea name="comment"></textarea>
            </label>
            <button formaction="#" formmethod="post">Reply</button>
        </form>
    </section>
<?php } ?>

<?php function outputComment(array $comment) : void {
    $date = date('F j', $comment['published']); ?>

    <article class="comment">
        <span class="user"><?= $comment['username'] ?></span>
        <span class='date'><?= $date ?></span>
        <p><?= $comment['text'] ?></p>
    </article>

<?php } ?>