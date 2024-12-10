<?php
    $titulo = "RESERVANDO";
?>

<?php include("layouts/head.php"); ?>
    <link rel="stylesheet" href="<?php echo url;?>/view/css/navbar_estyle.css">
    <link rel="stylesheet" href="<?php echo url;?>/view/css/footer.css">
    <link rel="stylesheet" href="<?php echo url;?>/view/css/reserva.css">
    
    <script src="<?php echo url;?>/view/js/nav-bar.js" defer></script>
    <script src="<?php echo url;?>/view/js/reserva.js" defer></script>
</head>

<body>
    <?php include("layouts/navbar.php"); ?>

    <main class="booking-wrapper">
        <article class="booking-container">
            <header class="booking-progress">
                <ol>
                    <li class="progress-step active" data-step="1">
                        <span class="step-number">1</span>
                        <span class="step-label">Fechas</span>
                    </li>
                    <li class="progress-step" data-step="2">
                        <span class="step-number">2</span>
                        <span class="step-label">Resumen</span>
                    </li>
                    <li class="progress-step" data-step="3">
                        <span class="step-number">3</span>
                        <span class="step-label">Datos</span>
                    </li>
                    <li class="progress-step" data-step="4">
                        <span class="step-number">4</span>
                        <span class="step-label">Pago</span>
                    </li>
                </ol>
            </header>

            <form class="booking-form" id="bookingForm">
                <section class="form-step active" data-step="1">
                    <h2>Selección de fechas</h2>
                    <fieldset>
                        <legend>Fechas de estancia</legend>
                        <label>Fecha de entrada
                            <input type="date" name="checkin" required>
                        </label>
                        <label>Fecha de salida
                            <input type="date" name="checkout" required>
                        </label>
                    </fieldset>

                    <fieldset>
                        <legend>Detalles de reserva</legend>
                        <label>Huéspedes
                            <select name="guests" required>
                                <option value="1">1 Adulto</option>
                                <option value="2">2 Adultos</option>
                                <option value="3">3 Adultos</option>
                                <option value="4">4 Adultos</option>
                            </select>
                        </label>
                        <label>Tipo de habitación
                            <select name="room-type" required>
                                <option value="standard">Habitación Standard</option>
                                <option value="deluxe">Habitación Deluxe</option>
                                <option value="suite">Suite</option>
                            </select>
                        </label>
                    </fieldset>
                </section>

                <section class="form-step" data-step="2">
                    <h2>Resumen de reserva</h2>
                    <article class="booking-summary">
                        <!-- Se llena vía JavaScript -->
                    </article>
                </section>

                <section class="form-step" data-step="3">
                    <h2>Información personal</h2>
                    <fieldset>
                        <legend>Datos de contacto</legend>
                        <label>Nombre completo
                            <input type="text" name="name" required>
                        </label>
                        <label>Email
                            <input type="email" name="email" required>
                        </label>
                        <label>Teléfono
                            <input type="tel" name="phone" required>
                        </label>
                    </fieldset>
                </section>

                <section class="form-step" data-step="4">
                    <h2>Información de pago</h2>
                    <fieldset>
                        <legend>Datos de tarjeta</legend>
                        <label>Número de tarjeta
                            <input type="text" name="card" maxlength="16" required>
                        </label>
                        <label>Fecha de expiración
                            <input type="month" name="expiry" required>
                        </label>
                        <label>CVV
                            <input type="text" name="cvv" maxlength="3" required>
                        </label>
                    </fieldset>
                </section>

                <footer class="form-actions">
                    <button type="button" id="prevBtn">Anterior</button>
                    <button type="button" id="nextBtn">Siguiente</button>
                </footer>
            </form>
        </article>
    </main>

    <?php include("layouts/footer.php"); ?>
</body>
</html>