let clic_date = document.getElementsByClassName("ubication")[0];
let reservation = document.getElementsByClassName("reservar")[0];
let ubicationMenu = document.getElementsByClassName("ubication_date")[0];
let reservationMenu = document.getElementsByClassName("reservar_activate")[0];
let puppet = false;
let FechaInicio = null;
let FechaFin = null;

// Función para cerrar menús
function cerrarMenus() {
    if(puppet) {
        ubicationMenu.style.display = "none";
        reservationMenu.style.display = "none";
        puppet = false;
    }
}

// Event listener para ubicación
clic_date.addEventListener("click", (e) => {
    e.stopPropagation();
    if(puppet && ubicationMenu.style.display === "flex") {
        cerrarMenus();
    } else {
        cerrarMenus(); // Cierra cualquier otro menú abierto
        ubicationMenu.style.display = "flex";
        puppet = true;
        setTimeout(() => {
            ubicationMenu.style.height = ubicationMenu.scrollHeight + "px";
        }, 20);
    }
});

// Event listener para reserva
reservation.addEventListener("click", (e) => {
    e.stopPropagation();
    if(puppet && reservationMenu.style.display === "flex") {
        cerrarMenus();
    } else {
        cerrarMenus(); // Cierra cualquier otro menú abierto
        reservationMenu.style.display = "flex";
        puppet = true;
    }
});

// Click fuera de los menús
document.addEventListener("click", (event) => {
    const isClickInsideUbication = ubicationMenu.contains(event.target) || 
                                  clic_date.contains(event.target);
    const isClickInsideReservation = reservationMenu.contains(event.target) || 
                                    reservation.contains(event.target) ||
                                    event.target.closest('.flatpickr-calendar');
    
    if (!isClickInsideUbication && !isClickInsideReservation && puppet) {
        cerrarMenus();
    }
});

// Funciones auxiliares
const fecha_date = (fecha) => {
    let fecha_date = new Date(fecha);
    fecha_date.setMonth(fecha_date.getMonth() + 1);
    return fecha_date;
}

const pintar_rango = () => {
    if(FechaInicio && FechaFin) {
        let iniciar = new Date(Math.min(FechaInicio, FechaFin));
        let final = new Date(Math.max(FechaInicio, FechaFin));
        let DiasSelect = document.querySelectorAll('.flatpickr-day');
        DiasSelect.forEach(function(dias) {
            let dia = dias.dateObj;
            if(dia >= iniciar && dia <= final) {
                dias.classList.add('in-range');
            } else {
                dias.classList.remove('in-range');
            }
        });
    }
}

// Configuración de calendarios
flatpickr("#fecha_inicio", {
    inline: true,
    dateFromat: "Y-m-d",
    defaultDate: "today",
    minDate: "today",
    locale: "es",
    onChange: function(SelectedDate, dateStr, instance) {
        FechaInicio = SelectedDate[0];
        document.getElementById("fecha_fin")._flatpickr.config.minDate = FechaInicio;
        pintar_rango();
    }
});

flatpickr("#fecha_fin", {
    inline: true,
    dateFromat: "Y-m-d",
    defaultDate: fecha_date(new Date()),
    minDate: "today",
    locale: "es",
    onChange: function(SelectedDate, dateStr, instance) {
        FechaFin = SelectedDate[0];
        pintar_rango();
    }
});