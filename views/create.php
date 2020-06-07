<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Criar Post</title>
    </head>
    <body>
<?php
    if (isset($message)) {
        echo '
                <p role="alert">' . $message . '</p>
            ';
    }
?>
        <form method="post" action="<?=$_SERVER["REQUEST_URI"]?>">
            <div>
                <label>Título:
                    <input type="text" name="title" required>
                </label>
            </div>
            <div>
                <label>
                    Conteúdo:
                    <textarea name="content" required maxlength="65535"></textarea>
                </label>
            </div>
            <div>
            <div>
                <button type="submit" name="send">Criar</button>
            </div>
        </form>
        <nav>
            <a href="<?=BASE_PATH?>boss/logout">logout</a><br>

<?php
    if(!empty($_SESSION["name"])) {
        echo '<a href="'. BASE_PATH .'">Voltar ao site!</a>';
    }
?>

        </nav>
    </body>

</html>