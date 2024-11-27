var datos_habitaciones = [];
$(document).ready(function(){
    $(document).on("click",".activador_pop",(e)=>{
        console.log("cliekado" + e.target);
        let modal = $("#modal_pop_up");
        modal.addClass("is-active");
    });
    $(document).on("click",".modal-background",(e)=>{
        e.stopPropagation();
        $("#modal_pop_up").removeClass("is-active");
    });
    $(document).on("click",".modal_btn_cancel",()=>{
        e.stopPropagation();
        $("#modal_pop_up").removeClass("is-active");
    });

    let habitacion1 = new habitaciones();
    datos_habitaciones.push(habitacion1);
    
});
