<?php

require("models/users.php");

$userModel = new Users();

if(empty($_SESSION["name"])) {
    require("views/login.php");

}

if(isset($_POST["send"])) {
    $response = $userModel->login($_POST);

    if($response) {
        header("Location: /boss/creat");
        
    }
}

if($url_parts[2] === "creat") {
    require("views/creat.php");

} else if($url_parts[2] === "logout") {
    session_destroy();
    header("Location: /boss");

}

//session_destroy();

//var_dump($_SESSION["name"]);
