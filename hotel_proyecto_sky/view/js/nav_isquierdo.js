let activo_nav = false;

const nav_isquierdo = document.getElementById("nav-isquierdo");
const btn_nav_isq = document.getElementById("btn-nav-isq");
const svgElement = document.getElementsByClassName("svg-datos_1")[0]; 
const nav_bar_image = document.getElementsByClassName("nav-bar-image")[0];
btn_nav_isq.addEventListener("click",()=>{
    console.log("cliekado");
    if(!activo_nav){
        nav_isquierdo.classList.add("nav_isq_abierto");
        svgElement.style.transform = "rotate(0deg)";
        activo_nav = true;
    }else{
        nav_isquierdo.classList.remove("nav_isq_abierto");
        svgElement.style.transform = "rotate(180deg)";
        activo_nav =false;
    }
});

nav_bar_image.addEventListener("click",()=>{
    if(!activo_nav){
        nav_isquierdo.classList.add("nav_isq_abierto");
        svgElement.style.transform = "rotate(0deg)";
        activo_nav = true;
    }else{
        nav_isquierdo.classList.remove("nav_isq_abierto");
        svgElement.style.transform = "rotate(180deg)";
        activo_nav =false;
    }
});