<?php
    require_once "./utils/subscribe.php";
    $input = json_decode(file_get_contents('php://input'));
    createSubscription($input);