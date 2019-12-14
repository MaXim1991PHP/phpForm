<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/style.css">    
    <title>Document</title>
</head>
<body>
    <header class="header">
        <nav>
            <ul class="header__menu">
                <li><a class="header__link" href="/">Home</a></li>
                
                <li><a class="header__link" href="/login">Login</a></li>
                <li><a class="header__link" href="/users">Users</a></li>
                
                <li><a class="header__link" href="/registration">Registration</a></li>
                <li><a class="header__link" href="/contacts">Contacts</a></li>
            </ul>
        </nav>
        <p>
            <?= $routes_str ?>
            </p>
    </header>
    
    <main class="page">