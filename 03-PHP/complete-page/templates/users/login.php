<?php
    declare (strict_types = 1);
    function displayLoginForm() : void {?>
        <section id="login">
            <h1>Login</h1>
            <form>
                <label>
                Username <input type="text" name="username">
                </label>
                <label>
                Password <input type="password" name="password">
                </label>
                <button formaction="action_login.php" formmethod="post">Login</button>
            </form>
        </section>
<?php }?>