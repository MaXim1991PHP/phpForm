<?php
session_start();

include './hendlers/dump.php';
include './hendlers/mysqli.php';
include './hendlers/validate.php';

$route = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

include './hendlers/routesMethodGet.php';
include './hendlers/routesMethodPost.php';

