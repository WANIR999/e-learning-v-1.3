const username = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');


const usernamee = document.getElementById('namerror');
const emaile= document.getElementById('emailerror');
const passworde = document.getElementById('pass1error');
const password2e = document.getElementById('pass2error');


const successAlert = document.getElementById('success-alert');


const form = document.getElementById('form');


const mailformat = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/


function foo() {

    usernamee.innerText = ''
    emaile.innerText = ''
    passworde.innerText = ''
    password2e.innerText = ''


    const usernameValue = username.value;
    const emailValue = email.value;
    const passwordValue = password.value;
    const password2Value = password2.value;

    let k = 0;


    if(usernameValue.length < 4 || usernameValue.length > 10){

        usernamee.innerText = "your username must be between 4 and 10 characters";
        k = 1;

    } if (!emailValue.match(mailformat)){

        emaile.innerText = 'invalid email Format';
        k = 1;

    } if (passwordValue.length < 4 || passwordValue.length > 30) {

        passworde.innerText = 'your password must be between 4 and 30 characters';
        k = 1;

    } if (passwordValue !== password2Value) {

        password2e.innerText = "your passwords doesn't match";
        k = 1;

    }

    if (k)
        return false;

    return true;
    
}