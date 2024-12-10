<?php
    require_once("../../config.php");
    require_once("../consultas.php");

    if(isset($_POST['dni']) && isset($_POST['correo']) && isset($_POST['contra']) ){
        $exp_correo = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        $exp_contra = '/^[a-zA-Z0-9_áéíóúÁÉÍÓÚñÑçÇ\s]+$/';
        $exp_dni = '/^[0-9]+$/';
        $dni = $_POST['dni'];
        $correo = $_POST['correo'];
        $contra = $_POST['contra'];
        if(strlen($dni) != 8 || strlen($correo) < 10 || strlen($contra) < 10){
            return 'cantidad_no';
        }
        if(preg_match($exp_correo,$correo) && preg_match($exp_contra,$contra) && preg_match($exp_dni,$dni)){
            $consultas = new Consulta();
            $respuesta = $consultas->CONSULTA_GET("https://api.apis.net.pe/v1/dni?numero=$dni");
            print_r($respuesta);
            return;
            $valores = [    
                'correo' => $correo,
                'nombres'=>$respuesta['nombres'],
                'apellidoMaterno'=>$respuesta['apellidoMaterno'],
                'apellidoPaterno'=>$respuesta['apellidoPaterno']
            ];
            print_r(json_encode($valores)); 
        }else{
            echo 'no_data';
        }
    }else{
        echo 'error';
    }
?>