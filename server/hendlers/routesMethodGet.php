<?php
if ($method === 'GET'){

include './views/header.php';

if($route === '/') {
    include './views/home.php';
}
if($route === '/contacts') {
    include './views/contacts.php';
}
if($route === '/login' && $method ==='GET') {
    include './views/login.php';
} 
include './views/footer.php';
}

