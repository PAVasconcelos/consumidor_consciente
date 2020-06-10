<!DOCTYPE html>
    <html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Editar Post</title>
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/reset.css">
        <?php require("layouts/head.php")?>
        <script>
            tinymce.init({
                selector: '#mytextarea'
            });
        </script>
    </head>
    <body>
        <div class="pseudo-header">
            <img class="cc-img-crud" src="/img/small_logo.png" alt="Consumidor Consciente">
        </div>
        <div class="creat-post">
            <form method="POST" action="<?=$_SERVER["REQUEST_URI"]?>" enctype="multipart/form-data">
                <div>
                    <label for="title">Editar Título:</label><br>
                    <input type="text" name="title" maxlength="200" autocomplete="off" value="<?=$post["post_title"]?>">
                </div>
                <div class="">
                    <label for="content">Editar Conteúdo:</label><br>
                        <textarea id="mytextarea" name="message" maxlength="65535"><?=$post["post_message"]?></textarea>
                </div>
                <div class="">
                    <button class="create-btn" type="submit" name="send">Enviar alterações</button>
                </div>
                <nav class="edit">
                    <a href="<?=BASE_PATH?>boss/">Voltar à página Admin</a><br>
                    <a href="<?=BASE_PATH?>">Voltar ao Site</a>
                </nav>
            </form>
        </div>
    </body>
</html>