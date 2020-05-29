<?php
    session_start();
    setlocale(LC_ALL, "pt_PT.UTF-8");

    $url_parts = explode('/', $_SERVER["REQUEST_URI"]);

    //print_r($url_parts);

    