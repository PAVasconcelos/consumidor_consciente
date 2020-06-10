<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <?php require("layouts/head.php")?>
    </head>
    <body>
<?php
    if(isset($message)) {
        echo'
            <span>' . $message . '</span>
        ';
    }
?>

        <div class="login"> 
            <form class="login-form" method="post" action="<?=$_SERVER["REQUEST_URI"]?>">
            <p class="top-label">Login</p>
                <div class="sub">
                    <label for="username">Username</label>
                    <input id="username" type="text" name="username" maxlength="64" required>
                </div>
                <div class="sub">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" maxlength="1000" required>
                </div>
                <div>
                    <button type="submit" name="send">Login</button>
                </div>
            </form>
        </div>
    </body>
</html>