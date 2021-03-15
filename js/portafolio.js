var portafolio = document.getElementById("portafolio")
var verMas = document.getElementById("verMas")

if(portafolio.offsetHeight >= 500){
    verMas.style.display = "flex";
    verMas.addEventListener("click",()=>{
        verMas.style.display = "none";
        portafolio.style.maxHeight = "min-content";
    });
}
else if(portafolio.style.pixelHeight >= 500){
    verMas.style.display = "flex";
    verMas.addEventListener("click",()=>{
        verMas.style.display = "none";
        portafolio.style.maxHeight = "min-content";
    });
}