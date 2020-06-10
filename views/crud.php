<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Criar Post</title>
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/reset.css">
        <?php require("layouts/head.php")?>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>             
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
        <div class="pseudo-header">
            <img class="cc-img-crud" src="../img/small_logo.png" alt="Consumidor Consciente">
        </div>
        <nav class="nav-crud">
            <a href="<?=BASE_PATH?>boss/logout">Logout</a>
            <a class="end" href="<?= BASE_PATH?>">Voltar ao site</a>
        </nav>
        <div class="creat-post">
        <form method="POST" action="<?=$_SERVER["REQUEST_URI"]?>" enctype="multipart/form-data">
                <div>
                    <label for="title">Título:</label><br>
                    <input type="text" name="title" maxlength="200" autocomplete="off">
                </div>
                <div class="">
                    <label for="content">Conteúdo:</label><br>
                        <textarea id="mytextarea" name="content" maxlength="65535"></textarea>
                </div>
                <div class="">
                    <button class="create-btn" type="submit" name="send">Criar Post</button>
                </div>
            </form>
        </div>     
          
        <table class="crud-table">
            <caption><p>Editar / Eliminar um Post</p></caption>
            <tr>
                <th>Post Nº</th>
                <th>Título</th>
            </tr>

<?php
foreach ($posts as $post) {
    echo '
        <tr>
            <td>' . $post["post_id"] . '</td>
            <td>' . $post["post_title"] . '</td>
            <td href="'. BASE_PATH .'boss/edit/' . $post["post_id"] . '" class="less"><a href="'. BASE_PATH .'boss/edit/' . $post["post_id"] . '">Editar</a></td>
            <td href="'. BASE_PATH .'boss/delete/' . $post["post_id"] . '" class="less"><a href="'. BASE_PATH .'boss/delete/' . $post["post_id"] . '">Eliminar</a></td>
        </tr>
    ';
}
?>

        </table>
        </nav>
    </body>
</html>