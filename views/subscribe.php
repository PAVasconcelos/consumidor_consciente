<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php require("layouts/head.php")?>
        <title>Consumidor consciente</title>
    </head>
    <body>
        <nav class="navigation-bar">
            <div>
                <a href="/home"><img class="logo-nav-bar" src="../img/small_logo.png" alt="Consumidor Consciente"></a>
            </div>
            <ul class="nav-options-ul">
                <a class="nav-list" href="/home"><img class="nav-icons" src="../img/icons/home_icon.png" alt=""><li>HOME</li></a>
                <a class="nav-list" href="/subscribe"><img class="nav-icons" src="../img/icons/subscribe_icon.png" alt=""><li>SUBSCREVER</li></a>
                <a class="nav-list" href="/contacts"><img class="nav-icons" src="../img/icons/contacts.png" alt=""><li>CONTACTOS</li></a>
            </ul>
        </nav>

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