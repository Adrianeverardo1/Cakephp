window.addEventListener('load',()=>{
    var formSign = document.querySelector('#formSign');
    var formLogin = document.querySelector('#formLogin');
    var isCorrect = true;

    var username_regex = /^[a-zA-Z0-9]+$/i;
    var username = document.querySelector('#username');
    var email = document.querySelector('#email');
    var password = document.querySelector('#password');
    var password2 = document.querySelector('#password2');

    var username_error = document.createElement("div");
    username_error.setAttribute("class","errors");
    var email_error = document.createElement("div");
    email_error.setAttribute("class","errors");
    var password_error = document.createElement("div");
    password_error.setAttribute("class","errors");
    var password2_error = document.createElement("div");
    password2_error.setAttribute("class","errors");

    if (formSign){
      formSign.addEventListener('submit', function(e){
        if (!validateSign()){
          e.preventDefault();
        }
      });
    }

    if (formLogin){
      formLogin.addEventListener('submit',function(e){
        if (!validateLogin()){
          e.preventDefault();
        }
      });
    }

    username.addEventListener('blur',(event)=>{
      validateUser();
    });

    if(email){
      email.addEventListener('blur',(event)=>{
        validateEmail();
      });
    }

    password.addEventListener('blur',(event)=>{
      validatePassword();
    });

    if(password2){
      password2.addEventListener('blur',(event)=>{
        passwordMatch();
      });
    }

    function validateUser(){
      var string = username.value;
      if (!string.match(username_regex)){
        username_error.innerHTML =  "Use solamente letras y numeros";
        username.parentNode.insertBefore(username_error,username.nextSibling);
        username.classList.add("wrong-input");
        isCorrect = false;
      }
      else{
        username_error.remove();
        username.classList.remove("wrong-input");
      }
    }

    function validateEmail(){
      var string = email.value;
      if (string.length < 11){
        email_error.innerHTML =  "Ingrese una direccion de correo valida";
        email.parentNode.insertBefore(email_error,email.nextSibling);
        email.classList.add("wrong-input");
        isCorrect = false;
      }
      else{
        email_error.remove();
        email.classList.remove("wrong-input");
      }
    }

    function validatePassword(){
      var string = password.value;
      if (string.length < 8){
        password_error.innerHTML =  "Contraseña muy corta, min 8 caracteres";
        password.parentNode.insertBefore(password_error,password.nextSibling);
        password.classList.add("wrong-input");
        isCorrect = false;
      }
      else{
        password_error.remove();
        password.classList.remove("wrong-input");
      }
    }

    function passwordMatch(){
      var string1 = password.value;
      var string2 = password2.value;
      if (string1!=string2){
        password2_error.innerHTML =  "Las contraseñas no coinciden";
        password2.parentNode.insertBefore(password2_error,password2.nextSibling);
        password2.classList.add("wrong-input");
        isCorrect=false;
      }
      else{
        password2_error.remove();
        password2.classList.remove("wrong-input");
      }
    }

    function validateSign(){
      isCorrect = true;
      validateUser();
      validateEmail();
      validatePassword();
      passwordMatch();
      console.log(isCorrect);
      return isCorrect;
    }

    function validateLogin(){
      isCorrect = true;
      validateUser();
      validatePassword();
      return isCorrect;
    }





});
