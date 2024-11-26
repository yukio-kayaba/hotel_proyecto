let desplegable_menu_secion = document.getElementById("menu-sesion");
const drop_dow_main = document.getElementById("drow-dow-main");

desplegable_menu_secion.addEventListener("click",(e)=>{
    e.stopPropagation();
    if(drop_dow_main.style.display === "none" || drop_dow_main.style.display === ""){
        drop_dow_main.style.display = "flex";
        setTimeout(()=>{
            drop_dow_main.style.height = drop_dow_main.scrollHeight + "px";
        },10);
    }else {
        drop_dow_main.style.height = 0;
        setTimeout(()=>{
            drop_dow_main.style.display = "none";
        },300);
    }
    drop_dow_main.style.display = "flex";
    console.log("cancelado");
});

document.addEventListener("click",(event)=>{
    
    if(!drop_dow_main.contains(event.target) && event.target !== desplegable_menu_secion ){
        drop_dow_main.style.height = 0;
        setTimeout(()=>{
            drop_dow_main.style.display = "none";
        },300);
        // drop_dow_main.style.display = "none";
    }
});