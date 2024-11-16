<?php
    $titulo = "Hotel villa";
?>

<?php include("layouts/head.php"); ?>
    <link rel="stylesheet" href="<?php echo url;?>/view/css/navbar_estyle.css">
    <link rel="stylesheet" href="<?php echo url;?>/view/css/titulo_principal.css">
    <link rel="stylesheet" href="<?php echo url;?>/view/css/servcios.css">
</head>
<body>
    <?php include("layouts/navbar.php"); ?>
    <?php include("layouts/aside.php"); ?>
    <?php include("layouts/titulo_principal.php"); ?>
    <header>
        <?php include("layouts/page_date.php"); ?>
    </header>

    <?php include("layouts/abajo_control.php"); ?>
</body>

<?php include("layouts/footer.php"); ?>
