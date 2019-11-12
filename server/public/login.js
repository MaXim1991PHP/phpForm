'use strict'
var userName = document.querySelector('#username');
var userEmail = document.querySelector('#useremail');
var userPass = document.querySelector('#userpass');
var userSubscribe = document.querySelector('#usersubscribe');
var sendBtn = document.querySelector('#sendbtn');
sendBtn.onclick =send;

function send (){
    var data={
        name:userName.value,
        email:userEmail.value,
        password:userPass.value,
        subscribe:userSubscribe.value,

    }
    fetch('/login',{
        method:'POST',
        body:JSON.stringify(data)

    })

}