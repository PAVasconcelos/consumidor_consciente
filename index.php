<?php
    session_start();
    setlocate(LC_ALL, "pt_PT.UTF-8");

    $url_parts = explode('/', $_SERVER["REQUEST_URI"]);

    define('BASE_PATH', dirname($_SERVER['SCRIPT_NAME']) . '/');

    $controller = "home";

    $controllers = ["home", "posts"];

    require("controllers/".$controller.".php");