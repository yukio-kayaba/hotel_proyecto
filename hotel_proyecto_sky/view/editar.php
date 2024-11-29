<?php $titulo = "VILLA || Editar perfil"; ?>
<?php include("layouts/head.php"); ?>
<link rel="stylesheet" href="<?php echo url;?>/view/css/editar.css">
</head>
<body>
    <div class="edit-profile-container">
        <div class="edit-header">
            <h1 class="edit-title">Editar Perfil</h1>
            <p class="edit-subtitle">Actualiza tu información personal</p>
        </div>

        <form class="edit-form" action="<?php echo url;?>/perfil/actualizar" method="POST">
            <div class="form-grid">
                <!-- Información Personal -->
                <div class="form-section">
                    <h2 class="section-title">Información Personal</h2>
                    <div class="input-group">
                        <label for="tratamiento">Tratamiento</label>
                        <select id="tratamiento" name="tratamiento" required>
                            <option value="sr">Sr.</option>
                            <option value="sra">Sra.</option>
                            <option value="dr">Dr.</option>
                            <option value="dra">Dra.</option>
                        </select>
                    </div>

                    <div class="form-row">
                        <div class="input-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" name="nombre" required>
                        </div>
                        <div class="input-group">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" id="apellidos" name="apellidos" required>
                        </div>
                    </div>

                    <div class="input-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="input-group">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" id="telefono" name="telefono" required>
                    </div>

                    <div class="input-group">
                        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
                    </div>
                </div>

                <!-- Dirección -->
                <div class="form-section">
                    <h2 class="section-title">Dirección</h2>
                    <div class="input-group">
                        <label for="direccion">Dirección</label>
                        <input type="text" id="direccion" name="direccion" required>
                    </div>

                    <div class="form-row">
                        <div class="input-group">
                            <label for="ciudad">Ciudad</label>
                            <input type="text" id="ciudad" name="ciudad" required>
                        </div>
                        <div class="input-group">
                            <label for="codigo_postal">Código Postal</label>
                            <input type="text" id="codigo_postal" name="codigo_postal" required>
                        </div>
                    </div>

                    <div class="input-group">
                        <label for="pais">País</label>
                        <select id="pais" name="pais" required>
                            <option value="ES">España</option>
                            <option value="FR">Francia</option>
                            <option value="DE">Alemania</option>
                            <option value="IT">Italia</option>
                            <option value="IT">Peru</option>
                            <!-- Añadir más países según necesidad -->
                        </select>
                    </div>
                </div>

                <!-- Preferencias -->
                <div class="form-section">
                    <h2 class="section-title">Preferencias de Estancia</h2>
                    <div class="input-group">
                        <label for="tipo_habitacion">Tipo de Habitación Preferida</label>
                        <select id="tipo_habitacion" name="tipo_habitacion">
                            <option value="suite_junior">Suite Junior</option>
                            <option value="suite_ejecutiva">Suite Ejecutiva</option>
                            <option value="suite_presidencial">Suite Presidencial</option>
                        </select>
                    </div>

                    <div class="input-group">
                        <label for="preferencias_especiales">Preferencias Especiales</label>
                        <textarea id="preferencias_especiales" name="preferencias_especiales" rows="4"></textarea>
                    </div>

                    <div class="checkbox-group">
                        <label class="checkbox-container">
                            <input type="checkbox" name="newsletter" id="newsletter">
                            <span class="checkbox-text">Deseo recibir ofertas y novedades por email</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-primary">Guardar Cambios</button>
                <button type="button" class="btn-secondary" onclick="history.back()">Cancelar</button>
            </div>
        </form>
    </div>
</body>
</html>