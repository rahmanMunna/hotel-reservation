document.getElementById('login-form').addEventListener('submit',handleLogin);
function handleLogin(){
   const email = document.getElementById('email-input-field').value;
   const userId = document.getElementById('user-id-input-field').value;
   const password = document.getElementById('password-input-field').value;

   if(isValidEmail(email)){
    alert(true);
   }
   else{
    alert(false);
   }
}

function isValidEmail(email){
    if(email.includes('@')){
        const splittedEmail = email.split('@')
        if(splittedEmail[1] === 'gmail.com'){
            return true;
        }
    }
    return false;
}