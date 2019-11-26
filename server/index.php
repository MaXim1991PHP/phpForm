<?php
$route = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

//echo '<pre>';
//var_dump($method);
//echo '</pre>';
//die;


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

if($method ==='POST') {
if($route === '/login') {
    $request = json_decode(file_get_contents('php://input'),true); /*чтение данных в формате джейсон, тру делает из обьекта масив, -> dly obyekta*/

    valid($request);
   /// echo 'hello';
}
}
$errors = [];
function valid($data){
    if(!preg_match('/^[а-яА-Яa-zA-Z\_\.]{2,25}$/i',$data['name'])){
        $errors['name'] = 'name is not valid';
    }
    if(!preg_match('/^[0-9a-z.\-_]{1,15}@[0-9a-z.\-_]{1,25}\.[a-z]{1,10}$/i',$data['email'])){
        $errors['email'] = 'email is not valid';
    }
    if(!preg_match('/^(\+380|80|0){1,4}[0-9]{9}$/',$data['phone'])){
        $errors['phone'] = 'phone is not valid';
    }
    if(!preg_match('/^[а-яА-Яa-zA-Z\_\.]{2,25}$/i',$data['password'])){
        $errors['password'] = 'password is not valid';
    }
if (!(gettype($data['subscribe'])=== 'boolean')){
    $errors['subscribe'] = 'subscribe is not valid';
}
if($errors){
    return $errors;
}
return true;
}