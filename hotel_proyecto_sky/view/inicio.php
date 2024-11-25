<?php
    $titulo = "Hotel villa";
?>

<?php include("layouts/head.php"); ?>
    <link rel="stylesheet" href="<?php echo url;?>/view/css/navbar_estyle.css">
    <link rel="stylesheet" href="<?php echo url;?>/view/css/titulo_principal.css">
    <link rel="stylesheet" href="<?php echo url;?>/view/css/servcios.css">
    <link rel="stylesheet" href="<?php echo url;?>/view/css/footer.css">
    <script src="<?php echo url;?>/view/js/inicio.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</head>
<body class="fondo_imagen_principal fondo_principal1">
    <?php include("layouts/navbar.php"); ?>
    <?php include("layouts/aside.php"); ?>
    <?php include("layouts/titulo_principal.php"); ?>
    <header class="">
        <?php include("layouts/page_date.php"); ?>
    </header>
    <header>
        </header>
    <?php include("layouts/abajo_control.php"); ?>
</body>

<?php include("layouts/footer.php"); ?>
