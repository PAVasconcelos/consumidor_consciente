<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
        <form method="POST" action="<?=$_SERVER["REQUEST_URI"]?>" enctype="multipart/form-data">
            <div class="">
                <label for="title">Editar Título</label><br>
                <input type="text" name="title" maxlength="200" autocomplete="off" value="<?=$post["post_title"]?>">
            </div>
            <div class="">
                <label for="content">Editar Conteúdo</label><br>
                    <textarea name="message" maxlength="65535"><?=$post["post_message"]?></textarea>
            </div>
            <div class="">
                <button class="create-btn" type="submit" name="send">Editar Artigo</button>
            </div>
            <nav>
                <a href="<?=BASE_PATH?>boss/">Voltar à página Admin</a><br>
                <a href="<?=BASE_PATH?>">Voltar ao Site</a>
            </nav>
        </form>
    </body>
</html>