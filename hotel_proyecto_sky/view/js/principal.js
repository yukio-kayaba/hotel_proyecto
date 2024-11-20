window.addEventListener("scroll",()=>{
    let nav_bar = document.getElementById("nav-bar");
    // if(window.scrollY > 50)){
    //     nav_bar.classList.toggle("nav-colores");
    // }

    nav_bar.classList.toggle("nav-colores",window.scrollY > 150);
    // if(window.scrollY < 150){
    // }else{
    // }

});