var datos_habitaciones = [];
$(document).ready(function(){
    $(document).on("click",".activador_pop",(e)=>{
        let activadorPop = $(e.target).closest(".activador_pop");    
        let idActivador = activadorPop.attr("id");
        let modal = $("#modal_pop_up");
        modal.addClass("is-active");
        console.log("ID del activador_pop:", idActivador);
        let id = idActivador.slice(11);
        let aux_habitacion = datos_habitaciones[id]; 
        $(".modal-card-title").html(aux_habitacion.set_nombre());
    });
    $(document).on("click",".modal-background",(e)=>{
        e.stopPropagation();
        $("#modal_pop_up").removeClass("is-active");
    });

    $(document).on("click",".modal_btn_cancel",(e)=>{
        e.stopPropagation();
        $("#modal_pop_up").removeClass("is-active");
    });

    

    let habitacion1 = new habitaciones(1,"madison Twin","habitacion de la realeza",500,["https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]);
    let habitacion2 = new habitaciones(2, "Royal Suite", "Suite real en el Hotel Plaza",200, ["https://images.pexels.com/photos/194343/pexels-photo-194343.jpeg?auto=compress&cs=tinysrgb&w=1600&h=900&dpr=1"]);
    let habitacion3 = new habitaciones(3, "Ocean View Deluxe", "Habitación con vista al océano",600, ["https://images.pexels.com/photos/2697889/pexels-photo-2697889.jpeg?auto=compress&cs=tinysrgb&w=1600&h=900&dpr=1"]);
    let habitacion4 = new habitaciones(4, "Penthouse Suite", "Suite de penthouse en un rascacielos",400, ["https://images.pexels.com/photos/2877991/pexels-photo-2877991.jpeg?auto=compress&cs=tinysrgb&w=1600&h=900&dpr=1"]);
    let habitacion5 = new habitaciones(5, "Mountain Retreat", "Escapada de montaña en cabaña de lujo",600, ["https://images.pexels.com/photos/3498121/pexels-photo-3498121.jpeg?auto=compress&cs=tinysrgb&w=1600&h=900&dpr=1"]);
    let habitacion6 = new habitaciones(6, "Luxury King Room", "Habitación de lujo con cama king size",200, ["https://images.pexels.com/photos/2624796/pexels-photo-2624796.jpeg?auto=compress&cs=tinysrgb&w=1600&h=900&dpr=1"]);
    let habitacion7 = new habitaciones(7, "Poolside Suite", "Suite junto a la piscina",600, ["https://images.pexels.com/photos/1199630/pexels-photo-1199630.jpeg?auto=compress&cs=tinysrgb&w=1600&h=900&dpr=1"]);
    let habitacion8 = new habitaciones(8, "Sky Lounge", "Lounge de lujo en el último piso",0, ["https://images.pexels.com/photos/587380/pexels-photo-587380.jpeg?auto=compress&cs=tinysrgb&w=1600&h=900&dpr=1"]);
    let habitacion9 = new habitaciones(9, "Forest Cabin", "Cabaña de lujo en el bosque",300, ["https://images.pexels.com/photos/1157066/pexels-photo-1157066.jpeg?auto=compress&cs=tinysrgb&w=1600&h=900&dpr=1"]);
    let habitacion10 = new habitaciones(10, "Desert Oasis", "Oasis de lujo en el desierto",600, ["https://images.pexels.com/photos/3465875/pexels-photo-3465875.jpeg?auto=compress&cs=tinysrgb&w=1600&h=900&dpr=1"]);

    datos_habitaciones.push(habitacion1);
    datos_habitaciones.push(habitacion2);
    datos_habitaciones.push(habitacion3);
    datos_habitaciones.push(habitacion4);
    datos_habitaciones.push(habitacion5);
    datos_habitaciones.push(habitacion6);
    datos_habitaciones.push(habitacion7);
    datos_habitaciones.push(habitacion8);
    datos_habitaciones.push(habitacion9);
    datos_habitaciones.push(habitacion10);
    
    function cargar_habitaciones(inf_habitaciones){
        let texto = "";
        for (let i = 0; i < inf_habitaciones.length; i++) {
            let element = inf_habitaciones[i];
            texto += `
                <div id="habitacion_${i}" class="room activador_pop" >
                        <div class="image">
                            <img src="${element.set_foto_principal()}" />
                        </div>
                        <h4>${element.set_nombre()}</h4>
                        <div class="expansion">
                            <ul class="config">
                                <li>${element.set_descripcion()}</li>
                                <li>$.${element.set_precio()}</li>
                            </ul>
                        </div>
                </div>
            `;
            
        }
        document.getElementsByClassName("posts")[0].innerHTML += texto;
    }

    cargar_habitaciones(datos_habitaciones);
});
