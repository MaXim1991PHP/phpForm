<form class="auth" action="">
    <fieldset>
        <legend>Авторизация</legend>
        <div class="auth__row">
            <label for="username">User name</label>
            <input value="" class="auth__text" type="text" id="username">
            <i class="auth__error auth__error_hide">Don`t contain (_, -, {}, $, 0-9 length > 5 chars)</i>
        </div>
        
        <div class="auth__row">
            <label for="useremail">User email</label>
            <input value="" class="auth__text" type="text" id="useremail">
            <i class="auth__error auth__error_hide">Not valid email (example@gmail.com)</i>
        </div>
        <div class="auth__row">
            <label for="userphone">User phone</label>
            <input value="" class="auth__text" type="text" id="userphone">
            <i class="auth__error auth__error_hide">Not valid phone (+380735070005)</i>
        </div>
        <div class="auth__row">
            <label for="userpass">User password</label>
            <input value="" class="auth__text" type="password" id="userpass">
            <i class="auth__error auth__error_hide">Must contain (a-z, A-Z, 0-9, length > 7 chars)</i>
        </div>
        <label class="auth__check">
            Subscribe
            <input type="checkbox" id="usersubscribe">
        </label>
        <div class="auth__row">
            <button type="button" id="sendbtn" class="auth__btn">Registration</button>
        </div>
    </fieldset>
</form>
<script src="/public/registration.js"></script>