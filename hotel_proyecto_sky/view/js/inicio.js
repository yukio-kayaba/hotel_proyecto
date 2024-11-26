let clic_date = document.getElementsByClassName("ubication")[0];
let reservation = document.getElementsByClassName("reservar")[0];
let puppet = false;
let FechaInicio = null;
let FechaFin = null;

clic_date.addEventListener("click",()=>{
    let objeto_aux = document.getElementsByClassName("ubication_date");
    if(puppet){
        console.log("desactivando");
        document.getElementsByClassName("ubication_date")[0].style.display = "none";
        document.getElementsByClassName("reservar_activate")[0].style.display = "none";
        puppet = false;
    }else{
        objeto_aux[0].style.display = "flex";
        puppet = true;
        setTimeout(()=>{
            objeto_aux[0].style.height = objeto_aux[0].scrollHeight+"px";
        },20);
    }
    // console.log("activando");
});
reservation.addEventListener("click",()=>{
    if(puppet){
        console.log("desactivando");
        document.getElementsByClassName("reservar_activate")[0].style.display = "none";
        document.getElementsByClassName("ubication_date")[0].style.display = "none";
        puppet = false;
    }else{
        console.log("activando");
        document.getElementsByClassName("reservar_activate")[0].style.display = "flex";
        puppet = true;
    }
});

const fecha_date = (fecha)=>{
    let fecha_date = new Date(fecha);
    fecha_date.setMonth(fecha_date.getMonth() + 1);
    return fecha_date;
}

const pintar_rango = ()=>{
    if(FechaInicio && FechaFin){
        let iniciar = new Date(Math.min(FechaInicio,FechaFin));
        let final = new Date(Math.max(FechaInicio, FechaFin));
        let DiasSelect = document.querySelectorAll('.flatpickr-day');
        DiasSelect.forEach(function(dias){
            let dia = dias.dateObj;
            if(dia >= iniciar && dia <= final){
                dias.classList.add('in-range');
            }else{
                dias.classList.remove('in-range');
            }
        });
    }
}

flatpickr("#fecha_inicio",{
    inline:true,
    dateFromat:"Y-m-d",
    defaultDate:"today",
    minDate:"today",
    locale:"es",
    onChange:function(SelectedDate,dateStr,instance){
        FechaInicio = SelectedDate[0];
        // if(fechaInicio){
        //     fechafin.setMonth(fechaInicio.getMonth()+1);
        // }
        document.getElementById("fecha_fin")._flatpickr.config.minDate = FechaInicio;
        pintar_rango();
        // document.getElementById("fecha_fin")._flatpickr.setDate(fechafin);
    }
});
flatpickr("#fecha_fin",{
    inline:true,
    dateFromat:"Y-m-d",
    defaultDate:fecha_date(new Date()),
    minDate:"today",
    locale:"es",
    onChange:function(SelectedDate,dateStr,instance){
        FechaFin = SelectedDate[0];
        pintar_rango();
        // let fechafin = SelectedDate[0];
        // let fechainicio = new Date(fechafin);
        // if(fechafin){
        //     fechainicio.setMonth(fechafin.getMonth()+1);
        // }
        // document.getElementById("fecha_inicio")._flatpickr.setDate(fechainicio);
    }
});


