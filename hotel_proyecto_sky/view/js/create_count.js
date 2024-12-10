$(document).ready(function(){
    $(document).on("click","#boton_registrarse",function(){
        let dni = document.getElementById("dni_registrar");
        let correo = document.getElementById("correo_registrar");
        let contra = document.getElementById("contra_registrar");
        const datos = {
            'dni':dni.value,
            'correo':correo.value,
            'contra':contra.value
        };
        $.ajax({
            type:"POST",
            data:datos,
            url:"./model/tasks/crear_count.php",
            success:function(respuesta){
                console.log(respuesta);
            }
        });
    });
}); 