'use strict'

var formManager = {
Name: document.querySelector('#username'),
NameError: document.querySelector('#username + .auth__error'),

Email: document.querySelector('#usermail'),
EmailError: document.querySelector('#usermail + .auth__error'),

Phone: document.querySelector('#userphone'),
PhoneError: document.querySelector('#userphone + .auth__error'),

Password: document.querySelector('#userpass'),
PasswordError: document.querySelector('#userpass + .auth__error'),

Subscribe: document.querySelector('#usersubscride'),

sendBtn: document.querySelector('#sendbtn'),
};



formManager.valid = function (){    /*proverka inputov*/
    var isNotError= true;

    if(!(/^[а-яА-Яa-zA-Z\_\.]{2,25}$/i.test(this.Name.value))) {
this.NameError.classList.remove('auth__error_hide');
this.NameError.classList.add('auth__error_show');
isNotError = false;
}

    if(!(/^[0-9a-z.\-_]{1,15}@[0-9a-z.\-_]{1,25}\.[a-z]{1,10}$/i.test(this.Email.value))) {
        this.EmailError.classList.remove('auth__error_hide');
        this.EmailError.classList.add('auth__error_show');
isNotError = false;
}

    if(!(/^(\+380|80|0){1,4}[0-9]{9}$/.test(this.Phone.value))) {
        this.PhoneError.classList.remove('auth__error_hide');
        this.PhoneError.classList.add('auth__error_show');
isNotError = false;
}

if(!(/^[а-яА-Яa-zA-Z\_\.]{2,25}$/i.test(this.Password.value))) {
    this.PasswordError.classList.remove('auth__error_hide');
    this.PasswordError.classList.add('auth__error_show');
isNotError = false;
}

return isNotError;
};

formManager.send = function(){       /*otpravka*/
if (this.valid()===false) return null;

var data = {
name:this.Name.value,
email:this.Email.value,
phone:this.Phone.value,
password:this.Password.value,
subscribe:this.Subscribe.checked,
}
fetch('/login',{
method:'POST',
body:JSON.stringify(data)
    })
};

formManager.setClearHander = function (){
    var elements = document.querySelectorAll('.auth__text');
    elements.forEach(function(element){
        
        element.onclick= function(){
            this.nextElementSibling.classList.remove('auth__error_show');
            this.nextElementSibling.classList.add('auth__error_hide');
        }
    });
}
formManager.init = function() {
    //bind dly zakrepleniy obyekta this, inaje budet vividit knopku//
    this.sendBtn.onclick = this.send.bind(this);
    this.setClearHander();
};

formManager.init();