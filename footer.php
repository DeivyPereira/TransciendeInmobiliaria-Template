	<footer style="position: relative;">
	    <div id="footer" class="footer-top-area">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	                    <div class="footer-heading">
	                        <h2><a href="<?php echo get_permalink(get_page_by_path('nosotros')); ?>" style="color:white;">Nosotros</a></h2>
	                        <p style="text-align: justify">Somos una empresa de Intermediación inmobiliaria enfocada en
	                            satisfacer las necesidades de
	                            nuestros clientes vendedores y compradores.</p>
	                        <p style="text-align: justify">Contamos con colaboradores de distintas
	                            profesiones con mucha
	                            experiencia en el sector
	                            inmobiliario quienes están totalmente capacitados para vender las propiedades que tengamos
	                            en
	                            cartera.</p>
	                        <div class="footer-social-icons">
	                            <ul>
	                                <li><a href="https://facebook.com/trasciendeinmobiliariaperu/" target="_blank"><i
	                                            class="fa fa-facebook"></i></a></li>
	                                <li><a href="https://twitter.com/trasciendesac" target="_blank"><i
	                                            class="fa fa-twitter"></i></a></li>

	                                <li><a href="https://www.instagram.com/trasciendeinmobiliaria/" target="_blank"><i
	                                            class="fa fa-instagram"></i></a></li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	                    <div class="footer-heading">
	                        <h2>Links frecuentes</h2>
	                        <div class="footer-two">
	                            <nav>
	                                <ul>

	                                    <li><a href="<?php echo get_permalink(get_page_by_path('categorias')); ?>"><i
	                                                class="fa fa-angle-right" aria-hidden="true"></i>Propiedades</a>
	                                    </li>
	                                    <li><a href="<?php echo get_permalink(get_page_by_path('nosotros')); ?>"><i
	                                                class="fa fa-angle-right" aria-hidden="true"></i>Quienes
	                                            somos</a></li>
	                                    <li><a href="<?php echo get_permalink(get_page_by_path('diferente')); ?>"><i
	                                                class="fa fa-angle-right" aria-hidden="true"></i>Buscas
	                                            algo diferente</a>
	                                    </li>
	                                    <li><a href="http://trasciendeinmobiliaria.com/category/notice/"><i
	                                                class="fa fa-angle-right" aria-hidden="true"></i>Noticias</a>
	                                    </li>
	                                    <li><a href="<?php echo get_permalink(get_page_by_path('contacto')); ?>"><i
	                                                class="fa fa-angle-right" aria-hidden="true"></i>Contacto</a></li>
	                                    <li><a href="https://trasciendeinmobiliaria.com/sistema/#/dashboard" target="_blank"><i
	                                                class="fa fa-angle-right" aria-hidden="true"></i>Login</a></li>
	                                </ul>
	                            </nav>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	                    <div class="footer-heading heading-margin footer-two">
	                        <h2><a href="http://trasciendeinmobiliaria.com/category/notice/" style="color:white;">Noticias </a></h2>
							 <div class="footer-two">
	                            <nav>
	                                <ul>
									<?php $query1 = 1; $the_query = new WP_Query(array(  'posts_per_page' => '4'  )); ?>
									<?php if ($the_query->have_posts()) : ?>
									  <?php while ($the_query->have_posts()) : $the_query->the_post();
											$id = get_the_ID();
											?>
	                                    <li><a href="<?php the_permalink() ?>" style="text-align:left;"><i
	                                                class="fa fa-angle-right" aria-hidden="true"></i><?php the_title(); ?></a>
	                                    </li>
											 <?php $query1++; endwhile; ?>
									<?php endif; ?>
	                                </ul>
	                            </nav>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	                    <div class="footer-heading">
	                        <h2><a href="<?php echo get_permalink(get_page_by_path('contacto')); ?>" style="color:white;">Contactanos</a></h2>
	                        <p class="footer-border-bottom"><i class="fa fa-home" aria-hidden="true"></i> Direccion: Calle,
	                            Abutardas Distrito Santa Anita - Lima</p>
	                        <p class="footer-border-bottom"><i class="fa fa-phone"></i>(+51) 991 892 097 </p>
	                        <p class="footer-border-bottom"><i
	                                class="fa fa-envelope"></i>contacto@trasciendeinmobiliaria.com </p>
	                        <p><i class="fa fa-clock-o" aria-hidden="true"></i> Lun - Dom 9.00 - 18.00 </p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="footer-bottom-area">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	                    <div class="footer-bottom-left">
	                        <p>Designed & Developed By <a href="http://venetronic.com/">Venetronic Peru</a></p>
	                    </div>
	                </div>
	                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
	                    <div class="subscribe">
	                        <p>Suscribirse </p>
	                    </div>
	                </div>
	                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
	                    <div class="search-area">
	                        <div id="custom-search-input">
	                            <div class="input-group">
	                                <input type="text" placeholder="e-mail" class="search-query form-control">
	                                <span class="input-group-btn">
	                                    <button type="button" class="btn btn-danger">
	                                        <span><i class="fa fa-paper-plane" aria-hidden="true"></i></span>
	                                    </button>
	                                </span>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</footer>
	<!-- Footer End Here -->
	<!-- Slide Menu Section Start Here -->
	<div class="slide-menu-area" id="sideSlide">
	    <div class="close"><i class="fa fa-times" aria-hidden="true"></i></div>
	    <h3>¿Como te podemos ayudar?</h3>
	    <ul>
	        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> (+51) 991 892 097 </a></li>
	        <li><a href="#">contacto@trasciendeinmobiliaria.com</a></li>
	        <li><a href="#">Horario de Atención: 9.00 - 18.00 </a></li>
	        <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Lun - Dom </a></li>
	    </ul>
	</div>
	<!-- Slide Menu Section End Here -->
	<!-- all js here -->
	<!-- jquery latest version -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/vendor/jquery-1.12.0.min.js"></script>
	<!-- bootstrap js -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
	<!-- owl.carousel js -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/owl.carousel.min.js"></script>
	<!-- meanmenu js -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.meanmenu.js"></script>
	<!-- jquery-ui js -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-ui.min.js"></script>
	<!-- wow js -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/wow.min.js"></script>
	<!-- plugins js -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/plugins.js"></script>
	<!-- Nivo slider js
        ============================================ -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/inc/custom-slider/js/jquery.nivo.slider.js"
	    type="text/javascript"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/inc/custom-slider/home.js" type="text/javascript"></script>
	<!-- Lightslider JS
        ============================================ -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/lightslider.js"></script>
	<!-- Parallax -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax.js/1.0/parallax.min.js" ></script>
	<!-- Parallax End -->
	<!-- jquery.counterup js -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.counterup.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/waypoints.min.js"></script>
	<!-- knob circle js -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.knob.js"></script>
	<!-- jquery.appear js -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.appear.js"></script>
	<!-- jQuery Carousel Evolution -->
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/inc//3dslider/js/jquery.gallery.js">
	</script>
	<script type="text/javascript"
	    src="<?php bloginfo('stylesheet_directory'); ?>/inc//3dslider/js/modernizr.custom.53451.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/inc//fancybox/jquery.fancybox.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js"></script>

	<!-- main js -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-expander/1.7.0/jquery.expander.min.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js'></script>
	<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/localization/messages_es.js"></script>
	<?php

     wp_footer();
	 
    ?>
	</body>
<script>
$('.parallax-window').parallax({imageSrc: 'https://www.radiustheme.com/demo/wordpress/themes/homlisti/wp-content/uploads/2021/08/home-4-main-banner.jpg'});
</script>
	</html>