<?php
    require("../models/posts.php");

    $postModel = new Posts();

    $posts = $postModel->getList();
    
    require("../views/home.php");
?>