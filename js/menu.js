
//ANIMACIÓN PARA OCULTAR MENÚ WEB
window.addEventListener("scroll",function(){
    var nav = document.querySelector(".header-container");
    nav.classList.toggle("hide",window.scrollY > 550);

    var header = document.querySelector("header");
    header.classList.toggle("visible",window.scrollY > 550);

    
});

// *****************************
//ABRIR Y CERRAR MENÚ RESPONSIVE
// *****************************


var menu_bars = document.getElementById("bars");
var modal = document.getElementById("modal");
var menu = document.getElementById("menu");
var menu_container = document.getElementById("menu_container");
var close = document.getElementById("close");
var enlace = document.querySelector(".enlace");

//abrir el modal transparente
menu_bars.addEventListener("click", ()=>{
    modal.style.display= "block";
    modal.style.animation = "modal .5s ease forwards";
    menu_container.style.display = "flex";
    menu.style.display = "block";
    menu.style.animation= "abrirMenu .5s ease-in forwards";
});

//cerramos el menú desde el modal
modal.addEventListener("click", ()=>{
    modal.style.display= "none";
    menu.style.animation= "cerrarMenu .5s ease-in forwards";
    
    setTimeout(()=>{
        menu_container.style.display = "none"
    },500)
    
});

//cerramos el menú desde la X
close.addEventListener("click", ()=>{
    modal.style.display= "none";
    menu.style.animation= "cerrarMenu .5s ease-in forwards";
    
    setTimeout(()=>{
        menu_container.style.display = "none"
    },500)
});


//cerramos el menú luego de tocar los enlaces
enlace.addEventListener("click", ()=>{
    setTimeout(()=>{
        modal.style.display= "none";
        menu.style.animation= "cerrarMenu .5s ease-in forwards";
        
        setTimeout(()=>{
            menu_container.style.display = "none"
        },500)
    },200);
});
