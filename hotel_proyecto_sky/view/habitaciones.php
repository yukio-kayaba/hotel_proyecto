<?php
    $titulo = "habitaciones";
?>

<?php include("layouts/head.php"); ?>
    <link rel="stylesheet" href="<?php echo url;?>/view/css/habitacion.css">
    <link rel="stylesheet" href="<?php echo url;?>/view/css/navbar_estyle.css">
    <link rel="stylesheet" href="<?php echo url;?>/view/css/nav-isquierdo.css">
    <link rel="stylesheet" href="<?php echo url;?>/view/css/footer.css">
    <link rel="stylesheet" href="<?php echo url;?>/view/css/modal.css">
    <link rel="stylesheet" href="<?php echo url;?>/view/css/fotos.css">

    <script src="<?php echo url;?>/view/js/classes/class_habitaciones.js" defer></script>
    <script src="<?php echo url;?>/view/js/habitaciones.js" defer></script>
    <script src="<?php echo url;?>/view/js/nav-bar.js" defer></script>
    <script src="<?php echo url;?>/view/js/nav_isquierdo.js" defer></script>
    
</head>

<body>
    <?php include("layouts/navbar.php"); ?>
    
    <div class="contenido_pagina">
        <?php include("layouts/nav-bar-isq.php");?>
        <div class="col romms">
            <section class="habitacion_tipo">
                <h3>+ de 500 Habitaciones</h3>

                <div class="posts">
                    
                </div>
                
            </section>
            <?php include("layouts/footer.php"); ?>
        </div>
    </div>
    <?php include("layouts/modal_pop.php"); ?>
</body>
</html>