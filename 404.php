<?php

get_header(); ?>


    <div id="wrapper-content" class="clearfix ">
        <div class="page404" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/uploads/2016/12/bg-404.jpg); background-size: cover; background-position: top center; background-repeat: repeat;">
            <div class="page404-content container">
                <h3 class="subtitle">Vaya, esta página no se encuentra!</h3>
                <h2 class="title">4<span>0</span>4</h2>
                <div class="description">Lo sentimos mucho, pero falta la página que has solicitado. <span class="return-text"> O volver a </span>
                    <a href="<?php echo get_option('home'); ?>">
                    Pagina principal</a>
                </div>

            </div>
        </div>
    </div>
<?php get_footer(); ?>