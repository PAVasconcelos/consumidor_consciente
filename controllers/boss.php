<?php

require("models/users.php");
require("models/posts.php");

$userModel = new Users();
$postModel = new Posts();

$posts = $postModel->getList();

if(empty($_SESSION["name"])) {
    require("views/login.php");

    if(isset($_POST["send"])) {
        $response = $userModel->login($_POST);
    
        if($response) {
            header("Location: /boss/crud");
            
        }
    
    }

} else if($url_parts[2] === "crud" && !empty($_SESSION["name"]) ) {
    require("views/crud.php");

    if(isset($_POST["send"])) {
        $data = $_POST;
        $post_id = $postModel->createPost( $data );
        header("Refresh:0");
    }

} else if($url_parts[2] === "logout") {
    session_destroy();
    header("Location: /boss");

} else if($url_parts[2] === "delete") {
    $postModel->deletePost($url_parts[3]);
    header("Location: /boss/crud");

} else if($url_parts[2] === "edit") {
    $post = $postModel->getPost($url_parts[3]);
    require("views/edit_post.php");

    if(isset($_POST["send"])) {
        $res = $postModel->editPost($_POST, $url_parts[3]);
        if(!empty($res)) {
            header("Location: " . BASE_PATH . "boss");
        }
    }

} else {
    header("Location: /boss/crud");
}