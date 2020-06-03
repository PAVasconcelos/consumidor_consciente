<?php

   setlocale(LC_ALL, "pt_PT.UTF-8");

   $url_parts = explode('/', $_SERVER["REQUEST_URI"]);

   //var_dump($url_parts);

   // criar constante
   define('BASE_PATH', dirname($_SERVER['SCRIPT_NAME']) . '/');

   // controller default
   $controller = "home";

   // white list de controllers
   $controllers = ["home", "subscribe", "contacts"];

   if(isset($url_parts[1]) && in_array($url_parts[1], $controllers)) {
      $controller = $url_parts[1]; 
   }

   require("controllers/".$controller.".php");