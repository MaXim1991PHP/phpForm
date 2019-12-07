<?php
include './hendlers/mysqliConnect.php';
include './hendlers/validate.php';

$route = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

//echo '<pre>';
//var_dump($method);
//echo '</pre>';
//die;

include './hendlers/routesMethodGet.php';
include './hendlers/routesMethodPost.php';

$errors = [];