<?php

session_start();

require("models/users.php");

$userModel = new Users();

if($url_parts[1] === "access") {
    if(isset($_POST["send"])) {
        //$response = $userModel->login($_POST);

        if(
            $_POST["username"] == "admin" &&
            $_POST["password"] == "admin2020") {
           
            echo 'Login';
            
            
            header("Location: /boss");

        }
        else $message = "Dados Incorrectos";
    }

    require("views/login.php");

} else {
    // Logout
    session_destroy();
    header("Location: " . BASE_PATH);
}

