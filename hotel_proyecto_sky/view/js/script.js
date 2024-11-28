const btnLeft = document.querySelector(".btn-left"),
      btnRight = document.querySelector(".btn-right"),
      slider = document.querySelector("#slider");


btnLeft.addEventListener("click", e => moveToLeft())
btnRight.addEventListener("click", e => moveToRight())

setInterval(() => {
    // console.log("datos");
    if(slider.childElementCount > 1){
        moveToRight()
    }
}, 3000);


let operacion = 0,
    counter = 0;

function moveToRight() {
    let sliderSection1 = document.querySelectorAll(".slider-section");
    widthImg = 100 / sliderSection1.length;

    if (counter >= sliderSection1.length-1) {
        counter = 0;
        operacion = 0;
        slider.style.transform = `translate(-${operacion}%)`;
        slider.style.transition = "none";
        return;
    } 
    counter++;
    operacion = operacion + widthImg;
    slider.style.transform = `translate(-${operacion}%)`;
    slider.style.transition = "all ease .6s"
    
}  

function moveToLeft() {
    let sliderSection1 = document.querySelectorAll(".slider-section");
    widthImg = 100 / sliderSection1.length;
    counter--;
    if (counter < 0 ) {
        counter = sliderSection1.length-1;
        operacion = widthImg * (sliderSection1.length-1)
        slider.style.transform = `translate(-${operacion}%)`;
        slider.style.transition = "none";
        return;
    } 
    operacion = operacion - widthImg;
    slider.style.transform = `translate(-${operacion}%)`;
    slider.style.transition = "all ease .6s"
    
    
}   