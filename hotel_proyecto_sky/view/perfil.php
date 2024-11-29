
   <?php $titulo = "VILLA || perfil"; ?>
   <?php include("layouts/head.php"); ?>
   <link rel="stylesheet" href="<?php echo url;?>/view/css/navbar_estyle.css">

   <script src="<?php echo url;?>/view/js/nav-bar.js" defer></script>

<link rel="stylesheet" href="<?php echo url;?>/view/css/perfil.css">
</head>


<body>
    <div class="elite-profile">
    <?php include("layouts/navbar.php"); ?>
        <div class="profile-container">
            <!-- Columna Izquierda -->
            <div class="profile-sidebar">
                <div class="profile-header">
                    <div class="profile-avatar">
                        <img src="<?php echo url;?>/view/images/goku_date.gif"Foto de Perfil">
                        <span class="status-badge">Huésped Elite</span>
                    </div>
                    <h1 class="profile-name">Carlos Montoya</h1>
                    <p class="profile-title">Miembro Distinguido | Elite Status</p>
                </div>

                <div class="stats-container">
                    <div class="stat-item">
                        <div class="stat-value">24</div>
                        <div class="stat-label">Estancias</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">15,420</div>
                        <div class="stat-label">Puntos Elite</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-value">8</div>
                        <div class="stat-label">Años de Membresía</div>
                    </div>
                </div>

                <div class="profile-actions"> 
                    <a href="editar">
                    <button class="action-button secondary-button"> Editar perfil</button>
                    </a>
                </div>
            </div>

            <!-- Columna Derecha -->
            <div class="profile-main">
                <div class="content-section preferences-section">
                    <h2 class="section-title">Preferencias Personales</h2>
                    <div class="preferences-grid">
                        <div class="preference-item">
                            <div class="preference-label">Tipo de Habitación</div>
                            <div class="preference-value">Suite Junior Vista al Mar</div>
                        </div>
                        <div class="preference-item">
                            <div class="preference-label">Experiencia Culinaria</div>
                            <div class="preference-value">Gastronomía Mediterránea</div>
                        </div>
                        <div class="preference-item">
                            <div class="preference-label">Servicios Especiales</div>
                            <div class="preference-value">Spa y Bienestar</div>
                        </div>
                        <div class="preference-item">
                            <div class="preference-label">Temporada Preferida</div>
                            <div class="preference-value">Primavera - Verano</div>
                        </div>
                    </div>
                </div>

                <div class="content-section">
                    <h2 class="section-title">Historial de Estancias</h2>
                    <div class="stay-history">
                        <div class="stay-item">
                            <div class="stay-info">
                                <span class="stay-location">Grand Hotel Madrid</span>
                                <span class="stay-details">Suite Ejecutiva | 5 noches</span>
                            </div>
                            <div class="stay-meta">
                                <span class="stay-date">Octubre 2023</span>
                                <span class="stay-status">Completada</span>
                            </div>
                        </div>
                        <div class="stay-item">
                            <div class="stay-info">
                                <span class="stay-location">Resort Barcelona Playa</span>
                                <span class="stay-details">Suite Vista Mar | 7 noches</span>
                            </div>
                            <div class="stay-meta">
                                <span class="stay-date">Agosto 2023</span>
                                <span class="stay-status">Completada</span>
                            </div>
                        </div>
                        <div class="stay-item">
                            <div class="stay-info">
                                <span class="stay-location">Hotel Sevilla Centro</span>
                                <span class="stay-details">Suite Junior | 3 noches</span>
                            </div>
                            <div class="stay-meta">
                                <span class="stay-date">Mayo 2023</span>
                                <span class="stay-status">Completada</span>
                            </div>
                        </div>
                        <div class="stay-item">
                            <div class="stay-info">
                                <span class="stay-location">Grand Hotel Madrid</span>
                                <span class="stay-details">Suite Ejecutiva | 5 noches</span>
                            </div>
                            <div class="stay-meta">
                                <span class="stay-date">Octubre 2023</span>
                                <span class="stay-status">Completada</span>
                            </div>
                        
                            </div>
                            <div class="stay-item">
                            <div class="stay-info">
                                <span class="stay-location">Grand Hotel Madrid</span>
                                <span class="stay-details">Suite Ejecutiva | 5 noches</span>
                            </div>
                            <div class="stay-meta">
                                <span class="stay-date">Octubre 2023</span>
                                <span class="stay-status">Completada</span>
                            </div>
                        
                            </div>
                            <div class="stay-item">
                            <div class="stay-info">
                                <span class="stay-location">Grand Hotel Madrid</span>
                                <span class="stay-details">Suite Ejecutiva | 5 noches</span>
                            </div>
                            <div class="stay-meta">
                                <span class="stay-date">Octubre 2023</span>
                                <span class="stay-status">Completada</span>
                            </div>
                        
                            </div>
                            <div class="stay-item">
                            <div class="stay-info">
                                <span class="stay-location">Grand Hotel Madrid</span>
                                <span class="stay-details">Suite Ejecutiva | 5 noches</span>
                            </div>
                            <div class="stay-meta">
                                <span class="stay-date">Octubre 2023</span>
                                <span class="stay-status">Completada</span>
                            </div>
                        
                            </div>
                            <div class="stay-item">
                            <div class="stay-info">
                                <span class="stay-location">Grand Hotel Madrid</span>
                                <span class="stay-details">Suite Ejecutiva | 5 noches</span>
                            </div>
                            <div class="stay-meta">
                                <span class="stay-date">Octubre 2023</span>
                                <span class="stay-status">Completada</span>
                            </div>
                        
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>