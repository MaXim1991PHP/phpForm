<?php



if ($method === 'GET') {
    
    if(empty($_SESSION['routes'])){
        $_SESSION['routes']=[];
    }
    
    
    if(empty($_SESSION['routes'] [$route])){
        $_SESSION['routes'] [$route]=1;
    } else {
        $_SESSION['routes'][$route]++;
    }
    
    
    $routes_str = '';
    
    foreach ($_SESSION['routes'] as $key=>$value) {
        $routes_str .= "{$key} = {$value}, ";
    }
    
    
    
    include './views/header.php';
    if ($route === '/') {
        include './views/home.php';
    }
    if ($route === '/contacts') {
        include './views/contacts.php';
    }
    if ($route === '/registration') {
        include './views/registration.php';
    }
    
    if ($route === '/login') {
        include './views/login.php';
    }
    
    if ($route === '/users') {
        
        $users = getUsers();
        
        include './views/users.php';
    }
    include './views/footer.php';
}
