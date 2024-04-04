//Ejecutando funciones
document.getElementById("btn__iniciar-sesion").addEventListener("click", iniciarSesion);
document.getElementById("btn__registrarse").addEventListener("click", register);
window.addEventListener("resize", anchoPage);

//Declarando variables
var formulario_login = document.querySelector(".formulario__login");
var formulario_register = document.querySelector(".formulario__register");
var contenedor_login_register = document.querySelector(".contenedor__login-register");
var cuadro_atras_login = document.querySelector(".cuadro__atras--login");
var cuadro_atras_register = document.querySelector(".cuadro__atras--register");

    //FUNCIONES

function anchoPage(){

    if (window.innerWidth > 850){
        cuadro_atras_register.style.display = "block";
        cuadro_atras_login.style.display = "block";
    }else{
        cuadro_atras_register.style.display = "block";
        cuadro_atras_register.style.opacity = "1";
        cuadro_atras_login.style.display = "none";
        formulario_login.style.display = "block";
        contenedor_login_register.style.left = "0px";
        formulario_register.style.display = "none";   
    }
}

anchoPage();


    function iniciarSesion(){
        if (window.innerWidth > 850){
            formulario_login.style.display = "block";
            contenedor_login_register.style.left = "10px";
            formulario_register.style.display = "none";
            cuadro_atras_register.style.opacity = "1";
            cuadro_atras_login.style.opacity = "0";
        }else{
            formulario_login.style.display = "block";
            contenedor_login_register.style.left = "0px";
            formulario_register.style.display = "none";
            cuadro_atras_register.style.display = "block";
            cuadro_atras_login.style.display = "none";
        }
    }

    function register(){
        if (window.innerWidth > 850){
            formulario_register.style.display = "block";
            contenedor_login_register.style.left = "410px";
            formulario_login.style.display = "none";
            cuadro_atras_register.style.opacity = "0";
            cuadro_atras_login.style.opacity = "1";
        }else{
            formulario_register.style.display = "block";
            contenedor_login_register.style.left = "0px";
            formulario_login.style.display = "none";
            cuadro_atras_register.style.display = "none";
            cuadro_atras_login.style.display = "block";
            cuadro_atras_login.style.opacity = "1";
        }
}



