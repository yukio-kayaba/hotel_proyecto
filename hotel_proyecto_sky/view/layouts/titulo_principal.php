
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
            <div class="drop-dow-menu1">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure, placeat libero, impedit nam rem ducimus sequi natus dolore debitis quod ipsa delectus commodi enim obcaecati dolorem illo quibusdam suscipit.
                </p>
            </div>
        </div>
        <div class="drop-activador">
            <div class="drop-dow">
                <p>Iniciar Secion</p>
            </div>
            <div class="drop-dow-menu1">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure, placeat libero, impedit nam rem ducimus sequi natus dolore debitis quod ipsa delectus commodi enim obcaecati dolorem illo quibusdam suscipit.
                </p>
            </div>
        </div>
        <div class="drop-activador">
            <div class="drop-dow">
                <p>Iniciar Secion</p>
            </div>
            <div class="drop-dow-menu1">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure, placeat libero, impedit nam rem ducimus sequi natus dolore debitis quod ipsa delectus commodi enim obcaecati dolorem illo quibusdam suscipit.
                </p>
            </div>
        </div>
    </div>
</section>

