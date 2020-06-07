<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
<?php
    if(isset($message)) {
        echo '<p role="alert">' . $message . '</p>';
    }
?>
        <h1>Efectuar Login</h1>
        <form method="post" action="<?=$_SERVER["REQUEST_URI"]?>">
            <div>
                <label for="username">Username</label>
                <input id="username" type="text" name="username" maxlength="64" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input id="password" type="password" name="password" maxlength="1000" required>
            </div>
            <div>
                <button type="submit" name="send">Login</button>
            </div>
        </form>
    </body>
</html>