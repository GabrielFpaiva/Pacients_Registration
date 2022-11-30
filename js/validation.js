var inputNome = document.querySelector("#nome");

console.log(inputNome);


inputNome.addEventListener("keypress", function(e) {
    const keyCode = (e.keyCode ? e.keyCode : e.wich);

    console.log(keyCode);
  
  if (keyCode > 47 && keyCode < 58) {
    e.preventDefault();
    alert('Utilize apenas letras!');
  }
});

function validarEmail(){
  var email = document.querySelector('#email');
  var error = document.querySelector('#error-email');
  
  if(!email.checkValidity()){
    error.innerHTML = "Email invalido";  
  }
   
}

function redefinirMsg(){
  var error = document.querySelector('#error-email');
  if (error.innerHTML == "Email invalido"){
    error.innerHTML = "";
  }
}