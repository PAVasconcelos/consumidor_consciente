<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Criar Post</title>
        <?php require("layouts/head.php")?>
        <script>
            tinymce.init({
                selector: '#mytextarea'
            });
        </script>
    </head>
    <body>
<?php
    if (isset($message)) {
        echo '
                <p role="alert">' . $message . '</p>
            ';
    }
?>
        <div>
            <img class="cc-img-crud" src="../img/small_logo.png" alt="Consumidor Consciente">
        </div>
        <nav class="nav-crud">
            <a href="<?=BASE_PATH?>boss/logout">logout</a>
            <a class="end" href="<?= BASE_PATH?>">Voltar ao site!</a>
        </nav>
        <div class="creat-post">
            <p class="crudh">Criar um Post</p>
            <form method="post" action="<?=$_SERVER["REQUEST_URI"]?>">
                <div>
                    <label>Título:</label><br>
                        <input required type="text" name="title">
                </div>
                <div>
                    <label>Conteúdo:</label><br>
                        <textarea required id="mytextarea" name="content" maxlength="65535"></textarea>
                </div>
                <div>
                <div>
                    <button type="submit" name="send">Criar</button>
                </div>
            </form>
            <hr>
        </div>       
        <table class="crud-table">
            <caption><p>Editar / Eliminar um Post</p></caption>
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
            <td class="less"><a href="'. BASE_PATH .'boss/edit/' . $post["post_id"] . '">Editar</a></td>
            <td class="less"><a href="'. BASE_PATH .'boss/delete/' . $post["post_id"] . '">Eliminar</a></td>
        </tr>
    ';
}
?>

        </table>
        </nav>
    </body>
</html>