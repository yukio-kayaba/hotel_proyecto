var datos_habitaciones = [];
$(document).ready(function(){
    $(document).on("click",".activador_pop",(e)=>{
        let activadorPop = $(e.target).closest(".activador_pop");    
        let idActivador = activadorPop.attr("id");
        let modal = $("#modal_pop_up");
        modal.addClass("is-active");
        console.log("ID del activador_pop:", idActivador);
        let id = idActivador.slice(11);
        // let aux_habitacion = datos_habitaciones[id]; 
        cargar_datos_modal(datos_habitaciones[id]);
    });
    $(document).on("click",".modal-background",(e)=>{
        e.stopPropagation();
        $("#modal_pop_up").removeClass("is-active");
    });

    $(document).on("click",".modal_btn_cancel",(e)=>{
        e.stopPropagation();
        $("#modal_pop_up").removeClass("is-active");
        $("#slider").html("");
        $("#slider").css("");
    });

    function cargar_datos_modal(habitacion){
        $(".modal-card-title").html(habitacion.set_nombre());
        let fotos = "";
        let cantidad = 0;
        habitacion.set_fotos().forEach(element => {
            fotos += `
            <section class="slider-section completo_wh">
                <img  src="${element}" alt="">
            </section>
            `;
            cantidad ++;
        });
        $(".imagenes_modal").css("width",`calc(100% * ${cantidad})`);
        $(".imagenes_modal").html(fotos);
        $(".descripcion_modal").html(habitacion.set_descripcion());
        
    };
   
    // let habitacion1 = new habitaciones(1,"madison Twin","habitacion de la realeza",500,["https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]);
    // let habitacion2 = new habitaciones(2, "Royal Suite", "Suite real en el Hotel Plaza",200, ["https://images.pexels.com/photos/8134808/pexels-photo-8134808.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]);
    // let habitacion3 = new habitaciones(3, "Ocean View Deluxe", "Habitación con vista al océano",600, ["https://images.pexels.com/photos/2598638/pexels-photo-2598638.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]);
    // let habitacion4 = new habitaciones(4, "Penthouse Suite", "Suite de penthouse en un rascacielos",400, ["https://images.pexels.com/photos/259580/pexels-photo-259580.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]);
    // let habitacion5 = new habitaciones(5, "Mountain Retreat", "Escapada de montaña en cabaña de lujo",600, ["https://images.pexels.com/photos/3498121/pexels-photo-3498121.jpeg?auto=compress&cs=tinysrgb&w=1600&h=900&dpr=1"]);
    // let habitacion6 = new habitaciones(6, "Luxury King Room", "Habitación de lujo con cama king size",200, ["https://images.pexels.com/photos/276528/pexels-photo-276528.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]);
    // let habitacion7 = new habitaciones(7, "Poolside Suite", "Suite junto a la piscina",600, ["https://images.pexels.com/photos/6394709/pexels-photo-6394709.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]);
    // let habitacion8 = new habitaciones(8, "Sky Lounge", "Lounge de lujo en el último piso",0, ["https://images.pexels.com/photos/269218/pexels-photo-269218.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]);
    // let habitacion9 = new habitaciones(9, "Forest Cabin", "Cabaña de lujo en el bosque",300, ["https://images.pexels.com/photos/262048/pexels-photo-262048.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]);
    // let habitacion10 = new habitaciones(10, "Forest Cabin", "Cabaña de lujo en el bosque",300, ["https://images.pexels.com/photos/260046/pexels-photo-260046.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]);
    // let habitacion11 = new habitaciones(11, "Sunset Paradise", "Una habitación de lujo con vista espectacular al atardecer, ideal para momentos inolvidables.", 500, ["https://images.pexels.com/photos/221457/pexels-photo-221457.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]);
    // let habitacion12 = new habitaciones(12, "Tropical Getaway", "Un refugio tropical rodeado de naturaleza exuberante.", 550, ["https://images.pexels.com/photos/2373201/pexels-photo-2373201.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]);
    // let habitacion13 = new habitaciones(13, "Modern Elegance", "Un espacio moderno y elegante diseñado para el confort.", 400, ["https://images.pexels.com/photos/1179156/pexels-photo-1179156.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]);
    // let habitacion14 = new habitaciones(14, "Mountain Escape", "Escapada de montaña con impresionantes vistas panorámicas.", 600, ["https://images.pexels.com/photos/1571459/pexels-photo-1571459.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]);
    // let habitacion15 = new habitaciones(15, "Cozy Retreat", "Un acogedor refugio perfecto para relajarse y desconectar.", 350, ["https://images.pexels.com/photos/2598638/pexels-photo-2598638.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]);
    // let habitacion16 = new habitaciones(16, "Ocean Breeze", "Habitación frente al mar con brisa fresca y tranquilidad.", 500, ["https://images.pexels.com/photos/1648768/pexels-photo-1648768.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]);
    // let habitacion17 = new habitaciones(17, "Urban Luxury", "Lujo urbano en el corazón de la ciudad con todas las comodidades.", 700, ["https://images.pexels.com/photos/707581/pexels-photo-707581.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]);

    
    // datos_habitaciones.push(habitacion1);
    // datos_habitaciones.push(habitacion2);
    // datos_habitaciones.push(habitacion3);
    // datos_habitaciones.push(habitacion4);
    // datos_habitaciones.push(habitacion5);
    // datos_habitaciones.push(habitacion6);
    // datos_habitaciones.push(habitacion7);
    // datos_habitaciones.push(habitacion8);
    // datos_habitaciones.push(habitacion9);   
    // datos_habitaciones.push(habitacion10);   
    // datos_habitaciones.push(habitacion11);   
    // datos_habitaciones.push(habitacion12);   
    // datos_habitaciones.push(habitacion13);   
    // datos_habitaciones.push(habitacion14);   
    // datos_habitaciones.push(habitacion15);   
    
    
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
    function carga_datos_importantes(){
        $.ajax({
            type: "POST",
            url: "http://localhost:4000/api/habitaciones",
            success:function(respuesta){
                respuesta.forEach(element => {
                    let dato_aux =  new habitaciones(element.id_hab,`Habitacion N# ${element.id_hab}`,element.caracteristicas,element.precio,element.enlaces);

    // let habitacion17 = new habitaciones(17, "Urban Luxury", "Lujo urbano en el corazón de la ciudad con todas las comodidades.", 700, ["https://images.pexels.com/photos/707581/pexels-photo-707581.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"]);
                    datos_habitaciones.push(dato_aux);
                });
                cargar_habitaciones(datos_habitaciones);
                // cargar_habitaciones(respuesta);
                // document.getElementsByClassName("posts")[0].innerHTML += texto;
            }
        });
    };
    carga_datos_importantes();
});
