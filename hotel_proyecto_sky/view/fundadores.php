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
                    
                    <div class="room tam_30" >
                            <div class="image">
                                <img src="https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
                            </div>
                            <div class="expansion">
                                <h4>Madison Twin</h4>
                                <ul class="config">
                                    <li>hola1</li>
                                    <li>hola2</li>
                                </ul>
                            </div>
                    </div>
                    <div class="room tam_30" >
                            <div class="image">
                                <img src="https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" />
                            </div>
                            <h4>Madison Twin</h4>
                            <div class="expansion">
                                <ul class="config">
                                    <li>hola1</li>
                                    <li>hola2</li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</hmtl>