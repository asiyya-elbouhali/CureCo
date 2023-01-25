
let insert_form = document.getElementById('insert_form');

    insert_form.addEventListener('submit', function(e){
      let productName = document.getElementsByClassName("productName");
      let productCompany = document.getElementsByClassName("productCompany");
      let productPrice = document.getElementsByClassName(" productPrice");
      let productQuantity = document.getElementsByClassName("productQuantity");
      let productCategory = document.getElementsByClassName("productCategory");
      let productImage = document.getElementsByClassName("productImage");
      let productDescription = document.getElementsByClassName("productDescription");


     let Regex = /^([0-9a-zA-Z])+$/ ;

 
 
   for(var i = 0 ; i<productName.length ;i++){
 
 
       if ( productName[i].value == "" ){
 
         e.preventDefault();
       
         productName[i].style.borderColor="red";
 
        } else if(Regex.test(productName[i].value) == false){

            let productName_err = document.getElementsByClassName('productName_err');
            e.preventDefault();

  
         
            productName_err[i].innerHTML = "Please enter a valid input";
            productName_err[i].style.color = "red";
            productName[i].style.borderColor="red";

        }
        if(productCompany[i].value == ""){
            e.preventDefault();
            productCompany[i].style.borderColor="red";
            productName_err[i].innerHTML = "Please enter a valid input";
            productName_err[i].style.color = "red";

        }
        if(productPrice[i].value == "" ){
            e.preventDefault();
            productPrice[i].style.borderColor="red";
            productName_err[i].innerHTML = "Please enter a valid input";
            productName_err[i].style.color = "red";

        } 
        if(productQuantity[i].value == ""){
            e.preventDefault();
            productQuantity[i].style.borderColor="red";
            productName_err[i].innerHTML = "Please enter a valid input";
            productName_err[i].style.color = "red";
        } 
        if(productCategory[i].value == ""){
            e.preventDefault();
            productCategory[i].style.borderColor="red";
            productName_err[i].innerHTML = "Please enter a valid input";
            productName_err[i].style.color = "red";
        } 
        if(productImage[i].value == ""){
            e.preventDefault();
            productImage[i].style.borderColor="red";
            productName_err[i].innerHTML = "Please enter a valid input";
            productName_err[i].style.color = "red";
        }
        if(productDescription[i].value == ""){
            e.preventDefault();
            productDescription[i].style.borderColor="red";
            productName_err[i].innerHTML = "Please enter a valid input";
            productName_err[i].style.color = "red";
        }
 
 
   }
 }
 )







// let insert_form = document.getElementById('insert_form');

//     insert_form.addEventListener('submit', function(e){
  
//     let Regex = /^([0-9a-zA-Z])+$/ ;
//     let productName = document.getElementById('productName');
//     let productCompany = document.getElementById('productCompany');
//     let productName_err = document.getElementById('productName_err');
//     let productCompany_err = document.getElementById('productCompany_err');
//     if(productName.value == ""){
       
//         e.preventDefault();
//         productName_err.innerHTML = "Please enter the product name";
//         productName_err.style.color = "orangered";

//     } else
//     if(productCompany.value == "") {
//         e.preventDefault();
//         productCompany_err.innerHTML = "Please enter the company name";
//         productCompany_err.style.color = "orangered";

//     } else{
//         if(Regex.test(productName.value) === false){
        
//             e.preventDefault();
//             productName_err.innerHTML = "Please enter a valid name";
//             productName_err.style.color = "orangered";
    
//         }
//         if (Regex.test(productCompany.value) === false){
    
//             e.preventDefault();
//             productCompany_err.innerHTML = "Please enter a valid company name";
//             productCompany_err.style.color = "orangered";
    
//         }
//     }




  

  