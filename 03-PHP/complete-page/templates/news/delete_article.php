<?php function displayDeleteConfirmation($id) {?>
    <form>
        <h2>Are you sure you want to delete?</h2>
        <input type="hidden" name="id" value="<?=$id?>">
        <button formaction="action_delete_article.php" formmethod="post">Yes</button>
    </form>
<?php }?>