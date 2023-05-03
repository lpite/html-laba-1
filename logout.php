<?php
require_once "./utils/auth.php";
session_start();
logout();
header('Location: ' . "/");
die();