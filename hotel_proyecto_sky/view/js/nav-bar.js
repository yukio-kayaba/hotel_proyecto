let desplegable_menu_secion = document.getElementById("menu-sesion");
const drop_dow_main = document.getElementById("drow-dow-main");
const dropdownContent = drop_dow_main.querySelector('.dropdown-content');

desplegable_menu_secion.addEventListener("click",(e)=>{
    e.stopPropagation();
    if(drop_dow_main.style.display === "none" || drop_dow_main.style.display === ""){
        drop_dow_main.style.display = "flex";
        setTimeout(() => {
            drop_dow_main.classList.add('active');
            drop_dow_main.style.height = drop_dow_main.scrollHeight + "px";
            // Mostrar el contenido con fade in
            dropdownContent.classList.add('visible');
        }, 10);
    }else {
        cerrarMenu();
    
    }
    drop_dow_main.style.display = "flex";
    console.log("cancelado");
});

document.addEventListener("click", (event) => {
    if (!drop_dow_main.contains(event.target) && event.target !== desplegable_menu_secion) {
        cerrarMenu();
    }
});
function cerrarMenu() {
    // Ocultar el contenido primero
    dropdownContent.classList.remove('visible');
    drop_dow_main.classList.remove('active');
    drop_dow_main.style.height = "0";
    
    // Esperar a que termine la animación antes de ocultar completamente
    setTimeout(() => {
        drop_dow_main.style.display = "none";
    }, 300);
}