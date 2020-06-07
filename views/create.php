<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Criar Post</title>
        <?php require("layouts/head.php")?>
    </head>
    <body>
<?php
    if (isset($message)) {
        echo '
                <p role="alert">' . $message . '</p>
            ';
    }
?>
        <h2>Criar um Post</h2>
        <form method="post" action="<?=$_SERVER["REQUEST_URI"]?>">
            <div>
                <label>Título:<br>
                    <input type="text" name="title">
                </label>
            </div>
            <div>
                <label>
                    Conteúdo:<br>
                    <textarea name="content" maxlength="65535"></textarea>
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

        <table>
            <caption><h2>Editar / Eliminar um Post</h2></caption>
            <tr>
                <th>Post_id</th>
                <th>Title</th>
            </tr>

<?php
foreach ($posts as $post) {
    echo '
        <tr>
            <td>' . $post["post_id"] . '</td>
            <td>' . $post["post_title"] . '</td>
            <td><a href="'. BASE_PATH .'boss/edit/' . $post["post_id"] . '">Editar</a></td>
            <td><a href="'. BASE_PATH .'boss/delete/' . $post["post_id"] . '">Eliminar</a></td>
    ';
}
?>

        </table>
        </nav>
    </body>
</html>