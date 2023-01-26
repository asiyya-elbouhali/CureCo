


// wrong accoiunt message


    




// Login fields verification

let submitLogin =document.getElementById('submitLogin');

    // alert(submitLogin);

submitLogin.addEventListener('submit', function(e){

    // alert ('js is working');

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




let wrong_account = document.getElementById('wrong_account');
    wrong_account.style.color = 'orangered';

// let deleteCategory = document.getElementById('deleteCategory');

//     deleteCategory.addEventListener('click', function(){

//         let deleteC = document.getElementById('delete');
//         // deleteC.style.display = "block";

//         deleteC.click();



// });



// carousel
$(document).ready(function()
{

   
        if($('.bbb_viewed_slider').length)
        {
            var viewedSlider = $('.bbb_viewed_slider');

            viewedSlider.owlCarousel(
            {
                loop:true,
                margin:30,
                autoplay:true,
                autoplayTimeout:6000,
                nav:false,
                dots:false,
                responsive:
                {
                    0:{items:1},
                    575:{items:2},
                    768:{items:3},
                    991:{items:4},
                    1199:{items:6}
                }
            });

            if($('.bbb_viewed_prev').length)
            {
                var prev = $('.bbb_viewed_prev');
                prev.on('click', function()
                {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if($('.bbb_viewed_next').length)
            {
                var next = $('.bbb_viewed_next');
                next.on('click', function()
                {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }


    });



