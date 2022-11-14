//const { imagenes } = require("../../gulpfile");

document.addEventListener('DOMContentLoaded', function () {
    iniciarApp();
});

function iniciarApp() {
    eventListeners();
    navegacionFija();
    scrollNav()
}

function navegacionFija(){
    const barra = document.querySelector('.header')
    const serviciosIn = document.querySelector('.barra-fija');
    const body = document.querySelector('body')

    window.addEventListener('scroll', function(){
        console.log(serviciosIn.getBoundingClientRect());

        if(serviciosIn.getBoundingClientRect().top< 0){
            barra.classList.add('fijo');
            body.classList.add('body-scroll');
        }else{
            barra.classList.remove('fijo');
            body.classList.remove('body-scroll');
        }
    } )
}



function scrollNav() { //cuando le demos click al la navegacion nos lleva a ese apartado deslizandose por la pagina
    const enlaces = document.querySelectorAll('.navegacion_servicios')
    enlaces.forEach(enlace => {
        enlace.addEventListener('click', function (e){
            e.preventDefault();


            const seccionScroll = e.target.attributes.href.value;
            const seccion = document.querySelector(seccionScroll);
            seccion.scrollIntoView({ behavior: "smooth"});
        });
    });
}


function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');

    navegacion.classList.toggle('mostrar')
}