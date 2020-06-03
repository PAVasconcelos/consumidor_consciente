<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="" type="text/css" href="../css/reset.css">
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
            <form method="post" action="../controllers/subscribe.php">
                <input placeholder=" Email" type="text" name="email"><br>          
                <input placeholder=" Nome" type="text" name="name"><br>
                <button class="submit-button" type="submit" name="send">Subscrever!</button>
            </form>
        </div>

        <footer>
            <div class="row-footer">
                <div class="column-footer column-footer-logo">
                  <img class="logo-footer" src="../img/logo_small.png" alt="">
                </div>
                <div class="column-footer column-footer-nav">
                    <ul class="nav-list-footer">
                        <a class="nav-list" href="#home"><img class="nav-icons icon-home" src="../img/icons/home_icon.png" alt=""><li class="li-home">HOME</li></a>
                        <a class="nav-list" href="#home"><img class="nav-icons" src="../img/icons/subscribe_icon.png" alt=""><li>SUBSCREVER</li></a>
                        <a class="nav-list" href="#home"><img class="nav-icons" src="../img/icons/contacts.png" alt=""><li>CONTACTOS</li></a>
                    </ul>
                </div>
                <div class="column-footer column-footer-contact">
                    <h2>Consumidorconsciente@consumidor.pt</h2>
                    <p>A ajudar o consumidor desde 2020!</p>
                    <p>Developed By - Paulo Vasconcelos</p>
                </div>
            </div>
        </footer>
        
    </body>
</html>