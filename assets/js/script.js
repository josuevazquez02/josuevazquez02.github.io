document.getElementById("button_register").addEventListener("click", registrarse);
document.getElementById("button_iniciarsesion").addEventListener("click", iniciarSesion);
window.addEventListener("resize", anchoPage);


var formulario_login = document.querySelector(".formulario__login");
var formulario_register = document.querySelector(".formulario__register");
var contenedor_login_register = document.querySelector(".contenedor__login-register");
var background_login = document.querySelector(".background_panel_Login");
var background_register = document.querySelector(".background_panel_register");


function anchoPage(){

    if (window.innerWidth > 850){
        background_register.style.display = "block";
        background_login.style.display = "block";
    }else{
        background_register.style.display = "block";
        background_register.style.opacity = "1";
        background_login.style.display = "none";
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
            background_register.style.opacity = "1";
            background_login.style.opacity = "0";
        }else{
            formulario_login.style.display = "block";
            contenedor_login_register.style.left = "0px";
            formulario_register.style.display = "none";
            background_register.style.display = "block";
            background_login.style.display = "none";
        }
    }

    function registrarse(){
        if (window.innerWidth > 850){
            formulario_register.style.display = "block";
            contenedor_login_register.style.left = "410px";
            formulario_login.style.display = "none";
            background_register.style.opacity = "0";
            background_login.style.opacity = "1";
        }else{
            formulario_register.style.display = "block";
            contenedor_login_register.style.left = "0px";
            formulario_login.style.display = "none";
            background_register.style.display = "none";
            background_login.style.display = "block";
            background_login.style.opacity = "1";
        }
}