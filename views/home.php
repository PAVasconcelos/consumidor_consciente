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

        <ul>
          
        <?php
            foreach($posts as $post) {
        ?>
            <div class="posts">
              <div class="post-id"><?php echo $post["post_id"]; ?></div>
              <div class="post-title"><?php echo $post["post_title"]; ?></div>
        <?php
            }
        ?>

        </ul>
        
        <article class="container">
            <h1>10 melhores carros a baixo 4000€</h1>
            <article class="browser">
              <h2>Volkswagen Golf 4</h2>
              <p>Google Chrome is a web browser developed by Google, released in 2008. Chrome is the world's most popular web browser today!</p>
            </article>
            <article class="browser">
              <h2>Alfa Romeo 156</h2>
              <p>Mozilla Firefox is an open-source web browser developed by Mozilla. Firefox has been the second most popular web browser since January, 2018.</p>
            </article>
            <article class="browser">
              <h2>Renault Clio</h2>
              <p>Microsoft Edge is a web browser developed by Microsoft, released in 2015. Microsoft Edge replaced Internet Explorer.</p>
            </article>
        </article>
        <hr>
        <article class="container">
            <h1>O melhor super-mercado preço qualidade</h1>
            <article class="browser">
              <h2>Auchan</h2>
              <p>Google Chrome is a web browser developed by Google, released in 2008. Chrome is the world's most popular web browser today!</p>
            </article>
            <article class="browser">
              <h2>Continente</h2>
              <p>Mozilla Firefox is an open-source web browser developed by Mozilla. Firefox has been the second most popular web browser since January, 2018.</p>
            </article>
            <article class="browser">
              <h2>Lidl</h2>
              <p>Microsoft Edge is a web browser developed by Microsoft, released in 2015. Microsoft Edge replaced Internet Explorer.</p>
            </article>
        </article>

        <footer>
            <div class="row-footer">
                <div class="column-footer column-footer-logo">
                  <img class="logo-footer" src="../img/logo_small.png" alt="">
                </div>
                <div class="column-footer column-footer-nav">
                    <ul class="nav-list-footer">
                        <a class="nav-list" href="/boss/creat"><img class="nav-icons icon-home" src="../img/icons/home_icon.png" alt=""><li class="li-home">HOME</li></a>
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