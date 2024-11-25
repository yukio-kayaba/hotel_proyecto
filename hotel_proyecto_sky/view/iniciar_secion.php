<?php
    $titulo = "VILLA || Iniciar Secion";
?>

<?php include("layouts/head.php"); ?>
    <link rel="stylesheet" href="<?php echo url;?>/view/css/create-page.css">
</head>
    <body class="flex row  fondo_imagen_principal fondo_iniciar_secion  ">
        <section class="imagen_dato " style="width:100%">
            <div class="imagen_logo_control">
                <div class="imagen_datos" >
                    <img src="<?php echo url; ?>/view/images/logovilla2.png" alt="" >
                </div>
                <div class="titulos_datos">
                    <p class="no_burn">HOTEL</p>
                    <p class="no_burn">VILLA</p>
                </div>
            </div>
            <div class="formulario">
                <div class="titulo_presentacion">
                    <h2>Iniciar Secion</h2>
                </div>
                <div class="field">
                    <label class="label1">Nombre</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Ingrese su nombre">
                    </div>
                    </div>

                    <div class="field">
                    <label class="label1">Apellido</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input" type="text" placeholder="Ingrese su apellido">
                        <span class="icon is-small is-left">
                            <svg width="37px" height="37px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M11 15C10.1183 15 9.28093 14.8098 8.52682 14.4682C8.00429 14.2315 7.74302 14.1131 7.59797 14.0722C7.4472 14.0297 7.35983 14.0143 7.20361 14.0026C7.05331 13.9914 6.94079 14 6.71575 14.0172C6.6237 14.0242 6.5425 14.0341 6.46558 14.048C5.23442 14.2709 4.27087 15.2344 4.04798 16.4656C4 16.7306 4 17.0485 4 17.6841V19.4C4 19.9601 4 20.2401 4.10899 20.454C4.20487 20.6422 4.35785 20.7951 4.54601 20.891C4.75992 21 5.03995 21 5.6 21H8.4M15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7ZM12.5898 21L14.6148 20.595C14.7914 20.5597 14.8797 20.542 14.962 20.5097C15.0351 20.4811 15.1045 20.4439 15.1689 20.399C15.2414 20.3484 15.3051 20.2848 15.4324 20.1574L19.5898 16C20.1421 15.4477 20.1421 14.5523 19.5898 14C19.0376 13.4477 18.1421 13.4477 17.5898 14L13.4324 18.1574C13.3051 18.2848 13.2414 18.3484 13.1908 18.421C13.1459 18.4853 13.1088 18.5548 13.0801 18.6279C13.0478 18.7102 13.0302 18.7985 12.9948 18.975L12.5898 21Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        </span>
                        <span class="icon is-small is-right">
                            <!-- <i class="fas fa-check"></i> -->
                        </span>
                    </div>
                        <p class="help is-success">This username is available</p>
                    </div>

                    <div class="field">
                    <label class="label1">Correo</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input" type="email" placeholder="ejemplo@gmail.com">
                        <span class="icon is-small is-left">
                            <svg fill="#000000" width="31px" height="31px" viewBox="0 0 1920.00 1920.00" xmlns="http://www.w3.org/2000/svg" stroke="#000000" stroke-width="9.6"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#0870f7" stroke-width="57.6"> <path d="M1920 428.266v1189.54l-464.16-580.146-88.203 70.585 468.679 585.904H83.684l468.679-585.904-88.202-70.585L0 1617.805V428.265l959.944 832.441L1920 428.266ZM1919.932 226v52.627l-959.943 832.44L.045 278.628V226h1919.887Z" fill-rule="evenodd"></path> </g><g id="SVGRepo_iconCarrier"> <path d="M1920 428.266v1189.54l-464.16-580.146-88.203 70.585 468.679 585.904H83.684l468.679-585.904-88.202-70.585L0 1617.805V428.265l959.944 832.441L1920 428.266ZM1919.932 226v52.627l-959.943 832.44L.045 278.628V226h1919.887Z" fill-rule="evenodd"></path> </g></svg>
                        </span>
                        <span class="icon is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                        </span>
                    </div>
                        <p class="help is-danger" hidden >This email is invalid</p>
                    </div>
                    <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link">Crear cuenta !!</button>
                    </div>
                    <div class="control">
                        <button class="button is-link is-light">Cancel</button>
                    </div>
                    </div>
            </div>
        </section>
    </body>
</html>