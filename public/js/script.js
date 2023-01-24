
let deleteCategory = document.getElementById('deleteCategory');

    deleteCategory.addEventListener('click', function(){

        let deleteC = document.getElementById('delete');
        // deleteC.style.display = "block";

        deleteC.click();



});






// wrong accoiunt message

let wrong_account = document.getElementById('wrong_account');
    wrong_account.style.color = 'orangered';
    




// Login fields verification

let submitLogin =document.getElementById('submitLogin');
// alert(submitLogin);

submitLogin.addEventListener('submit', function(e){

    let  loginEmail = document.getElementById('loginEmail');
    let loginPassword = document.getElementById('loginPassword');
    let myRegex = /^([0-9a-zA-Z\@\.\-\_\s]+)@([a-zA-Z0-9])+.([a-z]+)(.[a-z]+)?$/ ;


    if(loginEmail.value.trim() === ""){ 
        e.preventDefault();
        loginEmail.style.borderColor = "red";
        let loginEmail_err = document.getElementById('loginEmail_err');
        loginEmail_err.innerHTML = "Please enter your email";
        loginEmail_err.style.color = 'red';
        
    } else if(myRegex.test(loginEmail.value) == false){
        e.preventDefault();
        loginEmail.style.borderColor = "red";
        let loginEmail_err = document.getElementById('loginEmail_err');
        loginEmail_err.innerHTML = "Please enter a valid email format";
        loginEmail_err.style.color = 'red';
    }

    if(loginPassword.value.trim() === ""){ 
        e.preventDefault();
        loginPassword.style.borderColor = "red";
        let loginPassword_err = document.getElementById('loginPassword_err');
        loginPassword_err.innerHTML = "Please enter your  password";
        loginPassword_err.style.color = 'red';
    }
})








