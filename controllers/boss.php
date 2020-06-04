<?php
    session_start();

    require("views/boss.php");

    if($url_parts[2] === "creat") {
    
        require("views/creat.php");
    }

?>