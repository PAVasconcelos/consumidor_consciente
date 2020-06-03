<?php
require("models/subscribe.php");

require("views/subscribe.php");

$subscribeModel = new Subscribe();

if(isset($_POST["send"])) {

    $data = $_POST;

    $subscribeModel->subscriber($data);

    //var_dump($data);

};