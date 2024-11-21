
<section class="section parallax bg-image-1">
    <div class="titulo_principal">
        <img  src="<?php echo url;?>/view/images/hotel_loe.gif" alt="">
        <p> Bienvenido a  </p>
        <h2>
            <?php 
                $texto = "HOTEL VILLA"; 

                for ($i=0; $i < strlen($texto); $i++) { 
            ?>
                <span style="--i:<?php echo ($i + 2);?>"><?php echo $texto[$i];?></span>
            <?php }?>
        </h2>
        <p>Su Comodidad al maximo</p>
    </div>
    <div class="elemento_separado">
        <div class="drop-activador">
            <div class="drop-dow">
                <p>Iniciar Secion</p>
            </div>
            <div class="drop-dow-menu1 ">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure, placeat libero, impedit nam rem ducimus sequi natus dolore debitis quod ipsa delectus commodi enim obcaecati dolorem illo quibusdam suscipit.
                </p>
            </div>
        </div>
        <div class="drop-activador">
            <div class="drop-dow reservar">
                <p>Reservar</p>
            </div>
            <div class="drop-dow-menu1 reservar_activate" style="left: -2%;">
                <h2>Selecione una fecha </h2>
                <div class="row_update">
                    <!-- <h1>Selecciona una fecha</h1> -->
                    <input type="text" name="" id="fecha_inicio" placeholder="Seleccione su fecha" hidden>
                    <input type="text" name="" id="fecha_fin" placeholder="Final" hidden>
                </div>
                <button class="button is-link is-light">Selecionar Habitacion</button>
            </div>
        </div>
        <div class="drop-activador ">
            <div class="drop-dow ubication">
                <p>Hubicacion</p>
            </div>
            <div class="drop-dow-menu1 ubication_date" style="left:50%;">
                <h2>Hubicacion de nuestro sitio</h2>
                <p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15575.496065256566!2d-69.2027392!3d-12.59055375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1732137340302!5m2!1ses-419!2spe" width="440" height="240" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure, placeat libero, impedit nam rem ducimus sequi natus dolore debitis quod ipsa delectus commodi enim obcaecati dolorem illo quibusdam suscipit. -->
                </p>
            </div>
        </div>
    </div>
</section>

