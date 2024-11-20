const clic_date = document.getElementsByClassName("ubication")[0];

clic_date.addEventListener("click",()=>{
    console.log("presionado");
    document.getElementsByClassName("ubication_date")[0].style.display = "flex";
});