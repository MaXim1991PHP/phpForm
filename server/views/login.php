<form class="auth" action="/login" method="POST">
    <fieldset>
        <legend>Login</legend>
        <p><?= $error ? $error: ''?></p>
     
        <div class="auth__row">
            <label for="useremail">User email</label>
            <input name="email" value="vasa@gmail.com" class="auth__text" type="text" id="useremail">
        </div>
        <div class="auth__row">
            <label for="userpass">User password</label>
            <input name="password" value="111111" class="auth__text" type="password" id="userpass">
        </div>
      
        <div class="auth__row">
            <button type="submit" id="sendbtn" class="auth__btn">Login</button>
        </div>
    </fieldset>
</form>