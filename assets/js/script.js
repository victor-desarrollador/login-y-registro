document.getElementById("btn_iniciar_sesion").addEventListener("click", inicioSesion);
document.getElementById("btn_registarse").addEventListener("click", register);
window.addEventListener("resize", anchoPagina);

// Declaración de variables
var contenedor__login_register = document.querySelector(".contenedor__login_register");
var formulario__login = document.querySelector(".formulario__login");
var formulario__register = document.querySelector(".formulario__register");
var caja_trasera_login = document.querySelector(".caja_trasera_login");
var caja_trasera_register = document.querySelector(".caja_trasera_register");

function anchoPagina() {
    if (window.innerWidth > 850) {
        caja_trasera_login.style.display = "block";
        caja_trasera_register.style.display = "block";
    } else {
        caja_trasera_register.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.display = "none";
        formulario__login.style.display = "block";
        formulario__register.style.display = "none";
        contenedor__login_register.style.left = "0px";
    }
}

anchoPagina();

function inicioSesion() {
    if (window.innerWidth > 850) {
        formulario__register.style.display = "none";
        contenedor__login_register.style.left = "10px";
        formulario__login.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.opacity = "0";
    } else {
        formulario__register.style.display = "none";
        contenedor__login_register.style.left = "0px";
        formulario__login.style.display = "block";
        caja_trasera_register.style.display = "block";
        caja_trasera_login.style.display = "none";
    }
}

function register() {
    if (window.innerWidth > 850) {
        formulario__register.style.display = "block";
        contenedor__login_register.style.left = "410px";
        formulario__login.style.display = "none";
        caja_trasera_register.style.opacity = "0";
        caja_trasera_login.style.opacity = "1";
    } else {
        formulario__register.style.display = "none";
        contenedor__login_register.style.left = "0px";
        formulario__login.style.display = "none";
        caja_trasera_register.style.display = "none";
        caja_trasera_login.style.display = "block";
        caja_trasera_login.style.opacity = "1";
    }
}





