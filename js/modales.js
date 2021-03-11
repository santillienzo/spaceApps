var design = document.getElementById("design");
var mantenimiento = document.getElementById("mantenimiento");
var host = document.getElementById("host");
var domain = document.getElementById("domain");

var m_design = document.getElementById("m-design");
var m_mantenimiento = document.getElementById("m-mantenimiento");
var m_host = document.getElementById("m-host");
var m_domain = document.getElementById("m-domain");

var modal_service = document.getElementById("modal_service");

//Abrimos el modal de cada servicio

function abrir_Modal(element){
    element.style.display = "block";
    modal_service.style.display = "block";
    element.style.animation = "abrirModalService .3s ease forwards";
    modal_service.style.animation = "abrirModalcontainer .3s ease forwards";
}


design.addEventListener("click",()=>{
    abrir_Modal(m_design);
})
mantenimiento.addEventListener("click",()=>{
    abrir_Modal(m_mantenimiento);
})
host.addEventListener("click",()=>{
    abrir_Modal(m_host);
})
domain.addEventListener("click",()=>{
    abrir_Modal(m_domain);
})

//Cerramos el modal de cada servicio

modal_service.addEventListener("click",()=>{
    m_design.style.display = "none";
    m_mantenimiento.style.display = "none";
    m_host.style.display = "none";
    m_domain.style.display = "none";
    modal_service.style.display = "none";
})