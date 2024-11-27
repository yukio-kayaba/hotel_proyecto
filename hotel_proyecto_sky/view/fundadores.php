<?php
    $titulo = "VILLA || Fundadores"    
?>


<?php include("layouts/head.php"); ?>
    <link rel="stylesheet" href="<?php echo url;?>/view/css/habitacion.css">
    <link rel="stylesheet" href="<?php echo url;?>/view/css/navbar_estyle.css">
    <link rel="stylesheet" href="<?php echo url;?>/view/css/nav-isquierdo.css">
    <link rel="stylesheet" href="<?php echo url;?>/view/css/footer.css">
    
    <script src="<?php echo url;?>/view/js/nav-bar.js" defer></script>
    <script src="<?php echo url;?>/view/js/nav_isquierdo.js" defer></script>
    
</head>
<body>
    <?php include("layouts/navbar.php"); ?>
    <div class="contenido_pagina">
        <?php include("layouts/nav-bar-isq.php"); ?>
        <div class="col romms cuadro_datos_fund">
            <h3>Fundadores</h3>
            <div class="recta_fundadores">
                <div class="carta_datos">
                    <div>
                        <article class="card2" >
                            <img class="imagen_card completo_tam" src="<?php echo url;?>/view/images/fondo_z2.png" />
                            <img class="imagen_card completo_tam" src="<?php echo url;?>/view/images/z_foto.png" />
                        </article>
                        <div class="card_descripcion">
                            <p>ZAIN VIAMONTE VILCA</p>
                            <p>YUKIO KAYABA</p>
                        </div>
                    </div>
                    <div>
                        <article class="card2" >
                            <img class="imagen_card completo_tam" src="<?php echo url;?>/view/images/elonk_con_fondo.png" />
                            <img class="imagen_card completo_tam" src="<?php echo url;?>/view/images/imagen_elonk_sinf_fondo.png" />
                        </article>
                        <div class="card_descripcion">
                            <p>FREDY QUECAÑO MAMANI</p>
                            <p>SAMURAI</p>
                        </div>
                    </div>
                    <div>
                        <article class="card2" >
                            <img class="imagen_card completo_tam" src="<?php echo url;?>/view/images/elonk_con_fondo.png" />
                            <img class="imagen_card completo_tam" src="<?php echo url;?>/view/images/imagen_elonk_sinf_fondo.png" />
                        </article>
                        <div class="card_descripcion">
                            <p>ROY CCORIMANYA APAZA</p>
                            <p>YOR</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</hmtl>