<?php

require("models/users.php");
require("models/posts.php");

$userModel = new Users();
$postModel = new Posts();

$posts = $postModel->getList();

if(empty($_SESSION["name"])) {
    require("views/login.php");

} else if($url_parts[2] === "create" && !empty($_SESSION["name"]) ) {
    require("views/create.php");

    if(isset($_POST["send"])) {

        $data = $_POST;
        
        $post_id = $postModel->createPost( $data );
    }

} else if($url_parts[2] === "logout") {
    session_destroy();
    header("Location: /boss");

} else if($url_parts[2] === "posts") {
    require("views/home.php");

} else if($url_parts[2] === "delete") {
    $postModel->deletePost($url_parts[3]);
    header("Location: /boss/create");

} else if($url_parts[2] === "edit") {
    
    require("views/preview.php");

} else {
    header("Location: /boss/create");

}

if(isset($_POST["send"])) {
    $response = $userModel->login($_POST);

    if($response) {
        header("Location: /boss/create");
        
    }
}

//if($url_parts[2] === "creat" && !empty($_SESSION["name"]) ) {
//    require("views/creat.php");
//
//} else if($url_parts[2] === "logout") {
//    session_destroy();
//    header("Location: /boss");

//}




//session_destroy();

//var_dump($_SESSION["name"]);
