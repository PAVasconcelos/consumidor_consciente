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
          
<?php
    foreach($posts as $post) {
?>
        <article class="container">
            <h2><?php echo $post["post_title"]; ?></h2>
            <div class="browser">
                <div>
                     <?php echo $post["post_message"] ?>       
                </div>
                <time>                         
                    <?php echo $post["post_date"] ?>                       
                </time>    
            </div>
        </article>
<?php
    }
?>
        <?php require("layouts/footer.php")?>            
    </body>
</html>