<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/style.css">
    <script defer src="/public/main.js"></script>
    <title>Document</title>
</head>
<body>
    <main>
        <form class="auth" action="">
            <fieldset>
                <legend>Авторизация</legend>
                <div class="auth__row">
                    <label for="username">User name</label>
                    <input class="auth__text" type="text" id="username">
                    <i class="auth__error">Don`t contain _,-,{},$,0-9 length > 2 chars,</i>
                </div>
                <div class="auth__row">
                        <label for="usermail">User email</label>
                        <input class="auth__text" type="text" id="usermail">
                    </div>
                    <div class="auth__row">
                            <label for="userpass">User password</label>
                            <input class="auth__text" type="password" id="userpass">
                        </div>
                                <label class="auth__check">
                               Subscribe 
                                <input type="checkbox" id="usersubscride">
                            </label>
                            <div class="auth__row">
                            <button class="auth__btn">Login</button>
                            </div>

            </fieldset>
        </form>
    </main>
    
</body>
</html>

k