
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
        <div>
            <p>Iniciar Secion</p>
        </div>
        <div>
            <p>Reservar Fecha</p>
        </div>
        <div>
            <p>Hubicacion</p>
        </div>
    </div>
</section>
<section class="section parallax bg-image-1">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15575.352729069447!2d-69.20430054999999!3d-12.59291425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x917b4eadc297b061%3A0xab262fb284ada8fd!2sPlaza%20Bolognesi!5e0!3m2!1ses-419!2spe!4v1731617117242!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</section>
