<?php
$route = $_SERVER['REQUEST_URI'];
/*echo '<pre>';
var_dump($_SERVER ['REQUEST_URI']);
echo '</pre>';*/
include './views/header.php';
if($route === '/') {
    include './views/home.php';
}
if($route === '/contacts') {
    include './views/contacts.php';
}
if($route === '/login') {
    include './views/login.php';
}
include './views/footer.php';
