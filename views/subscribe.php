<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php require("layouts/head.php")?>
        <title>Consumidor consciente</title>
    </head>
    <body>
        <?php require("layouts/header.php");?>
        <div class="subscribe">
            <h1>Subscreva a nossa newsletter</h1>
            <h2>Fique a par de todas as novidades e promoções!</h2>
            <form method="post" action="/subscribe">
                <input placeholder=" Email" type="text" name="email" maxlength="252"><br>          
                <input placeholder=" Nome" type="text" maxlength="100" name="name"><br>
                <button class="submit-button" type="submit" name="send">Subscrever!</button>
            </form>
        </div>

        <?php require("layouts/footer.php")?>
        
    </body>
</html>