
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
</section>
